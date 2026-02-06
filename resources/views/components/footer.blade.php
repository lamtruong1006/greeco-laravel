<!-- Main Footer Section Start -->
<footer class="main-footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Footer Header Start -->
                <div class="footer-header">
                    <!-- Footer Logo Start -->
                    <div class="footer-logo">
                        <img src="{{ asset($settings['logo_footer'] ?? 'images/footer-logo.png') }}" alt="GREECO Logo">
                    </div>
                    <!-- Footer Logo End -->

                    <!-- Footer Social Links Start -->
                    <div class="footer-social-links">
                        <ul role="list" aria-label="Mạng xã hội">
                            @if (!empty($settings['pinterest_url']))
                                <li><a href="{{ $settings['pinterest_url'] }}" target="_blank" aria-label="Pinterest"><i
                                            class="fa-brands fa-pinterest-p" aria-hidden="true"></i></a></li>
                            @else
                                <li><a href="#" aria-label="Pinterest"><i class="fa-brands fa-pinterest-p"
                                            aria-hidden="true"></i></a></li>
                            @endif
                            @if (!empty($settings['twitter_url']))
                                <li><a href="{{ $settings['twitter_url'] }}" target="_blank" aria-label="Twitter"><i
                                            class="fa-brands fa-x-twitter" aria-hidden="true"></i></a></li>
                            @else
                                <li><a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"
                                            aria-hidden="true"></i></a></li>
                            @endif
                            @if (!empty($settings['facebook_url']))
                                <li><a href="{{ $settings['facebook_url'] }}" target="_blank" aria-label="Facebook"><i
                                            class="fa-brands fa-facebook-f" aria-hidden="true"></i></a></li>
                            @else
                                <li><a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"
                                            aria-hidden="true"></i></a></li>
                            @endif
                            @if (!empty($settings['instagram_url']))
                                <li><a href="{{ $settings['instagram_url'] }}" target="_blank" aria-label="Instagram"><i
                                            class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                            @else
                                <li><a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"
                                            aria-hidden="true"></i></a></li>
                            @endif
                        </ul>
                    </div>
                    <!-- Footer Social Links End -->
                </div>
                <!-- Footer Header End -->
            </div>

            <div class="col-lg-4">
                <!-- Footer Newsletter Form Start -->
                <div class="footer-links footer-newsletter-form">
                    <h3>Đăng ký nhận bản tin:</h3>
                    <p>Cập nhật tin tức mới nhất về môi&nbsp;trường và phát&nbsp;triển bền&nbsp;vững.</p>
                    <form id="newsletterForm" action="{{ route('newsletter.subscribe') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="mail"
                                placeholder="Nhập email của bạn" required="" aria-label="Địa chỉ email">
                            <button type="submit" class="newsletter-btn" aria-label="Đăng ký nhận bản tin"><i
                                    class="fa-regular fa-paper-plane" aria-hidden="true"></i></button>
                        </div>
                        <div class="newsletter-message" style="display:none; margin-top:8px; font-size:14px;"></div>
                    </form>
                </div>
                <!-- Footer Newsletter Form End -->
            </div>

            <div class="col-lg-2 col-md-3 col-6">
                <!-- Footer Links Start -->
                <div class="footer-links footer-quick-links">
                    <h3>Liên kết nhanh</h3>
                    <ul>
                        <li><a href="{{ route('home') }}">Trang chủ</a></li>
                        <li><a href="{{ route('about') }}">Giới thiệu</a></li>
                        <li><a href="{{ route('services.index') }}">Dịch vụ</a></li>
                        <li><a href="{{ route('projects.index') }}">Dự&nbsp;án</a></li>
                    </ul>
                </div>
                <!-- Footer Links End -->
            </div>

            <div class="col-lg-2 col-md-3 col-6">
                <!-- Footer Links Start -->
                <div class="footer-links">
                    <h3>Dịch vụ</h3>
                    <ul>
                        @forelse($footerServices as $service)
                            <li><a href="{{ route('services.show', $service) }}">{{ $service->name }}</a></li>
                        @empty
                            <li><a href="#">Kiểm&nbsp;kê khí&nbsp;nhà&nbsp;kính</a></li>
                            <li><a href="#">Báo&nbsp;cáo CBAM & LCA</a></li>
                            <li><a href="#">Hồ&nbsp;sơ môi trường</a></li>
                            <li><a href="#">Dự&nbsp;án tín&nbsp;chỉ carbon</a></li>
                        @endforelse
                    </ul>
                </div>
                <!-- Footer Links End -->
            </div>

            <div class="col-lg-2 col-md-3 col-6">
                <!-- Footer Links Start -->
                <div class="footer-links">
                    <h3>Hỗ trợ</h3>
                    <ul>
                        <li><a href="{{ route('courses.index') }}">Đào&nbsp;tạo</a></li>
                        <li><a href="{{ route('cooperation') }}">Hợp&nbsp;tác & NCKH</a></li>
                        <li><a href="#">Chính sách</a></li>
                        <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                    </ul>
                </div>
                <!-- Footer Links End -->
            </div>

            <div class="col-lg-2 col-md-3 col-6">
                <!-- Footer Links Start -->
                <div class="footer-links">
                    <h3>Liên hệ</h3>
                    <ul>
                        <li><a href="tel:{{ $settings['phone'] ?? '0915887148' }}">SĐT:
                                {{ $settings['phone'] ?? '0915 887 148' }}</a></li>
                        <li><a href="mailto:{{ $settings['email'] ?? 'info@greeco.vn' }}">Email:
                                {{ $settings['email'] ?? 'info@greeco.vn' }}</a></li>
                        <li><a href="{{ $settings['website_url'] ?? 'https://greeco.vn' }}" target="_blank">Website:
                                greeco.vn</a></li>
                        <li>Địa chỉ: {{ $settings['address'] ?? '68/26 Nguyễn Văn Lạc, P.Thạnh Mỹ Tây, TP.HCM' }}</li>
                    </ul>
                </div>
                <!-- Footer Links End -->
            </div>
        </div>
    </div>

    <!-- Footer Copyright Start -->
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Footer Copyright Text Start -->
                    <div class="footer-copyright-text">
                        <p>Copyright &copy; {{ date('Y') }} {{ $settings['company_name'] ?? 'GREECO' }}. All
                            Rights Reserved.</p>
                    </div>
                    <!-- Footer Copyright Text End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Copyright End -->
</footer>
<!-- Main Footer Section End -->
