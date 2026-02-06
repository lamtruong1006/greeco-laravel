@extends('layouts.app')

@section('title', ($post->title ?? 'Chi tiết bài viết') . ' - GREECO | Viện Đào tạo và nghiên cứu Môi trường')

@push('jsonld')
    @include('components.jsonld.article', ['post' => $post])
    @include('components.jsonld.breadcrumb', [
        'breadcrumbs' => [
            ['title' => 'Tin tức', 'url' => route('posts.index')],
            ['title' => $post->title ?? 'Chi tiết', 'url' => url()->current()],
        ],
    ])
@endpush

@section('content')
    <x-page-header :title="Str::limit($post->title ?? 'Chi tiết bài viết', 50)" :breadcrumbs="[
        ['title' => 'Tin tức', 'url' => route('posts.index')],
        ['title' => Str::limit($post->title ?? 'Chi tiết', 30), 'url' => '#'],
    ]" />

    <!-- Page Single Post Start -->
    <div class="page-single-post">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Post Featured Image Start -->
                    <div class="post-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset($post->featured_image ?? 'images/post-1.jpg') }}"
                                alt="{{ $post->title ?? 'Post' }}">
                        </figure>
                    </div>
                    <!-- Post Featured Image End -->

                    <!-- Post Meta Start -->
                    <div class="post-meta">
                        <span><i class="fa-regular fa-calendar"></i>
                            {{ ($post->published_at ?? $post->created_at)->format('d/m/Y') }}</span>
                        @if (isset($post->author))
                            <span><i class="fa-regular fa-user"></i> {{ $post->author->name }}</span>
                        @endif
                        @if (isset($post->category))
                            <span><i class="fa-regular fa-folder"></i> <a
                                    href="{{ route('posts.index', ['category' => $post->category->slug ?? $post->category->id]) }}">{{ $post->category->name }}</a></span>
                        @endif
                    </div>
                    <!-- Post Meta End -->

                    <!-- Post Single Content Start -->
                    <div class="post-content">
                        <!-- Post Entry Start -->
                        <div class="post-entry">
                            @if (isset($post->content))
                                {!! clean($post->content, 'cms') !!}
                            @else
                                <p class="wow fadeInUp">Nội dung bài viết...</p>
                            @endif
                        </div>
                        <!-- Post Entry End -->

                        <!-- Post Tag Links Start -->
                        <div class="post-tag-links">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <!-- Post Tags Start -->
                                    @if (isset($post->tags) && count($post->tags) > 0)
                                        <div class="post-tags wow fadeInUp" data-wow-delay="0.5s">
                                            <span class="tag-links">
                                                Tags:
                                                @foreach ($post->tags as $tag)
                                                    <a
                                                        href="{{ route('posts.index', ['tag' => $tag]) }}">{{ $tag }}</a>
                                                @endforeach
                                            </span>
                                        </div>
                                    @endif
                                    <!-- Post Tags End -->
                                </div>

                                <div class="col-lg-4">
                                    <!-- Post Social Links Start -->
                                    <div class="post-social-sharing wow fadeInUp" data-wow-delay="0.5s">
                                        <ul>
                                            <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                                                    target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                                            <li><a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->url()) }}&title={{ urlencode($post->title ?? '') }}"
                                                    target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                            <li><a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($post->title ?? '') }}"
                                                    target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- Post Social Links End -->
                                </div>
                            </div>
                        </div>
                        <!-- Post Tag Links End -->
                    </div>
                    <!-- Post Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Single Post End -->

    <!-- Related Posts Start -->
    @if (isset($relatedPosts) && count($relatedPosts) > 0)
        <div class="related-posts">
            <div class="container">
                <div class="row section-row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Bài viết liên quan</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s">Bài viết <span>khác</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($relatedPosts->take(3) as $index => $relatedPost)
                        <div class="col-lg-4 col-md-6">
                            <!-- Blog Item Start -->
                            <div class="blog-item wow fadeInUp"
                                @if ($index > 0) data-wow-delay="{{ $index * 0.2 }}s" @endif>
                                <div class="blog-image">
                                    <a href="{{ route('posts.show', $relatedPost->slug ?? $relatedPost->id) }}"
                                        data-cursor-text="Xem">
                                        <figure class="image-anime">
                                            <img src="{{ asset($relatedPost->featured_image ?? 'images/post-1.jpg') }}"
                                                alt="{{ $relatedPost->title }}">
                                        </figure>
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span><i class="fa-regular fa-calendar"></i>
                                            {{ ($relatedPost->published_at ?? $relatedPost->created_at)->format('d/m/Y') }}</span>
                                    </div>
                                    <h3><a
                                            href="{{ route('posts.show', $relatedPost->slug ?? $relatedPost->id) }}">{{ $relatedPost->title }}</a>
                                    </h3>
                                    <p>{{ Str::limit($relatedPost->excerpt ?? strip_tags($relatedPost->content), 100) }}
                                    </p>
                                </div>
                            </div>
                            <!-- Blog Item End -->
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <!-- Related Posts End -->
@endsection
