<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Page;
use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cache;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $content = Cache::remember('sitemap_xml', 3600, function () {
            $urls = collect();

            // Static pages
            $urls->push(['loc' => route('home'), 'priority' => '1.0', 'changefreq' => 'daily']);
            $urls->push(['loc' => route('about'), 'priority' => '0.8', 'changefreq' => 'monthly']);
            $urls->push(['loc' => route('services.index'), 'priority' => '0.8', 'changefreq' => 'weekly']);
            $urls->push(['loc' => route('projects.index'), 'priority' => '0.8', 'changefreq' => 'weekly']);
            $urls->push(['loc' => route('courses.index'), 'priority' => '0.8', 'changefreq' => 'weekly']);
            $urls->push(['loc' => route('cooperation'), 'priority' => '0.7', 'changefreq' => 'monthly']);
            $urls->push(['loc' => route('posts.index'), 'priority' => '0.8', 'changefreq' => 'daily']);
            $urls->push(['loc' => route('contact'), 'priority' => '0.7', 'changefreq' => 'monthly']);

            // Services
            Service::active()->ordered()->get()->each(function ($service) use ($urls) {
                $urls->push([
                    'loc' => route('services.show', $service),
                    'lastmod' => $service->updated_at->toW3cString(),
                    'priority' => '0.7',
                    'changefreq' => 'monthly',
                ]);
            });

            // Projects
            Project::active()->ordered()->get()->each(function ($project) use ($urls) {
                $urls->push([
                    'loc' => route('projects.show', $project),
                    'lastmod' => $project->updated_at->toW3cString(),
                    'priority' => '0.7',
                    'changefreq' => 'monthly',
                ]);
            });

            // Courses
            Course::active()->ordered()->get()->each(function ($course) use ($urls) {
                $urls->push([
                    'loc' => route('courses.show', $course),
                    'lastmod' => $course->updated_at->toW3cString(),
                    'priority' => '0.7',
                    'changefreq' => 'weekly',
                ]);
            });

            // Posts
            Post::published()->latest()->get()->each(function ($post) use ($urls) {
                $urls->push([
                    'loc' => route('posts.show', $post),
                    'lastmod' => $post->updated_at->toW3cString(),
                    'priority' => '0.6',
                    'changefreq' => 'weekly',
                ]);
            });

            // Dynamic Pages
            Page::active()->get()->each(function ($page) use ($urls) {
                if (!in_array($page->slug, ['gioi-thieu', 'hop-tac'])) {
                    $urls->push([
                        'loc' => route('pages.show', $page),
                        'lastmod' => $page->updated_at->toW3cString(),
                        'priority' => '0.5',
                        'changefreq' => 'monthly',
                    ]);
                }
            });

            return view('sitemap', compact('urls'))->render();
        });

        return response($content, 200)
            ->header('Content-Type', 'application/xml');
    }
}
