@extends('layouts.app')

@section('title', 'Dịch vụ tư vấn - GREECO | Viện Đào tạo và nghiên cứu Môi trường')

@section('content')
    <x-page-header title="Dịch vụ tư vấn" :breadcrumbs="[['title' => 'Dịch vụ', 'url' => route('services.index')]]" />

    <!-- Page Services Start -->
    <div class="our-services page-services">
        <div class="container">
            <div class="row">
                @php
                    $serviceIcons = [
                        'fa-solid fa-smog',
                        'fa-solid fa-file-invoice',
                        'fa-solid fa-seedling',
                        'fa-solid fa-file-shield',
                        'fa-solid fa-triangle-exclamation',
                        'fa-solid fa-industry',
                    ];
                @endphp
                @forelse($services as $index => $service)
                    <div class="col-lg-4 col-md-6">
                        <!-- Service Item Start -->
                        <div class="service-item{{ $index === 2 ? ' active' : '' }} wow fadeInUp"
                            @if ($index > 0) data-wow-delay="{{ ($index % 3) * 0.2 }}s" @endif>
                            <div class="icon-box">
                                <i class="{{ $serviceIcons[$index % count($serviceIcons)] }}"></i>
                            </div>
                            <div class="service-title-box">
                                <div class="service-title">
                                    <h3><a
                                            href="{{ route('services.show', $service->slug ?? $service->id) }}">{{ $service->name }}</a>
                                    </h3>
                                </div>
                                <div class="service-btn">
                                    <a href="{{ route('services.show', $service->slug ?? $service->id) }}">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <p>{{ Str::limit($service->short_description, 150) }}</p>
                            </div>
                        </div>
                        <!-- Service Item End -->
                    </div>
                @empty
                    <!-- Default services -->
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp">
                            <div class="icon-box">
                                <i class="fa-solid fa-smog"></i>
                            </div>
                            <div class="service-title-box">
                                <div class="service-title">
                                    <h3><a href="#">Kiểm kê khí nhà kính và Giảm phát thải</a></h3>
                                </div>
                                <div class="service-btn">
                                    <a href="#">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <p>Lập báo cáo Kiểm kê khí nhà kính theo Nghị định 06/2022/NĐ-CP, 119/2025/NĐ-CP và tiêu
                                    chuẩn ISO 14064-1:2018.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <i class="fa-solid fa-file-invoice"></i>
                            </div>
                            <div class="service-title-box">
                                <div class="service-title">
                                    <h3><a href="#">Báo cáo CBAM & LCA</a></h3>
                                </div>
                                <div class="service-btn">
                                    <a href="#">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <p>Lập báo cáo CBAM, Đánh giá vòng đời sản phẩm (LCA) và xác định dấu chân carbon theo tiêu
                                    chuẩn EU.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item active wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <i class="fa-solid fa-seedling"></i>
                            </div>
                            <div class="service-title-box">
                                <div class="service-title">
                                    <h3><a href="#">Phát triển bền vững & ESG</a></h3>
                                </div>
                                <div class="service-btn">
                                    <a href="#">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <p>Lập báo cáo phát triển bền vững cho doanh nghiệp, báo cáo ESG theo tiêu chuẩn quốc tế.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
                            <div class="icon-box">
                                <i class="fa-solid fa-file-shield"></i>
                            </div>
                            <div class="service-title-box">
                                <div class="service-title">
                                    <h3><a href="#">Hồ sơ môi trường</a></h3>
                                </div>
                                <div class="service-btn">
                                    <a href="#">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <p>ĐTM, GPMT, Vận hành thử nghiệm và các hồ sơ pháp lý môi trường.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp" data-wow-delay="0.8s">
                            <div class="icon-box">
                                <i class="fa-solid fa-triangle-exclamation"></i>
                            </div>
                            <div class="service-title-box">
                                <div class="service-title">
                                    <h3><a href="#">Ứng phó sự cố môi trường</a></h3>
                                </div>
                                <div class="service-btn">
                                    <a href="#">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <p>Kế hoạch Ứng phó sự cố hóa chất, môi trường và tràn dầu.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp" data-wow-delay="1s">
                            <div class="icon-box">
                                <i class="fa-solid fa-industry"></i>
                            </div>
                            <div class="service-title-box">
                                <div class="service-title">
                                    <h3><a href="#">Tư vấn KCN xanh</a></h3>
                                </div>
                                <div class="service-btn">
                                    <a href="#">
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="service-content">
                                <p>Tư vấn phát triển Khu công nghiệp xanh và bền vững.</p>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>

            @if (isset($services) && $services instanceof \Illuminate\Pagination\LengthAwarePaginator && $services->hasPages())
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pagination-wrapper">
                            {{ $services->links() }}
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!-- Page Services End -->
@endsection
