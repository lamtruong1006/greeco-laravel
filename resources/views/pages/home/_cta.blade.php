<!-- CTA Box Section Start -->
<div class="cta-box-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- CTA Box Start -->
                <div class="cta-box">
                    <!-- CTA Box Content Start -->
                    <div class="cta-box-content">
                        <!-- Section Title Start -->
                        <div class="section-title dark-section">
                            <h2 class="wow fadeInUp" data-cursor="-opaque">Bảo vệ doanh&nbsp;nghiệp, Giải&nbsp;pháp
                                môi trường
                                hôm nay!</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- CTA Contact Info Start -->
                        <div class="cta-contact-info">
                            <!-- CTA Contact Item Start -->
                            <div class="cta-contact-item">
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-phone.svg') }}" alt="">
                                </div>
                                <div class="cta-contact-content">
                                    <h3>Liên&nbsp;hệ ngay</h3>
                                    <p><a
                                            href="tel:{{ $settings['phone'] ?? '+84123456789' }}">{{ $settings['phone'] ?? '+84 123 456 789' }}</a>
                                    </p>
                                </div>
                            </div>
                            <!-- CTA Contact Item End -->

                            <!-- CTA Contact Item Start -->
                            <div class="cta-contact-item">
                                <div class="icon-box">
                                    <img src="{{ asset('images/icon-mail.svg') }}" alt="">
                                </div>
                                <div class="cta-contact-content">
                                    <h3>Gửi Email</h3>
                                    <p><a
                                            href="mailto:{{ $settings['email'] ?? 'info@greeco.vn' }}">{{ $settings['email'] ?? 'info@greeco.vn' }}</a>
                                    </p>
                                </div>
                            </div>
                            <!-- CTA Contact Item End -->
                        </div>
                        <!-- CTA Contact Info End -->
                    </div>
                    <!-- CTA Box Content End -->

                    <!-- CTA Box Image Start -->
                    <div class="cta-box-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('images/cta-box-image.jpg') }}" alt="">
                        </figure>
                    </div>
                    <!-- CTA Box Image End -->
                </div>
                <!-- CTA Box End -->
            </div>
        </div>
    </div>
</div>
<!-- CTA Box Section End -->
