@extends('layouts.app')

@section('title', ($course->name ?? 'Chi tiết khóa học') . ' - GREECO | Đào tạo chuyên gia')

@push('jsonld')
    @include('components.jsonld.course', ['course' => $course])
    @include('components.jsonld.breadcrumb', [
        'breadcrumbs' => [
            ['title' => 'Khóa học', 'url' => route('courses.index')],
            ['title' => $course->name ?? 'Chi tiết', 'url' => url()->current()],
        ],
    ])
@endpush

@section('content')
    <x-page-header title="Chi tiết khóa học" :breadcrumbs="[
        ['title' => 'Khóa học', 'url' => route('courses.index')],
        ['title' => $course->name ?? 'Chi tiết', 'url' => '#'],
    ]" />

    <!-- Course Detail Section Start -->
    <div class="page-service-single">
        <div class="container">
            <div class="row">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <!-- Course Header -->
                    <div class="service-entry">
                        <span class="course-badge">{{ $course->badge ?? ($course->category->name ?? 'Chứng chỉ') }}</span>
                        <h2 class="wow fadeInUp" data-cursor="-opaque">
                            {{ $course->name ?? 'Kiểm kê khí nhà kính theo ISO 14064' }}</h2>
                        <p class="course-short-desc wow fadeInUp" data-wow-delay="0.2s">
                            {{ $course->short_description ?? 'Khóa học đào tạo chuyên sâu giúp học viên nắm vững phương pháp luận, quy trình và kỹ năng thực hành.' }}
                        </p>

                        <!-- Course Image -->
                        <figure class="image-anime reveal wow fadeInUp" data-wow-delay="0.4s">
                            <img src="{{ asset($course->featured_image ?? 'images/project-carbon.png') }}"
                                alt="{{ $course->name ?? 'Course' }}">
                        </figure>

                        <!-- Course Meta Info -->
                        <div class="row course-meta-grid">
                            <div class="col-md-3 col-6">
                                <div class="course-meta-card wow fadeInUp">
                                    <i class="fa-regular fa-clock"></i>
                                    <h4>{{ $course->duration_hours ? $course->duration_hours . ' giờ' : '40 giờ' }}</h4>
                                    <p>Thời lượng</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="course-meta-card wow fadeInUp" data-wow-delay="0.2s">
                                    <i class="fa-regular fa-calendar"></i>
                                    <h4>{{ $course->total_sessions ? $course->total_sessions . ' buổi' : '10 buổi' }}</h4>
                                    <p>Số buổi học</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="course-meta-card wow fadeInUp" data-wow-delay="0.4s">
                                    <i class="fa-regular fa-user"></i>
                                    <h4>{{ $course->min_students && $course->max_students ? $course->min_students . '-' . $course->max_students : '15-25' }}
                                    </h4>
                                    <p>Học viên/lớp</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-6">
                                <div class="course-meta-card wow fadeInUp" data-wow-delay="0.6s">
                                    <i class="fa-solid fa-certificate"></i>
                                    <h4>{{ $course->has_certificate ? 'Có' : 'Không' }}</h4>
                                    <p>Chứng chỉ</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Course Overview -->
                    <div class="service-entry" style="margin-top: 40px;">
                        <h3 class="wow fadeInUp"><i class="fa-solid fa-book-open"></i> Tổng quan khóa học</h3>
                        @if (isset($course->overview))
                            {!! clean($course->overview, 'cms') !!}
                        @else
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Khóa học được thiết kế dành cho các chuyên viên
                                môi trường, quản lý sản xuất, và những người muốn xây dựng năng lực trong lĩnh vực môi
                                trường.</p>
                            <ul class="wow fadeInUp" data-wow-delay="0.4s">
                                <li>Khung pháp lý và tiêu chuẩn quốc tế</li>
                                <li>Phương pháp luận và quy trình thực hiện</li>
                                <li>Thu thập và xử lý dữ liệu</li>
                                <li>Tính toán và lập báo cáo</li>
                                <li>Thực hành trên case study thực tế</li>
                            </ul>
                        @endif
                    </div>

                    <!-- Course Curriculum -->
                    @if (isset($course->modules) && count($course->modules) > 0)
                        <div class="service-entry" style="margin-top: 40px;">
                            <h3 class="wow fadeInUp"><i class="fa-solid fa-list-check"></i> Nội dung khóa học</h3>

                            <div class="faq-accordion" id="curriculumAccordion">
                                @foreach ($course->modules as $index => $module)
                                    <div class="accordion-item wow fadeInUp"
                                        @if ($index > 0) data-wow-delay="{{ $index * 0.2 }}s" @endif>
                                        <h2 class="accordion-header" id="module{{ $index }}">
                                            <button class="accordion-button{{ $index > 0 ? ' collapsed' : '' }}"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseModule{{ $index }}"
                                                aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                                aria-controls="collapseModule{{ $index }}">
                                                {{ $module->title }}
                                            </button>
                                        </h2>
                                        <div id="collapseModule{{ $index }}"
                                            class="accordion-collapse collapse{{ $index === 0 ? ' show' : '' }}"
                                            aria-labelledby="module{{ $index }}"
                                            data-bs-parent="#curriculumAccordion">
                                            <div class="accordion-body">
                                                @if ($module->lessons && count($module->lessons) > 0)
                                                    <ul class="course-curriculum-lesson">
                                                        @foreach ($module->lessons as $lesson)
                                                            <li>
                                                                <span><i class="fa-regular fa-circle-play"></i>
                                                                    {{ is_array($lesson) ? $lesson['title'] : $lesson }}</span>
                                                                @if (is_array($lesson) && isset($lesson['duration']))
                                                                    <span>{{ $lesson['duration'] }}</span>
                                                                @endif
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @else
                                                    <p>{!! clean($module->content, 'cms') !!}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Target Audience -->
                    <div class="service-entry" style="margin-top: 40px;">
                        <h3 class="wow fadeInUp"><i class="fa-solid fa-users"></i> Đối tượng tham gia</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="wow fadeInUp" data-wow-delay="0.2s">
                                    <li>Nhân viên phòng HSE/Môi trường</li>
                                    <li>Quản lý sản xuất, vận hành</li>
                                    <li>Chuyên viên phát triển bền vững</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="wow fadeInUp" data-wow-delay="0.4s">
                                    <li>Tư vấn viên môi trường</li>
                                    <li>Sinh viên ngành môi trường</li>
                                    <li>Cán bộ cơ quan quản lý</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Instructor -->
                    @if (isset($course->instructor))
                        <div class="service-entry" style="margin-top: 40px;">
                            <h3 class="wow fadeInUp"><i class="fa-solid fa-chalkboard-user"></i> Giảng viên</h3>
                            <div class="row align-items-center wow fadeInUp" data-wow-delay="0.2s">
                                <div class="col-md-4">
                                    <figure class="image-anime reveal">
                                        <img src="{{ asset($course->instructor->image ?? 'images/team-1.jpg') }}"
                                            alt="Giảng viên" style="border-radius: 10px;">
                                    </figure>
                                </div>
                                <div class="col-md-8 instructor-details">
                                    <h4>{{ $course->instructor->name }}</h4>
                                    <p class="role">{{ $course->instructor->title }}</p>
                                    <p>{{ $course->instructor->bio }}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar-sticky">
                        <!-- Course Info Card -->
                        <div class="course-sidebar-card wow fadeInUp">
                            <div class="course-price">
                                @if (isset($course->discount_price) && $course->discount_price > 0 && $course->discount_price < $course->price)
                                    <h2>{{ number_format($course->discount_price) }} ₫</h2>
                                    <p>{{ number_format($course->price) }} ₫</p>
                                @elseif(isset($course->price) && $course->price > 0)
                                    <h2>{{ number_format($course->price) }} ₫</h2>
                                @else
                                    <h2>Liên hệ</h2>
                                @endif
                            </div>
                            <div class="course-info-list">
                                <ul>
                                    <li><i class="fa-regular fa-clock"></i>
                                        Thời lượng:
                                        {{ $course->duration_hours ? $course->duration_hours . ' giờ' : '40 giờ' }}</li>
                                    <li><i class="fa-regular fa-calendar"></i> Hình thức:
                                        {{ $course->format ?? 'Online/Offline' }}</li>
                                    <li><i class="fa-solid fa-certificate"></i> Chứng chỉ:
                                        {{ $course->has_certificate ? 'Có' : 'Không' }}</li>
                                    <li><i class="fa-solid fa-language"></i> Ngôn ngữ:
                                        {{ $course->language ?? 'Tiếng Việt' }}</li>
                                </ul>
                            </div>
                            <a href="{{ route('contact') }}" class="btn-default btn-highlighted">Đăng ký ngay</a>
                        </div>

                        <!-- Sidebar CTA Box -->
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.2s" style="margin-top: 20px;">
                            <div class="sidebar-cta-logo">
                                <img src="{{ asset($settings['logo_footer'] ?? 'images/footer-logo.png') }}"
                                    alt="">
                            </div>
                            <div class="sidebar-cta-content">
                                <p>Cần tư vấn thêm về khóa học? Liên hệ ngay với chúng tôi.</p>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Course Detail Section End -->

    <!-- Related Courses Start -->
    @if (isset($relatedCourses) && count($relatedCourses) > 0)
        <div class="related-courses">
            <div class="container">
                <div class="row section-row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Khóa học liên quan</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s">Các khóa học <span>khác</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($relatedCourses->take(3) as $index => $relatedCourse)
                        <div class="col-lg-4 col-md-6">
                            <div class="project-item wow fadeInUp"
                                @if ($index > 0) data-wow-delay="{{ $index * 0.2 }}s" @endif>
                                <div class="project-image">
                                    <a href="{{ route('courses.show', $relatedCourse->slug ?? $relatedCourse->id) }}"
                                        data-cursor-text="Xem">
                                        <figure class="image-anime">
                                            <img src="{{ asset($relatedCourse->featured_image ?? 'images/project-carbon.png') }}"
                                                alt="{{ $relatedCourse->name }}">
                                        </figure>
                                    </a>
                                </div>
                                <div class="project-content">
                                    <p><a
                                            href="{{ route('courses.show', $relatedCourse->slug ?? $relatedCourse->id) }}">{{ $relatedCourse->badge ?? 'Chứng chỉ' }}</a>
                                    </p>
                                    <h3><a
                                            href="{{ route('courses.show', $relatedCourse->slug ?? $relatedCourse->id) }}">{{ $relatedCourse->name }}</a>
                                    </h3>
                                    <div class="course-meta">
                                        <span><i class="fa-regular fa-clock"></i>
                                            {{ $relatedCourse->duration_hours ? $relatedCourse->duration_hours . ' giờ' : '40 giờ' }}</span>
                                        <span><i class="fa-regular fa-user"></i>
                                            {{ $relatedCourse->format ?? 'Online/Offline' }}</span>
                                    </div>
                                </div>
                                <div class="course-title-below">
                                    <h4><a
                                            href="{{ route('courses.show', $relatedCourse->slug ?? $relatedCourse->id) }}">{{ $relatedCourse->name }}</a>
                                    </h4>
                                    <div class="course-meta-below">
                                        <span><i class="fa-regular fa-clock"></i>
                                            {{ $relatedCourse->duration_hours ? $relatedCourse->duration_hours . ' giờ' : '40 giờ' }}</span>
                                        <span><i class="fa-regular fa-user"></i>
                                            {{ $relatedCourse->format ?? 'Online/Offline' }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <!-- Related Courses End -->
@endsection
