@extends('layouts.app')

@section('title', 'Giới thiệu - GREECO | Viện Đào tạo và nghiên cứu Môi trường')

@section('content')
    <!-- About Hero Banner Start -->
    <div class="about-hero-banner-image">
        <img src="{{ asset('images/about-hero-banner.png') }}" alt="GREECO Banner"
            style="width: 100%; height: auto; display: block;">
    </div>
    <!-- About Hero Banner End -->

    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-us-image">
                        <div class="about-image-box about-img-1">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('images/about-image-env.png') }}" alt="GREECO Environment">
                            </figure>
                        </div>
                        <div class="about-image-box">
                            <div class="about-img-2">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('images/hero-bg-env.png') }}" alt="Environment Research">
                                </figure>
                            </div>
                            <div class="about-img-3">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('images/service-img-1.jpg') }}" alt="Green Solutions">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-us-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Về chúng tôi</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Đối tác tin cậy trong lĩnh
                                vực <span>môi trường bền vững</span></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">GREECO - Viện Đào tạo và nghiên cứu Môi trường
                                cung cấp các Giải pháp toàn diện về tư vấn môi trường, Kiểm kê khí nhà kính và đào tạo
                                chuyên nghiệp.</p>
                        </div>
                        <div class="about-us-body wow fadeInUp" data-wow-delay="0.6s">
                            <div class="about-us-body-img">
                                <figure class="image-anime">
                                    <img src="{{ asset($settings['logo'] ?? 'images/logo.png') }}" alt="GREECO">
                                </figure>
                            </div>
                            <div class="about-us-body-content">
                                <h3>Hỗ trợ chuyên nghiệp 24/7</h3>
                                <p>Đội ngũ chuyên gia sẵn sàng tư vấn và hỗ trợ doanh nghiệp trong mọi vấn đề về môi trường.
                                </p>
                            </div>
                        </div>
                        <div class="about-us-footer wow fadeInUp" data-wow-delay="0.8s">
                            <div class="about-footer-list">
                                <ul>
                                    <li>Kiểm kê khí nhà kính</li>
                                    <li>Báo cáo CBAM & LCA</li>
                                    <li>Dự án tín chỉ carbon</li>
                                </ul>
                            </div>
                            <div class="about-footer-content">
                                <div class="about-contact-btn">
                                    <div class="icon-box">
                                        <img src="{{ asset('images/icon-phone.svg') }}" alt="">
                                    </div>
                                    <div class="about-footer-btn-content">
                                        <h3><a href="tel:+84903330454">0903 330 454</a></h3>
                                    </div>
                                </div>
                                <div class="about-footer-btn">
                                    <a href="{{ route('contact') }}" class="btn-default">Liên hệ ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Organizational Chart Section Start -->
    <div class="org-chart-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Thông tin của Viện GREECO</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Sơ đồ <span>Tổ chức</span></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="tree wow fadeInUp" data-wow-delay="0.4s">
                        <ul>
                            <li>
                                <div class="tree-card director-card">
                                    <h4>VIỆN TRƯỞNG</h4>
                                </div>
                                <ul>
                                    <!-- Left Branch: Project Consulting -->
                                    <li>
                                        <div class="tree-card">
                                            <h4>PHÒNG TƯ VẤN DỰ ÁN</h4>
                                            <div class="tree-card-body">
                                                <p>1. Bộ phận tư vấn</p>
                                                <p>2. Bộ phận phát triển dự án</p>
                                                <div class="contact-info">
                                                    <p><strong>SĐT:</strong> 0903 330 454</p>
                                                    <p><strong>Email:</strong> info@greeco.vn</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- Middle Branch: Training -->
                                    <li>
                                        <div class="tree-card">
                                            <h4>PHÒNG ĐÀO TẠO</h4>
                                            <div class="tree-card-body">
                                                <p>1. Bộ phận tuyển sinh</p>
                                                <p>2. Bộ phận đào tạo</p>
                                                <div class="contact-info">
                                                    <p><strong>SĐT:</strong> 0903 330 454</p>
                                                    <p><strong>Email:</strong> info@greeco.vn</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <!-- Right Branch: Vice Director -> Children -->
                                    <li>
                                        <div class="tree-card vice-director-card">
                                            <h4>PHÓ VIỆN TRƯỞNG</h4>
                                        </div>
                                        <ul>
                                            <li>
                                                <div class="tree-card">
                                                    <h4>PHÒNG HỢP TÁC VÀ NCKH</h4>
                                                    <div class="tree-card-body">
                                                        <p>1. Bộ phận Hợp tác</p>
                                                        <p>2. Bộ phận nghiên cứu KH</p>
                                                        <div class="contact-info">
                                                            <p><strong>SĐT:</strong> 0903 330 454</p>
                                                            <p><strong>Email:</strong> info@greeco.vn</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="tree-card">
                                                    <h4>VĂN PHÒNG VIỆN</h4>
                                                    <div class="tree-card-body">
                                                        <p>1. Bộ phận hành chính</p>
                                                        <p>2. Bộ phận truyền thông</p>
                                                        <p>3. Bộ phận kế toán</p>
                                                        <div class="contact-info">
                                                            <p><strong>SĐT:</strong> 0903 330 454</p>
                                                            <p><strong>Email:</strong> info@greeco.vn</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Organizational Chart Section End -->

    <!-- Our Approach Section Start -->
    <div class="our-approach parallaxie">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Cách tiếp cận</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Xây dựng tương lai <span>bền
                                vững</span></h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center no-gutters">
                <div class="col-lg-5">
                    <div class="our-approach-content">
                        <div class="mission-vision-item wow fadeInUp">
                            <div class="icon-box">
                                <i class="fa-solid fa-bullseye"></i>
                            </div>
                            <div class="mission-vision-content">
                                <h3>Sứ mệnh</h3>
                                <p>Cung cấp Giải pháp toàn diện về môi trường, hỗ trợ doanh nghiệp phát triển bền vững và
                                    giảm phát thải khí nhà kính.</p>
                            </div>
                        </div>
                        <div class="mission-vision-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <i class="fa-solid fa-eye"></i>
                            </div>
                            <div class="mission-vision-content">
                                <h3>Tầm nhìn</h3>
                                <p>Trở thành đơn vị hàng đầu Việt Nam trong lĩnh vực Đào tạo và tư vấn môi trường, góp phần
                                    bảo vệ hành tinh xanh.</p>
                            </div>
                        </div>
                        <div class="mission-vision-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <i class="fa-solid fa-gem"></i>
                            </div>
                            <div class="mission-vision-content">
                                <h3>Giá trị cốt lõi</h3>
                                <p>Chính trực - Chất lượng - Sáng tạo - Hợp tác - Cam kết phát triển bền vững.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="our-approach-image">
                        <figure class="image-anime reveal">
                            <img src="{{ asset('images/about-image-env.png') }}" alt="Our Approach">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Approach Section End -->

    <!-- Our Team Section Start -->
    @if (isset($teamMembers) && count($teamMembers) > 0)
        <div class="our-team">
            <div class="container">
                <div class="row section-row">
                    <div class="col-lg-12">
                        <div class="section-title dark-section">
                            <h3 class="wow fadeInUp">Đội ngũ chuyên gia</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($teamMembers->take(4) as $index => $member)
                        <div class="col-lg-3 col-md-6">
                            <div class="team-item wow fadeInUp"
                                @if ($index > 0) data-wow-delay="{{ $index * 0.2 }}s" @endif>
                                <div class="team-image">
                                    <a href="#" data-cursor-text="Xem">
                                        <figure class="image-anime">
                                            <img src="{{ asset($member->avatar ?? 'images/team-' . (($index % 4) + 1) . '.jpg') }}"
                                                alt="{{ $member->name }}">
                                        </figure>
                                    </a>
                                    <div class="team-social-icon">
                                        <ul>
                                            @if (!empty($member->social_links['linkedin']))
                                                <li><a href="{{ $member->social_links['linkedin'] }}"><i
                                                            class="fa-brands fa-linkedin-in"></i></a></li>
                                            @endif
                                            @if (!empty($member->social_links['facebook']))
                                                <li><a href="{{ $member->social_links['facebook'] }}"><i
                                                            class="fab fa-facebook-f"></i></a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h3><a href="#">{{ $member->name }}</a></h3>
                                    <p>{{ $member->position }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @else
        <div class="our-team">
            <div class="container">
                <div class="row section-row">
                    <div class="col-lg-12">
                        <div class="section-title dark-section">
                            <h3 class="wow fadeInUp">Đội ngũ chuyên gia</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item wow fadeInUp">
                            <div class="team-image">
                                <a href="#" data-cursor-text="Xem">
                                    <figure class="image-anime">
                                        <img src="{{ asset('images/team-1.jpg') }}" alt="Expert 1">
                                    </figure>
                                </a>
                                <div class="team-social-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3><a href="#">TS. Nguyễn Văn A</a></h3>
                                <p>Giám đốc</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="team-image">
                                <a href="#" data-cursor-text="Xem">
                                    <figure class="image-anime">
                                        <img src="{{ asset('images/team-2.jpg') }}" alt="Expert 2">
                                    </figure>
                                </a>
                                <div class="team-social-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3><a href="#">ThS. Trần Thị B</a></h3>
                                <p>Trưởng phòng tư vấn</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="team-image">
                                <a href="#" data-cursor-text="Xem">
                                    <figure class="image-anime">
                                        <img src="{{ asset('images/team-3.jpg') }}" alt="Expert 3">
                                    </figure>
                                </a>
                                <div class="team-social-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3><a href="#">KS. Lê Văn C</a></h3>
                                <p>Chuyên gia Môi trường</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="team-image">
                                <a href="#" data-cursor-text="Xem">
                                    <figure class="image-anime">
                                        <img src="{{ asset('images/team-4.jpg') }}" alt="Expert 4">
                                    </figure>
                                </a>
                                <div class="team-social-icon">
                                    <ul>
                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-content">
                                <h3><a href="#">ThS. Phạm Thị D</a></h3>
                                <p>Trưởng phòng đào tạo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- Our Team Section End -->

    <!-- Our Partners Section Start -->
    @if (isset($partners) && count($partners) > 0)
        <div class="our-partners">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Partners Slider Start -->
                        <div class="partners-slider">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    @foreach ($partners as $partner)
                                        <div class="swiper-slide">
                                            <div class="partner-logo">
                                                <img src="{{ asset($partner->logo) }}" alt="{{ $partner->name }}">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Partners Slider End -->
                    </div>
                </div>
            </div>
        </div>
    @endif
    <!-- Our Partners Section End -->
@endsection
