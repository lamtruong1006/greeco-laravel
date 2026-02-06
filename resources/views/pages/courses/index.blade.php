@extends('layouts.app')

@section('title', 'Khóa học đào tạo - GREECO | Viện Đào tạo và nghiên cứu Môi trường')

@section('content')
    <x-page-header title="Khóa học đào tạo" :breadcrumbs="[['title' => 'Khóa học', 'url' => route('courses.index')]]" />

    <!-- Courses Introduction Start -->
    <div class="page-service-single" style="padding-bottom: 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2 class="wow fadeInUp" data-cursor="-opaque">Chương trình <span>đào tạo chuyên sâu</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">GREECO cung cấp các khóa học chuyên sâu về môi trường,
                            được thiết kế bởi đội ngũ chuyên gia có chứng chỉ được cấp bởi Bộ Tài nguyên & Môi trường. Các
                            khóa học phù hợp cho doanh nghiệp, tổ chức và cá nhân muốn nâng cao năng lực trong lĩnh vực phát
                            triển bền vững.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses Introduction End -->

    <!-- Page Courses Start -->
    <div class="page-projects">
        <div class="container">
            @if (isset($categories) && count($categories) > 0)
                <!-- Category Filter Start -->
                <div class="row mb-4">
                    <div class="col-lg-12">
                        <div class="project-filter wow fadeInUp">
                            <ul class="filter-list">
                                <li><a href="{{ route('courses.index') }}"
                                        class="{{ !isset($currentCategory) || !$currentCategory ? 'active' : '' }}">Tất
                                        cả</a></li>
                                @foreach ($categories as $category)
                                    <li><a href="{{ route('courses.index', ['category' => $category->slug ?? $category->id]) }}"
                                            class="{{ isset($currentCategory) && $currentCategory == ($category->slug ?? $category->id) ? 'active' : '' }}">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Category Filter End -->
            @endif

            <div class="row">
                @forelse($courses as $index => $course)
                    <div class="col-lg-4 col-md-6">
                        <div class="project-item wow fadeInUp"
                            @if ($index > 0) data-wow-delay="{{ ($index % 3) * 0.2 }}s" @endif>
                            <div class="project-image">
                                <a href="{{ route('courses.show', $course->slug ?? $course->id) }}" data-cursor-text="Xem">
                                    <figure class="image-anime">
                                        <img src="{{ asset($course->featured_image ?? 'images/project-carbon.png') }}"
                                            alt="{{ $course->name }}">
                                    </figure>
                                </a>
                            </div>
                            <div class="project-content">
                                <p><a
                                        href="{{ route('courses.show', $course->slug ?? $course->id) }}">{{ $course->category->name ?? ($course->level ?? 'Chứng chỉ') }}</a>
                                </p>
                                <h3><a
                                        href="{{ route('courses.show', $course->slug ?? $course->id) }}">{{ $course->name }}</a>
                                </h3>
                                <div class="course-meta">
                                    <span><i class="fa-regular fa-clock"></i> {{ $course->duration_hours ? $course->duration_hours . ' giờ' : '40 giờ' }}</span>
                                    <span><i class="fa-regular fa-user"></i>
                                        {{ $course->format ?? 'Online/Offline' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <!-- Default courses -->
                    <div class="col-lg-4 col-md-6">
                        <div class="project-item wow fadeInUp">
                            <div class="project-image">
                                <a href="#" data-cursor-text="Xem">
                                    <figure class="image-anime">
                                        <img src="{{ asset('images/project-carbon.png') }}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="project-content">
                                <p><a href="#">Chứng chỉ</a></p>
                                <h3><a href="#">Kiểm kê khí nhà kính theo ISO 14064</a></h3>
                                <div class="course-meta">
                                    <span><i class="fa-regular fa-clock"></i> 40 giờ</span>
                                    <span><i class="fa-regular fa-user"></i> Online/Offline</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="project-image">
                                <a href="#" data-cursor-text="Xem">
                                    <figure class="image-anime">
                                        <img src="{{ asset('images/hero-bg-env.png') }}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="project-content">
                                <p><a href="#">Chứng chỉ</a></p>
                                <h3><a href="#">Báo cáo ESG & phát triển bền vững</a></h3>
                                <div class="course-meta">
                                    <span><i class="fa-regular fa-clock"></i> 32 giờ</span>
                                    <span><i class="fa-regular fa-user"></i> Online/Offline</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="project-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="project-image">
                                <a href="#" data-cursor-text="Xem">
                                    <figure class="image-anime">
                                        <img src="{{ asset('images/project-renewable.png') }}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="project-content">
                                <p><a href="#">Chứng chỉ</a></p>
                                <h3><a href="#">CBAM và Cơ chế điều chỉnh biên giới carbon EU</a></h3>
                                <div class="course-meta">
                                    <span><i class="fa-regular fa-clock"></i> 24 giờ</span>
                                    <span><i class="fa-regular fa-user"></i> Online</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>

            @if (isset($courses) && $courses instanceof \Illuminate\Pagination\LengthAwarePaginator && $courses->hasPages())
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pagination-wrapper">
                            {{ $courses->links() }}
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!-- Page Courses End -->

    <!-- Why Choose Our Courses Section Start -->
    <div class="page-service-single" style="background: #f8f9fa; padding: 80px 0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-cursor="-opaque">Tại sao chọn <span>khóa học của GREECO?</span></h2>
                    </div>
                    <div class="service-entry">
                        <div class="our-benefit-body service-why-choose-list">
                            <div class="benefit-body-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-service-1.svg') }}" alt="">
                                </div>
                                <div class="benefit-body-item-content">
                                    <h3>Giảng viên có chứng chỉ Bộ TN&MT</h3>
                                    <p>Đội ngũ chuyên gia được cấp chứng chỉ Kiểm kê khí nhà kính từ Bộ Tài nguyên & Môi
                                        trường.</p>
                                </div>
                            </div>

                            <div class="benefit-body-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-service-2.svg') }}" alt="">
                                </div>
                                <div class="benefit-body-item-content">
                                    <h3>Thực hành trên dự án thực tế</h3>
                                    <p>Học viên được thực hành trên case study thực tế từ các dự án GREECO đã triển khai.
                                    </p>
                                </div>
                            </div>

                            <div class="benefit-body-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-service-3.svg') }}" alt="">
                                </div>
                                <div class="benefit-body-item-content">
                                    <h3>Chứng chỉ được công nhận</h3>
                                    <p>Chứng chỉ hoàn thành khóa học được công nhận rộng rãi trong ngành.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <figure class="image-anime reveal wow fadeInUp" data-wow-delay="0.4s">
                        <img src="{{ asset('images/about-image-env.png') }}" alt="Training">
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Our Courses Section End -->
@endsection
