<!-- Our Testimonials Section Start -->
@if (isset($testimonials) && count($testimonials) > 0)
    <div class="our-testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Đánh giá</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Khách hàng <span>nói
                                gì</span></h2>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-12">
                    <!-- Testimonial Box Start -->
                    <div class="testimonial-box parallaxie">
                        <!-- Testimonial Video Button Start -->
                        <div class="testimonial-video-button">
                            <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video"
                                data-cursor-text="Xem">
                                <i class="fa-solid fa-play"></i>
                            </a>
                            <h3>Xem video</h3>
                        </div>
                        <!-- Testimonial Video Button End -->

                        <!-- Testimonial Slide Box Start -->
                        <div class="testimonial-slider-box">
                            <!-- Testimonial Slide Start -->
                            <div class="testimonial-slider">
                                <div class="swiper">
                                    <div class="swiper-wrapper" data-cursor-text="Kéo">
                                        @foreach ($testimonials as $testimonial)
                                            <!-- Testimonial Slide Start -->
                                            <div class="swiper-slide">
                                                <div class="testimonial-item">
                                                    <div class="testimonial-header">
                                                        <div class="testimonial-company-logo">
                                                            <img src="{{ asset('images/company-logo.svg') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="testimonial-quote">
                                                            <img src="{{ asset('images/testimonial-quote.svg') }}"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-content">
                                                        <p>"{{ $testimonial->content }}"</p>
                                                    </div>
                                                    <div class="testimonial-body">
                                                        <div class="author-image">
                                                            <figure class="image-anime">
                                                                <img src="{{ asset($testimonial->client_avatar ?? 'images/author-1.jpg') }}"
                                                                    alt="">
                                                            </figure>
                                                        </div>
                                                        <div class="author-content">
                                                            <h3>{{ $testimonial->client_name }}</h3>
                                                            <p>{{ $testimonial->client_position }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Testimonial Slide End -->
                                        @endforeach
                                    </div>
                                    <div class="testimonial-btn">
                                        <div class="testimonial-button-prev"></div>
                                        <div class="testimonial-button-next"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->

                            <!-- Testimnoial Contact Info Start -->
                            <div class="testimonial-contact-info">
                                <!-- Testimonial Contact Box Start -->
                                <div class="testimonial-contact-box">
                                    <div class="icon-box">
                                        <img src="{{ asset('images/icon-phone.svg') }}" alt="">
                                    </div>
                                    <div class="testimonial-contact-content">
                                        <p>Nếu bạn có câu hỏi hoặc cần hỗ trợ, hãy liên hệ với đội ngũ của chúng tôi.
                                            <span><a
                                                    href="tel:{{ $settings['phone'] ?? '+84123456789' }}">{{ $settings['phone'] ?? '+84-123 456 789' }}</a></span>
                                        </p>
                                    </div>
                                </div>
                                <!-- Testimonial Contact Box End -->

                                <!-- Testimonial Contact Button Start -->
                                <div class="testimonial-contact-btn">
                                    <a href="{{ route('contact') }}" class="btn-default">Liên hệ ngay</a>
                                </div>
                                <!-- Testimonial Contact Button End -->
                            </div>
                            <!-- Testimnoial Contact Info End -->
                        </div>
                        <!-- Testimonial Slide Box End -->
                    </div>
                    <!-- Testimonials Box End -->
                </div>
            </div>
        </div>
    </div>
@endif
<!-- Our Testimonials Section End -->
