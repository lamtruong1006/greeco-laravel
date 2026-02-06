<!-- Our Blog Section Start -->
@if (isset($posts) && count($posts) > 0)
    <div class="our-blog">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Tin tức mới</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Bài viết <span>mới
                                nhất</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                @foreach ($posts->take(3) as $index => $post)
                    <div class="col-lg-4 col-md-6">
                        <!-- Post Item Start -->
                        <div class="post-item wow fadeInUp"
                            @if ($index > 0) data-wow-delay="{{ $index * 0.2 }}s" @endif>
                            <!-- Post Featured Image Start-->
                            <div class="post-featured-image">
                                <a href="{{ route('posts.show', $post->slug ?? $post->id) }}"
                                    data-cursor-text="Xem">
                                    <figure class="image-anime">
                                        <img src="{{ asset($post->featured_image ?? 'images/post-1.jpg') }}"
                                            alt="{{ $post->title }}">
                                    </figure>
                                </a>
                            </div>
                            <!-- Post Featured Image End -->

                            <!-- post Item Content Start -->
                            <div class="post-item-content">
                                <!-- post Item Body Start -->
                                <div class="post-item-body">
                                    <h2><a
                                            href="{{ route('posts.show', $post->slug ?? $post->id) }}">{{ $post->title }}</a>
                                    </h2>
                                </div>
                                <!-- Post Item Body End-->

                                <!-- Post Item Button Start-->
                                <div class="post-item-btn">
                                    <a href="{{ route('posts.show', $post->slug ?? $post->id) }}"
                                        class="post-btn"><i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                                <!-- Post Item Button End-->
                            </div>
                            <!-- post Item Content End -->
                        </div>
                        <!-- Post Item End -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif
<!-- Our Blog Section End -->
