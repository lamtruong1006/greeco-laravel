@extends('layouts.app')

@section('title', 'Liên hệ - GREECO | Viện Đào tạo và nghiên cứu Môi trường')

@section('content')
    <x-page-header title="Liên hệ Viện Đào tạo và nghiên cứu Môi trường GREECO" :breadcrumbs="[['title' => 'Liên hệ', 'url' => route('contact')]]" />

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <!-- Contact Us Image Start -->
                    <div class="contact-us-image">
                        <div class="contact-us-img">
                            <figure class="image-anime">
                                <img src="{{ asset('images/contact-us-image.jpg') }}" alt="">
                            </figure>
                        </div>
                    </div>
                    <!-- Contact Us Image End -->
                </div>

                <div class="col-lg-7">
                    <!-- Contact Us Content Start -->
                    <div class="contact-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Liên hệ với chúng tôi</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">Bạn có thắc mắc hoặc cần hỗ trợ? Hãy liên hệ với
                                chúng tôi để được tư vấn chuyên môn và Giải pháp tối ưu. Chúng tôi luôn sẵn sàng hỗ trợ bạn!
                            </p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Form Start -->
                        <div class="contact-form">
                            <form id="contactForm" action="{{ route('contact.store') }}" method="POST"
                                data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.4s">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="fullname" class="form-control" id="fullname"
                                            placeholder="Họ và Tên" required value="{{ old('fullname') }}">
                                        <div class="help-block with-errors"></div>
                                        @error('fullname')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone"
                                            placeholder="Số điện thoại" required value="{{ old('phone') }}">
                                        <div class="help-block with-errors"></div>
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="Địa chỉ Email" required value="{{ old('email') }}">
                                        <div class="help-block with-errors"></div>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <select name="service" class="form-control" id="service" required>
                                            <option value="" disabled {{ old('service') ? '' : 'selected' }}>Chọn dịch
                                                vụ quan tâm</option>
                                            @forelse($services ?? [] as $service)
                                                <option value="{{ $service->slug ?? $service->id }}"
                                                    {{ old('service') == ($service->slug ?? $service->id) ? 'selected' : '' }}>
                                                    {{ $service->name }}</option>
                                            @empty
                                                <option value="kiem-ke-khi-nha-kinh">Kiểm kê khí nhà kính</option>
                                                <option value="bao-cao-cbam-lca">Báo cáo CBAM & LCA</option>
                                                <option value="phat-trien-ben-vung-esg">Phát triển bền vững & ESG</option>
                                                <option value="ho-so-moi-truong">Hồ sơ môi trường</option>
                                                <option value="ung-pho-su-co-moi-truong">Ứng phó sự cố môi trường</option>
                                                <option value="tu-van-kcn-xanh">Tư vấn KCN xanh</option>
                                                <option value="du-an-tin-chi-carbon">Dự án tín chỉ carbon</option>
                                                <option value="dao-tao">Đào tạo</option>
                                                <option value="hop-tac-nckh">Hợp tác & NCKH</option>
                                                <option value="khac">Khác</option>
                                            @endforelse
                                        </select>
                                        <div class="help-block with-errors"></div>
                                        @error('service')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="4" placeholder="Nội dung tin nhắn">{{ old('message') }}</textarea>
                                        <div class="help-block with-errors"></div>
                                        @error('message')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default"><span>Gửi tin nhắn</span></button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form End -->
                    </div>
                    <!-- Contact Us Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    <!-- Contact Info Section Start -->
    <div class="contact-info-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-lg-0">
                    <div class="contact-info-box wow fadeInUp" data-wow-delay="0.2s">
                        <div class="contact-info-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="contact-info-content">
                            <h3>Điện thoại</h3>
                            <p><a href="tel:+84903330454">+84 903 330 454</a></p>
                            <p><a href="tel:+842838406742">+84 28 3840 6742</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-lg-0">
                    <div class="contact-info-box wow fadeInUp" data-wow-delay="0.4s">
                        <div class="contact-info-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="contact-info-content">
                            <h3>Địa chỉ</h3>
                            <p>68/26 Nguyễn Văn Lạc,</p>
                            <p>P.19, Bình Thạnh, TP.HCM</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-lg-0">
                    <div class="contact-info-box wow fadeInUp" data-wow-delay="0.6s">
                        <div class="contact-info-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="contact-info-content">
                            <h3>Email</h3>
                            <p><a href="mailto:info@greeco.vn">info@greeco.vn</a></p>
                            <p><a href="mailto:contact@greeco.vn">contact@greeco.vn</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info Section End -->

    <!-- Google Map Section Start -->
    <div class="google-map">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Google Map IFrame Start -->
                    <div class="google-map-iframe wow fadeInUp">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.9147096380147!2d106.6934974!3d10.8025!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529b0c1c88a0b%3A0x4c9f3b5f3b5f3b5f!2s68%2F26%20Nguy%E1%BB%85n%20V%C4%83n%20L%E1%BA%A1c%2C%20Ph%C6%B0%E1%BB%9Dng%2019%2C%20B%C3%ACnh%20Th%E1%BA%A1nh%2C%20Th%C3%A0nh%20ph%E1%BB%91%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1234567890"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map IFrame End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map Section End -->
@endsection
