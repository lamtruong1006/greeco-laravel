<!-- Topbar Section Start -->
<div class="topbar">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="topbar-info-text">
                    <p>{{ $settings['topbar_text'] ?? 'Đối tác tin cậy trong lĩnh vực môi trường' }} <a
                            href="{{ route('contact') }}">Liên&nbsp;hệ ngay</a></p>
                </div>
            </div>

            <div class="col-md-5">
                <!-- Topbar Social Links Start -->
                <div class="topbar-links">
                    <!-- Topbar Contact Information Start -->
                    <div class="topbar-contact-info">
                        <ul>
                            <li><a href="#">Hỗ trợ</a></li>
                            <li><a href="{{ route('about') }}">Về chúng&nbsp;tôi</a></li>
                            <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                        </ul>
                    </div>
                    <!-- Topbar Contact Information End -->

                    <!-- Topbar Social Links Start -->
                    <div class="topbar-social-links">
                        <ul>
                            @if (!empty($settings['twitter_url']))
                                <li><a href="{{ $settings['twitter_url'] }}" target="_blank"><i
                                            class="fa-brands fa-x-twitter"></i></a></li>
                            @endif
                            @if (!empty($settings['facebook_url']))
                                <li><a href="{{ $settings['facebook_url'] }}" target="_blank"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                            @endif
                            @if (!empty($settings['instagram_url']))
                                <li><a href="{{ $settings['instagram_url'] }}" target="_blank"><i
                                            class="fa-brands fa-instagram"></i></a></li>
                            @endif
                        </ul>
                    </div>
                    <!-- Topbar Social Links End -->
                </div>
                <!-- Topbar Social Links End -->
            </div>
        </div>
    </div>
</div>
<!-- Topbar Section End -->
