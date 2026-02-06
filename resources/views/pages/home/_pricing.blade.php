<!-- Our Pricing Section Start -->
<div class="our-pricing">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Gói đào tạo</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Các khóa đào tạo môi trường
                        <span>phù hợp mọi nhu cầu</span>
                    </h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            @forelse($courses ?? [] as $index => $course)
                @if ($index < 3)
                    <div class="col-lg-4 col-md-6">
                        <!-- Pricing Box Start -->
                        <div class="pricing-item{{ $index === 1 ? ' highlighted-box' : '' }} wow fadeInUp"
                            @if ($index > 0) data-wow-delay="{{ $index * 0.2 }}s" @endif>
                            <!-- Pricing Header Start -->
                            <div class="pricing-header">
                                <h3>{{ $course->name }}</h3>
                                <h2><sup>₫</sup>{{ number_format($course->price ?? 0) }}<sub>/khóa</sub></h2>
                                <p>{{ Str::limit($course->short_description ?? '', 50) }}</p>
                            </div>
                            <!-- Pricing Header End -->

                            <!-- Pricing Body Start -->
                            <div class="pricing-body">
                                <!-- Pricing List Start -->
                                <div class="pricing-list">
                                    <ul>
                                        @if ($course->modules && count($course->modules) > 0)
                                            @foreach ($course->modules->take(4) as $module)
                                                <li>{{ $module->title }}</li>
                                            @endforeach
                                        @else
                                            <li>{{ $course->duration_hours ? $course->duration_hours . ' giờ đào tạo' : 'Đào tạo chuyên sâu' }}
                                            </li>
                                            <li>{{ $course->has_certificate ? 'Giấy chứng nhận hoàn thành' : 'Tài liệu khóa học' }}
                                            </li>
                                            <li>{{ $course->format ?? 'Online/Offline' }}</li>
                                        @endif
                                    </ul>
                                </div>
                                <!-- Pricing List End -->

                                <!-- Pricing Button Start -->
                                <div class="pricing-btn">
                                    <a href="{{ route('courses.show', $course->slug ?? $course->id) }}"
                                        class="btn-default{{ $index === 1 ? ' btn-highlighted' : '' }}">Đăng ký
                                        ngay</a>
                                </div>
                                <!-- Pricing Button End -->
                            </div>
                            <!-- Pricing Body End -->
                        </div>
                        <!-- Pricing Box End -->
                    </div>
                @endif
            @empty
                <!-- Default pricing boxes -->
            @endforelse
        </div>
    </div>
</div>
<!-- Our Pricing Section End -->
