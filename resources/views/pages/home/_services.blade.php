<!-- Our Services Section Start -->
<div class="our-services">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Dịch vụ tư vấn</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Giải pháp toàn diện về
                        <span>môi trường và phát triển bền vững</span>
                    </h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            @php
                $serviceIcons = [
                    'fa-solid fa-smog', // Kiểm kê KNK
                    'fa-solid fa-file-invoice', // Báo cáo CBAM & LCA
                    'fa-solid fa-seedling', // Phát triển bền vững & ESG
                    'fa-solid fa-file-shield', // Hồ sơ Môi trường
                    'fa-solid fa-triangle-exclamation', // Ứng phó Sự cố
                    'fa-solid fa-industry', // Tư vấn KCN Xanh
                ];
            @endphp
            @forelse($services ?? [] as $index => $service)
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item{{ $index === 1 ? ' active' : '' }} wow fadeInUp"
                        @if ($index > 0) data-wow-delay="{{ $index * 0.2 }}s" @endif>
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
                            <p>{{ Str::limit($service->short_description ?? '', 100) }}</p>
                        </div>
                    </div>
                    <!-- Service Item End -->
                </div>
            @empty
                <!-- Default services will be shown -->
            @endforelse
        </div>
    </div>
</div>
<!-- Our Services Section End -->
