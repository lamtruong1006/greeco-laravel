<!-- Hero Section Start -->
<div class="hero hero-slider-layout">
    <div class="swiper">
        <div class="swiper-wrapper">
            @forelse($sliders ?? [] as $slider)
                <!-- Hero Slide Start -->
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <!-- Slider Image Start -->
                        <div class="hero-slider-image">
                            <img src="{{ asset($slider->image ?? 'images/hero-bg-env.png') }}"
                                alt="{{ $slider->title ?? '' }}" loading="eager" fetchpriority="high">
                        </div>
                        <!-- Slider Image End -->

                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7">
                                    <!-- Hero Content Start -->
                                    <div class="hero-content">
                                        <!-- Section Title Start -->
                                        <div class="section-title dark-section">
                                            <h3 class="wow fadeInUp">{{ $slider->subtitle ?? 'VIỆN đào tạo GREECO' }}
                                            </h3>
                                            <h1 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                                                {{ $slider->title ?? 'Kiến tạo tương lai xanh, phát triển bền vững!' }}
                                            </h1>
                                            <p class="wow fadeInUp" data-wow-delay="0.4s">
                                                {{ $slider->description ?? '' }}</p>
                                        </div>
                                        <!-- Section Title End -->

                                        <!-- Hero Content Body Start -->
                                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.6s">
                                            <!-- Hero Button Start -->
                                            <div class="hero-btn">
                                                <a href="{{ $slider->button_url ?? route('contact') }}"
                                                    class="btn-default btn-highlighted">{{ $slider->button_text ?? 'Liên hệ ngay' }}</a>
                                            </div>
                                            <!-- Hero Button End -->
                                        </div>
                                        <!-- Hero Content Body End -->
                                    </div>
                                    <!-- Hero Content End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Hero Slide End -->
            @empty
                <!-- Default Hero Slide Start -->
                <div class="swiper-slide">
                    <div class="hero-slide">
                        <div class="hero-slider-image">
                            <img src="{{ asset('images/hero-bg-env.png') }}" alt="" loading="eager"
                                fetchpriority="high">
                        </div>
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-7">
                                    <div class="hero-content">
                                        <div class="section-title dark-section">
                                            <h3 class="wow fadeInUp">VIỆN đào tạo GREECO</h3>
                                            <h1 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Kiến
                                                tạo tương lai xanh, phát triển bền vững!</h1>
                                            <p class="wow fadeInUp" data-wow-delay="0.4s">Cung cấp Giải pháp toàn diện
                                                về môi trường, Kiểm kê khí nhà kính, tín chỉ carbon và đào tạo chuyên
                                                nghiệp cho doanh nghiệp Việt Nam.</p>
                                        </div>
                                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.6s">
                                            <div class="hero-btn">
                                                <a href="{{ route('contact') }}"
                                                    class="btn-default btn-highlighted">Liên hệ ngay</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Default Hero Slide End -->
            @endforelse
        </div>
        <div class="hero-pagination"></div>
    </div>
</div>
<!-- Hero Section End -->
