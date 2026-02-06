@extends('layouts.app')

@section('title', ($service->name ?? 'Chi tiết dịch vụ') . ' - GREECO | Viện Đào tạo và nghiên cứu Môi trường')

@push('jsonld')
    @include('components.jsonld.service', ['service' => $service])
    @include('components.jsonld.breadcrumb', [
        'breadcrumbs' => [
            ['title' => 'Dịch vụ', 'url' => route('services.index')],
            ['title' => $service->name ?? 'Chi tiết', 'url' => url()->current()],
        ],
    ])
@endpush

@section('content')
    <x-page-header :title="$service->name ?? 'Chi tiết dịch vụ'" :breadcrumbs="[
        ['title' => 'Dịch vụ', 'url' => route('services.index')],
        ['title' => $service->name ?? 'Chi tiết', 'url' => '#'],
    ]" />

    <!-- Page Service Single Start -->
    <div class="page-service-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <!-- Page Single Sidebar Start -->
                    <div class="page-single-sidebar">
                        <!-- Page Category List Start -->
                        <div class="page-catagery-list wow fadeInUp">
                            <h3>Danh mục dịch vụ</h3>
                            <ul>
                                @forelse($relatedServices ?? [] as $relatedService)
                                    <li><a href="{{ route('services.show', $relatedService->slug ?? $relatedService->id) }}"
                                            class="{{ isset($service) && $service->id == $relatedService->id ? 'active' : '' }}">{{ $relatedService->name }}</a>
                                    </li>
                                @empty
                                    <li><a href="#">Kiểm kê khí nhà kính</a></li>
                                    <li><a href="#">Báo cáo CBAM & LCA</a></li>
                                    <li><a href="#">Phát triển bền vững & ESG</a></li>
                                    <li><a href="#">Hồ sơ môi trường</a></li>
                                    <li><a href="#">Ứng phó sự cố môi trường</a></li>
                                    <li><a href="#">Tư vấn KCN xanh</a></li>
                                @endforelse
                            </ul>
                        </div>
                        <!-- Page Category List End -->

                        <!-- Sidebar CTA Box Start -->
                        <div class="sidebar-cta-box wow fadeInUp" data-wow-delay="0.2s">
                            <div class="sidebar-cta-logo">
                                <img src="{{ asset($settings['logo_footer'] ?? 'images/footer-logo.png') }}" alt="">
                            </div>
                            <div class="sidebar-cta-content">
                                <p>Chúng tôi là đơn vị tư vấn môi trường hàng đầu, cam kết đồng hành cùng doanh nghiệp phát
                                    triển bền vững.</p>
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
                        <!-- Sidebar CTA Box End -->
                    </div>
                    <!-- Page Single Sidebar End -->
                </div>

                <div class="col-lg-8">
                    <!-- Service Single Content Start -->
                    <div class="service-single-content">
                        <!-- Page Single Slider Start -->
                        @if (isset($service->gallery) && count($service->gallery) > 0)
                            <div class="page-single-slider">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        @foreach ($service->gallery as $image)
                                            <!-- Swiper Slider Start -->
                                            <div class="swiper-slide">
                                                <figure class="image-anime" data-cursor-text="Kéo">
                                                    <img src="{{ asset($image) }}" alt="">
                                                </figure>
                                            </div>
                                            <!-- Swiper Slider End -->
                                        @endforeach
                                    </div>
                                    <div class="page-single-pagination"></div>
                                </div>
                            </div>
                        @elseif(isset($service->featured_image))
                            <div class="page-single-slider">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <figure class="image-anime" data-cursor-text="Kéo">
                                                <img src="{{ asset($service->featured_image) }}" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="page-single-slider">
                                <div class="swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <figure class="image-anime" data-cursor-text="Kéo">
                                                <img src="{{ asset('images/project-carbon.png') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="image-anime" data-cursor-text="Kéo">
                                                <img src="{{ asset('images/project-renewable.png') }}" alt="">
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="image-anime" data-cursor-text="Kéo">
                                                <img src="{{ asset('images/hero-bg-env.png') }}" alt="">
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="page-single-pagination"></div>
                                </div>
                            </div>
                        @endif
                        <!-- Page Single Slider End -->

                        <!-- Service Entry Start -->
                        <div class="service-entry">
                            @if (isset($service->content))
                                {!! clean($service->content, 'cms') !!}
                            @else
                                <p class="wow fadeInUp">Dịch vụ {{ $service->name ?? 'Kiểm kê khí nhà kính' }} của GREECO
                                    giúp doanh nghiệp xác định, đo lường và báo cáo lượng phát thải khí nhà kính theo tiêu
                                    chuẩn quốc tế ISO 14064-1:2018 và các quy định pháp luật Việt Nam.</p>
                                <p class="wow fadeInUp" data-wow-delay="0.2s">Với đội ngũ chuyên gia có chứng chỉ được cấp
                                    bởi Bộ Tài nguyên & Môi trường, GREECO cam kết cung cấp dịch vụ chính xác, đáng tin cậy
                                    và phù hợp với từng ngành nghề, quy mô doanh nghiệp.</p>

                                <!-- Service Why Choose Box Start -->
                                <div class="service-why-choose-box">
                                    <h2 class="wow fadeInUp" data-wow-delay="0.4s">Tại sao cần dịch vụ này?</h2>
                                    <p class="wow fadeInUp" data-wow-delay="0.6s">Việc nắm rõ nguồn phát thải giúp doanh
                                        nghiệp xây dựng chiến lược giảm thiểu hiệu quả và đáp ứng các yêu cầu pháp lý.</p>

                                    <!-- Service Why Choose List Start -->
                                    <div class="our-benefit-body service-why-choose-list">
                                        <!-- Service Why Choose Item Start -->
                                        <div class="benefit-body-item wow fadeInUp">
                                            <div class="icon-box">
                                                <img src="{{ asset('images/icon-service-1.svg') }}" alt="">
                                            </div>
                                            <div class="benefit-body-item-content">
                                                <h3>Tuân thủ quy định pháp luật</h3>
                                            </div>
                                        </div>
                                        <!-- Service Why Choose Item End -->

                                        <!-- Service Why Choose Item Start -->
                                        <div class="benefit-body-item wow fadeInUp" data-wow-delay="0.2s">
                                            <div class="icon-box">
                                                <img src="{{ asset('images/icon-service-2.svg') }}" alt="">
                                            </div>
                                            <div class="benefit-body-item-content">
                                                <h3>Đáp ứng yêu cầu thị trường quốc tế</h3>
                                            </div>
                                        </div>
                                        <!-- Service Why Choose Item End -->

                                        <!-- Service Why Choose Item Start -->
                                        <div class="benefit-body-item wow fadeInUp" data-wow-delay="0.4s">
                                            <div class="icon-box">
                                                <img src="{{ asset('images/icon-service-3.svg') }}" alt="">
                                            </div>
                                            <div class="benefit-body-item-content">
                                                <h3>Nâng cao uy tín và giá trị thương hiệu</h3>
                                            </div>
                                        </div>
                                        <!-- Service Why Choose Item End -->
                                    </div>
                                    <!-- Service Why Choose List End -->
                                </div>
                                <!-- Service Why Choose Box End -->
                            @endif
                        </div>
                        <!-- Service Entry End -->

                        <!-- CTA Box Start -->
                        <div class="service-cta-box wow fadeInUp"
                            style="margin-top: 40px; padding: 30px; background: #f8f9fa; border-radius: 10px;">
                            <div class="row align-items-center">
                                <div class="col-lg-8">
                                    <h3>Bạn cần tư vấn về dịch vụ này?</h3>
                                    <p>Liên hệ ngay với chúng tôi để được hỗ trợ miễn phí.</p>
                                </div>
                                <div class="col-lg-4 text-lg-end">
                                    <a href="{{ route('contact') }}" class="btn-default">Liên hệ ngay</a>
                                </div>
                            </div>
                        </div>
                        <!-- CTA Box End -->
                    </div>
                    <!-- Service Single Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Service Single End -->
@endsection
