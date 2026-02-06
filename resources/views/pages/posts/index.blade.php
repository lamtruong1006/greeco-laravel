@extends('layouts.app')

@section('title', 'Tin tức - GREECO | Viện Đào tạo và nghiên cứu Môi trường')

@section('content')
    <x-page-header title="Tin tức & Bài viết" :breadcrumbs="[['title' => 'Tin tức', 'url' => route('posts.index')]]" />

    <!-- Page Blog Start -->
    <div class="page-blog">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <div class="row">
                        @forelse($posts as $index => $post)
                            <div class="col-lg-6 col-md-6">
                                <!-- Blog Item Start -->
                                <div class="blog-item wow fadeInUp"
                                    @if ($index > 0) data-wow-delay="{{ ($index % 2) * 0.2 }}s" @endif>
                                    <div class="blog-image">
                                        <a href="{{ route('posts.show', $post->slug ?? $post->id) }}" data-cursor-text="Xem">
                                            <figure class="image-anime">
                                                <img src="{{ asset($post->featured_image ?? 'images/post-1.jpg') }}"
                                                    alt="{{ $post->title }}">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-meta">
                                            <span><i class="fa-regular fa-calendar"></i>
                                                {{ ($post->published_at ?? $post->created_at)->format('d/m/Y') }}</span>
                                            @if (isset($post->category))
                                                <span><i class="fa-regular fa-folder"></i>
                                                    {{ $post->category->name }}</span>
                                            @endif
                                        </div>
                                        <h3><a
                                                href="{{ route('posts.show', $post->slug ?? $post->id) }}">{{ $post->title }}</a>
                                        </h3>
                                        <p>{{ Str::limit($post->excerpt ?? strip_tags($post->content), 100) }}</p>
                                        <a href="{{ route('posts.show', $post->slug ?? $post->id) }}" class="read-more">Đọc
                                            thêm <i class="fa-solid fa-arrow-right"></i></a>
                                    </div>
                                </div>
                                <!-- Blog Item End -->
                            </div>
                        @empty
                            <div class="col-lg-12">
                                <div class="text-center py-5">
                                    <p>Chưa có bài viết nào.</p>
                                </div>
                            </div>
                        @endforelse
                    </div>

                    @if (isset($posts) && $posts instanceof \Illuminate\Pagination\LengthAwarePaginator && $posts->hasPages())
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pagination-wrapper">
                                    {{ $posts->links() }}
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        <!-- Search Box -->
                        <div class="sidebar-widget wow fadeInUp">
                            <h3>Tìm kiếm</h3>
                            <form action="{{ route('posts.index') }}" method="GET" class="search-form">
                                <input type="text" name="search" placeholder="Tìm kiếm bài viết..."
                                    value="{{ request('search') }}">
                                <button type="submit"><i class="fa-solid fa-search"></i></button>
                            </form>
                        </div>

                        <!-- Categories -->
                        @if (isset($categories) && count($categories) > 0)
                            <div class="sidebar-widget wow fadeInUp" data-wow-delay="0.2s">
                                <h3>Danh mục</h3>
                                <ul class="category-list">
                                    <li><a href="{{ route('posts.index') }}"
                                            class="{{ !isset($currentCategory) || !$currentCategory ? 'active' : '' }}">Tất
                                            cả</a></li>
                                    @foreach ($categories as $category)
                                        <li><a href="{{ route('posts.index', ['category' => $category->slug ?? $category->id]) }}"
                                                class="{{ isset($currentCategory) && $currentCategory == ($category->slug ?? $category->id) ? 'active' : '' }}">{{ $category->name }}
                                                <span>({{ $category->posts_count ?? 0 }})</span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Recent Posts -->
                        @if (isset($recentPosts) && count($recentPosts) > 0)
                            <div class="sidebar-widget wow fadeInUp" data-wow-delay="0.4s">
                                <h3>Bài viết gần đây</h3>
                                <ul class="recent-posts">
                                    @foreach ($recentPosts->take(5) as $recentPost)
                                        <li>
                                            <a href="{{ route('posts.show', $recentPost->slug ?? $recentPost->id) }}">
                                                <div class="post-thumb">
                                                    <img src="{{ asset($recentPost->featured_image ?? 'images/post-1.jpg') }}"
                                                        alt="{{ $recentPost->title }}">
                                                </div>
                                                <div class="post-info">
                                                    <h4>{{ Str::limit($recentPost->title, 50) }}</h4>
                                                    <span>{{ ($recentPost->published_at ?? $recentPost->created_at)->format('d/m/Y') }}</span>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- Tags -->
                        @if (isset($tags) && count($tags) > 0)
                            <div class="sidebar-widget wow fadeInUp" data-wow-delay="0.6s">
                                <h3>Tags</h3>
                                <div class="tag-cloud">
                                    @foreach ($tags as $tag)
                                        <a href="{{ route('posts.index', ['tag' => $tag]) }}"
                                            class="{{ isset($currentTag) && $currentTag == $tag ? 'active' : '' }}">{{ $tag }}</a>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Blog End -->
@endsection
