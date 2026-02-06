@extends('layouts.app')

@section('title', ($project->name ?? 'Chi tiết dự án') . ' - GREECO | Viện Đào tạo và nghiên cứu Môi trường')

@section('content')
    <x-page-header :title="$project->name ?? 'Chi tiết dự án'" :breadcrumbs="[
        ['title' => 'Dự án', 'url' => route('projects.index')],
        ['title' => $project->name ?? 'Chi tiết', 'url' => '#'],
    ]" />

    <!-- Page Project Single Start -->
    <div class="page-project-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Project Sidebar Start -->
                    <div class="page-single-sidebar">
                        <!-- Project Detail List Start -->
                        <div class="project-detail-list wow fadeInUp">
                            <!-- Project Detail Title Start -->
                            <div class="project-deatil-title">
                                <h3>Chi tiết dự án</h3>
                            </div>
                            <!-- Project Detail Title End -->

                            <!-- Project Detail Item Start -->
                            <div class="project-detail-item">
                                <div class="icon-box">
                                    <i class="fa-solid fa-folder-tree"></i>
                                </div>
                                <div class="project-detail-content">
                                    <h3>Loại Dự Án:</h3>
                                    <p>{{ $project->category->name ?? ($project->type ?? 'Dự án môi trường') }}</p>
                                </div>
                            </div>
                            <!-- Project Detail Item End -->

                            <!-- Project Detail Item Start -->
                            <div class="project-detail-item">
                                <div class="icon-box">
                                    <i class="fa-solid fa-building"></i>
                                </div>
                                <div class="project-detail-content">
                                    <h3>Khách Hàng:</h3>
                                    <p>{{ $project->client_name ?? 'Doanh nghiệp' }}</p>
                                </div>
                            </div>
                            <!-- Project Detail Item End -->

                            <!-- Project Detail Item Start -->
                            <div class="project-detail-item">
                                <div class="icon-box">
                                    <i class="fa-solid fa-calendar-days"></i>
                                </div>
                                <div class="project-detail-content">
                                    <h3>Thời Gian:</h3>
                                    <p>{{ $project->duration ?? ($project->start_date ? $project->start_date->format('m/Y') . ' - ' . ($project->end_date ? $project->end_date->format('m/Y') : 'Hiện tại') : 'N/A') }}
                                    </p>
                                </div>
                            </div>
                            <!-- Project Detail Item End -->

                            @if (isset($project->standard))
                                <!-- Project Detail Item Start -->
                                <div class="project-detail-item">
                                    <div class="icon-box">
                                        <i class="fa-solid fa-certificate"></i>
                                    </div>
                                    <div class="project-detail-content">
                                        <h3>Tiêu Chuẩn:</h3>
                                        <p>{{ $project->standard }}</p>
                                    </div>
                                </div>
                                <!-- Project Detail Item End -->
                            @endif
                        </div>
                        <!-- Project Detail List End -->

                        <!-- Sidebar CTA Box Start -->
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="sidebar-cta-logo">
                                <img src="{{ asset($settings['logo_footer'] ?? 'images/footer-logo.png') }}" alt="">
                            </div>
                            <div class="sidebar-cta-content">
                                <p>Chúng tôi đồng hành cùng doanh nghiệp trong hành trình phát triển bền vững và giảm phát
                                    thải carbon.</p>
                            </div>
                            <div class="sidebar-cta-contact">
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-phone.svg') }}" alt="">
                                </div>
                                <div class="sidebar-cta-contact-content">
                                    <h3><a href="tel:+84903330454">0903 330 454</a></h3>
                                    <p>Tư vấn miễn phí</p>
                                </div>
                            </div>
                        </div>
                        <!-- Sidebar CTA Box End -->
                    </div>
                    <!-- Project Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <!-- Project Single Content Start -->
                    <div class="project-single-content">
                        <!-- Page Single Slider Start -->
                        @if (isset($project->gallery) && count($project->gallery) > 0)
                            <div class="page-single-slider">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        @foreach ($project->gallery as $image)
                                            <div class="swiper-slide">
                                                <figure class="image-anime" data-cursor-text="Kéo">
                                                    <img src="{{ asset($image) }}" alt="">
                                                </figure>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="page-single-pagination"></div>
                                </div>
                            </div>
                        @elseif(isset($project->featured_image))
                            <div class="page-single-slider">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <figure class="image-anime" data-cursor-text="Kéo">
                                                <img src="{{ asset($project->featured_image) }}" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="page-single-slider">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <figure class="image-anime" data-cursor-text="Kéo">
                                                <img src="{{ asset('images/project-carbon.png') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="image-anime" data-cursor-text="Kéo">
                                                <img src="{{ asset('images/project-renewable.png') }}" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="page-single-pagination"></div>
                                </div>
                            </div>
                        @endif
                        <!-- Page Single Slider End -->

                        <!-- Project Entry Start -->
                        <div class="project-entry">
                            <h2 class="wow fadeInUp">Tổng quan dự án</h2>

                            @if (isset($project->content))
                                {!! clean($project->content, 'cms') !!}
                            @else
                                <p class="wow fadeInUp" data-wow-delay="0.2s">
                                    {{ $project->description ?? 'Mô tả dự án...' }}</p>

                                @if (isset($project->challenges))
                                    <!-- Project Challenge Box Start -->
                                    <div class="project-challenge-box">
                                        <h2 class="wow fadeInUp" data-wow-delay="0.4s">Thách thức của dự án</h2>
                                        <p class="wow fadeInUp" data-wow-delay="0.6s">{{ $project->challenges }}</p>
                                    </div>
                                    <!-- Project Challenge Box End -->
                                @endif

                                @if (isset($project->scope))
                                    <!-- Project Scope Box Start -->
                                    <div class="project-scope-box">
                                        <h2 class="wow fadeInUp">Phạm vi dự án</h2>
                                        <p class="wow fadeInUp" data-wow-delay="0.2s">{{ $project->scope }}</p>
                                    </div>
                                    <!-- Project Scope Box End -->
                                @endif
                            @endif
                        </div>
                        <!-- Project Entry End -->
                    </div>
                    <!-- Project Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Project Single End -->

    <!-- Related Projects Start -->
    @if (isset($relatedProjects) && count($relatedProjects) > 0)
        <div class="related-projects">
            <div class="container">
                <div class="row section-row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Dự án liên quan</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s">Các dự án <span>khác</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($relatedProjects->take(3) as $index => $relatedProject)
                        <div class="col-lg-4 col-md-6">
                            <div class="project-item wow fadeInUp"
                                @if ($index > 0) data-wow-delay="{{ $index * 0.2 }}s" @endif>
                                <div class="project-image">
                                    <a href="{{ route('projects.show', $relatedProject->slug ?? $relatedProject->id) }}"
                                        data-cursor-text="Xem">
                                        <figure class="image-anime">
                                            <img src="{{ asset($relatedProject->featured_image ?? 'images/project-carbon.png') }}"
                                                alt="{{ $relatedProject->name }}">
                                        </figure>
                                    </a>
                                </div>
                                <div class="project-content">
                                    <p><a
                                            href="{{ route('projects.show', $relatedProject->slug ?? $relatedProject->id) }}">{{ $relatedProject->category->name ?? 'Dự án' }}</a>
                                    </p>
                                    <h3><a
                                            href="{{ route('projects.show', $relatedProject->slug ?? $relatedProject->id) }}">{{ $relatedProject->name }}</a>
                                    </h3>
                                </div>
                                <div class="project-title-below">
                                    <span
                                        class="project-category-tag">{{ $relatedProject->category->name ?? 'Dự án' }}</span>
                                    <h4><a
                                            href="{{ route('projects.show', $relatedProject->slug ?? $relatedProject->id) }}">{{ $relatedProject->name }}</a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <!-- Related Projects End -->
@endsection
