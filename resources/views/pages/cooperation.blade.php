@extends('layouts.app')

@section('title', 'Hợp tác & NCKH - GREECO | Viện Đào tạo và nghiên cứu Môi trường')

@section('content')
    <x-page-header title="Hợp tác & nghiên cứu khoa học" :breadcrumbs="[['title' => 'Hợp tác & NCKH', 'url' => route('cooperation')]]" />

    <!-- Cooperation Introduction Start -->
    <div class="page-service-single">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Hợp tác phát triển</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s">Cùng xây dựng <span>tương lai xanh</span></h2>
                    </div>
                    <div class="service-entry wow fadeInUp" data-wow-delay="0.4s">
                        <p>GREECO luôn mở rộng Hợp tác với các tổ chức, doanh nghiệp, trường đại học và viện nghiên cứu
                            trong và ngoài nước nhằm thúc đẩy phát triển bền vững và bảo vệ môi trường.</p>
                        <p>Chúng tôi tin rằng sự Hợp tác đa phương là chìa khóa để giải quyết các thách thức môi trường toàn
                            cầu và tạo ra những Giải pháp đột phá cho tương lai.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <figure class="image-anime reveal wow fadeInUp" data-wow-delay="0.4s">
                        <img src="{{ asset('images/about-image-env.png') }}" alt="Hợp tác">
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- Cooperation Introduction End -->

    <!-- Cooperation Types Start -->
    <div class="our-services" style="background: #f8f9fa;">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3 class="wow fadeInUp">Lĩnh vực Hợp tác</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s">Các hình thức <span>Hợp tác</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Item 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp">
                        <div class="service-icon">
                            <i class="fa-solid fa-building"></i>
                        </div>
                        <div class="service-content">
                            <h3>Hợp tác doanh nghiệp</h3>
                            <p>Phối hợp với doanh nghiệp trong các dự án Kiểm kê KNK, tư vấn ESG, phát triển tín chỉ carbon
                                và chuyển đổi xanh.</p>
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-icon">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <div class="service-content">
                            <h3>Hợp tác học thuật</h3>
                            <p>Liên kết với các trường đại học, viện nghiên cứu trong đào tạo, nghiên cứu và phát triển
                                nguồn nhân lực môi trường.</p>
                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-icon">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <div class="service-content">
                            <h3>Hợp tác quốc tế</h3>
                            <p>Kết nối với các tổ chức quốc tế, chương trình môi trường của UN, WB, ADB trong các dự án phát
                                triển bền vững.</p>
                        </div>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-icon">
                            <i class="fa-solid fa-landmark"></i>
                        </div>
                        <div class="service-content">
                            <h3>Hợp tác chính phủ</h3>
                            <p>Phối hợp với các cơ quan quản lý nhà nước trong xây dựng chính sách, quy chuẩn và tiêu chuẩn
                                môi trường.</p>
                        </div>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="0.8s">
                        <div class="service-icon">
                            <i class="fa-solid fa-hands-holding-circle"></i>
                        </div>
                        <div class="service-content">
                            <h3>Hợp tác NGO</h3>
                            <p>Làm việc cùng các tổ chức phi chính phủ trong các dự án bảo tồn, phục hồi hệ sinh thái và
                                giáo dục cộng đồng.</p>
                        </div>
                    </div>
                </div>
                <!-- Item 6 -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp" data-wow-delay="1s">
                        <div class="service-icon">
                            <i class="fa-solid fa-microchip"></i>
                        </div>
                        <div class="service-content">
                            <h3>Hợp tác công nghệ</h3>
                            <p>Phát triển và ứng dụng công nghệ mới trong giám sát môi trường, quản lý dữ liệu và tự động
                                hóa báo cáo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cooperation Types End -->

    <!-- Research Section Start -->
    <div class="page-service-single">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3 class="wow fadeInUp">Nghiên cứu khoa học</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s">Lĩnh vực <span>nghiên cứu</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="service-entry">
                        <div class="our-benefit-body service-why-choose-list">
                            <div class="benefit-body-item wow fadeInUp">
                                <div class="icon-box">
                                    <i class="fa-solid fa-temperature-arrow-up"></i>
                                </div>
                                <div class="benefit-body-item-content">
                                    <h3>Biến đổi khí hậu</h3>
                                    <p>Nghiên cứu tác động, Đánh giá rủi ro và xây dựng Giải pháp thích ứng với biến đổi khí
                                        hậu.</p>
                                </div>
                            </div>
                            <div class="benefit-body-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-box">
                                    <i class="fa-solid fa-recycle"></i>
                                </div>
                                <div class="benefit-body-item-content">
                                    <h3>Kinh tế tuần hoàn</h3>
                                    <p>Phát triển mô hình kinh tế tuần hoàn, tái chế và tái sử dụng tài nguyên trong sản
                                        xuất.</p>
                                </div>
                            </div>
                            <div class="benefit-body-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <i class="fa-solid fa-solar-panel"></i>
                                </div>
                                <div class="benefit-body-item-content">
                                    <h3>Năng&nbsp;lượng tái tạo</h3>
                                    <p>Nghiên&nbsp;cứu tiềm năng và ứng dụng năng&nbsp;lượng tái tạo tại Việt Nam.</p>
                                </div>
                            </div>
                            <div class="benefit-body-item wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-box">
                                    <i class="fa-solid fa-cloud"></i>
                                </div>
                                <div class="benefit-body-item-content">
                                    <h3>Thị trường carbon</h3>
                                    <p>Nghiên&nbsp;cứu cơ chế và phát triển thị trường carbon tại Việt Nam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <figure class="image-anime reveal wow fadeInUp" data-wow-delay="0.4s">
                        <img src="{{ asset('images/hero-bg-env.png') }}" alt="Nghiên&nbsp;cứu khoa học">
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <!-- Research Section End -->

    <!-- Partners Section Start -->
    <div class="page-service-single" style="background: #f8f9fa; padding: 80px 0;">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3 class="wow fadeInUp">Đối tác</h3>
                        <h2 class="wow fadeInUp" data-wow-delay="0.2s">Đối tác <span>chiến lược</span></h2>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                @if (isset($partners) && count($partners) > 0)
                    @foreach ($partners as $partner)
                        <div class="col-lg-2 col-md-4 col-6 mb-4">
                            <div class="partner-logo wow fadeInUp" data-wow-delay="{{ $loop->index * 0.1 }}s"
                                style="background: #fff; padding: 30px 20px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                                <img src="{{ asset($partner->logo) }}" alt="{{ $partner->name }}"
                                    style="max-height: 60px; opacity: 0.7; filter: grayscale(100%); transition: all 0.3s;">
                            </div>
                        </div>
                    @endforeach
                @else
                    @for ($i = 0; $i < 6; $i++)
                        <div class="col-lg-2 col-md-4 col-6 mb-4">
                            <div class="partner-logo wow fadeInUp" data-wow-delay="{{ $i * 0.1 }}s"
                                style="background: #fff; padding: 30px 20px; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                                <img src="{{ asset($settings['logo'] ?? 'images/logo.png') }}" alt="Partner"
                                    style="max-height: 60px; opacity: 0.7; filter: grayscale(100%); transition: all 0.3s;">
                            </div>
                        </div>
                    @endfor
                @endif
            </div>
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <p class="wow fadeInUp" data-wow-delay="0.6s" style="color: #666;">Và nhiều đối tác khác trong lĩnh
                        vực môi&nbsp;trường và phát&nbsp;triển bền&nbsp;vững...</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Partners Section End -->

    <!-- CTA Section Start -->
    <div class="page-service-single"
        style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%); padding: 80px 0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h2 class="wow fadeInUp" style="color: #fff; margin-bottom: 15px;">Trở thành đối tác của GREECO</h2>
                    <p class="wow fadeInUp" data-wow-delay="0.2s" style="color: rgba(255,255,255,0.9);">Hãy liên hệ với
                        chúng tôi để thảo luận về cơ hội Hợp&nbsp;tác trong lĩnh&nbsp;vực môi&nbsp;trường và phát&nbsp;triển
                        bền&nbsp;vững. Cùng
                        nhau, chúng ta có thể tạo ra những thay đổi tích cực cho môi trường.</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="{{ route('contact') }}" class="btn-default wow fadeInUp" data-wow-delay="0.4s"
                        style="background: #fff; color: #1e3c72;">Liên hệ Hợp&nbsp;tác</a>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Section End -->
@endsection
