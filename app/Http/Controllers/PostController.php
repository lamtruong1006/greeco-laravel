<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(Request $request): View
    {
        $categories = PostCategory::active()
            ->withCount(['posts' => function ($query) {
                $query->published();
            }])
            ->ordered()
            ->get();

        $posts = Post::with(['category', 'author'])
            ->published()
            ->latest()
            ->when($request->filled('category'), function ($query) use ($request) {
                $query->whereHas('category', function ($q) use ($request) {
                    $q->where('slug', $request->category);
                });
            })
            ->when($request->filled('tag'), function ($query) use ($request) {
                $tag = $request->tag;
                // Convert to JSON escaped format and escape backslash for MySQL LIKE
                $escapedTag = trim(json_encode($tag, JSON_UNESCAPED_SLASHES), '"');
                $escapedTag = str_replace('\\', '\\\\', $escapedTag);
                $query->where('tags', 'like', '%' . $escapedTag . '%');
            })
            ->when($request->filled('search'), function ($query) use ($request) {
                $query->where(function ($q) use ($request) {
                    $q->where('title', 'like', '%' . $request->search . '%')
                      ->orWhere('excerpt', 'like', '%' . $request->search . '%')
                      ->orWhere('content', 'like', '%' . $request->search . '%');
                });
            })
            ->paginate(9);

        $recentPosts = Post::published()->latest()->limit(5)->get();

        // Collect unique tags from all published posts
        $tags = Post::published()
            ->whereNotNull('tags')
            ->pluck('tags')
            ->flatten()
            ->unique()
            ->values();

        // Current filters for active state
        $currentCategory = $request->category;
        $currentTag = $request->tag;

        return view('pages.posts.index', compact('posts', 'categories', 'recentPosts', 'tags', 'currentCategory', 'currentTag'));
    }

    public function show(Post $post): View
    {
        abort_unless($post->status === 'published', 404);

        $post->load(['category', 'author']);
        $post->incrementViews();

        $relatedPosts = Post::with(['category', 'author'])
            ->published()
            ->where('id', '!=', $post->id)
            ->when($post->post_category_id, function ($query) use ($post) {
                $query->where('post_category_id', $post->post_category_id);
            })
            ->latest()
            ->limit(3)
            ->get();

        return view('pages.posts.show', compact('post', 'relatedPosts'));
    }
}
