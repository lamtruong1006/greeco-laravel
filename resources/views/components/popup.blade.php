@php
    $popup = App\Models\Popup::where('is_active', true)
        ->where(function ($query) {
            $query->whereNull('start_date')->orWhere('start_date', '<=', now());
        })
        ->where(function ($query) {
            $query->whereNull('end_date')->orWhere('end_date', '>=', now());
        })
        ->first();
@endphp

@if ($popup)
    <!-- Welcome Popup Start -->
    <div class="welcome-popup-overlay" id="welcomePopup">
        <div class="welcome-popup">
            <!-- Close Button -->
            <button class="popup-close-btn" id="closePopup">
                <i class="fa-solid fa-xmark"></i>
            </button>

            <!-- Popup Header -->
            <div class="popup-header">
                <div class="popup-logo">
                    <img src="{{ asset($settings['logo'] ?? 'images/logo.png') }}" alt="GREECO Logo">
                </div>
                <div class="popup-title">
                    <h4>{{ $popup->subtitle ?? 'CƠ HỘI tư vấn - đào tạo' }}</h4>
                    <h2>{!! clean($popup->title, 'cms') !!}</h2>
                    @if ($popup->badge_1 || $popup->badge_2)
                        <div class="popup-badge">
                            @if ($popup->badge_1)
                                <span class="date-badge">{{ $popup->badge_1 }}</span>
                            @endif
                            @if ($popup->badge_2)
                                <span class="free-badge">{{ $popup->badge_2 }}</span>
                            @endif
                        </div>
                    @endif
                </div>
            </div>

            <!-- Popup Content -->
            <div class="popup-content">
                {!! clean($popup->content, 'cms') !!}
            </div>

            <!-- Popup CTA -->
            <div class="popup-cta">
                <a href="{{ $popup->button_url ?? route('contact') }}"
                    class="btn-default btn-popup">{{ $popup->button_text ?? 'Đăng ký ngay' }}</a>
            </div>

            <!-- Popup Footer -->
            <div class="popup-footer">
                <div class="popup-contact-item">
                    <i class="fa-solid fa-phone"></i>
                    <span>{{ $settings['phone'] ?? '0903 330 454' }}</span>
                </div>
                <div class="popup-contact-item">
                    <i class="fa-solid fa-envelope"></i>
                    <span>{{ $settings['email'] ?? 'info@greeco.vn' }}</span>
                </div>
                <div class="popup-contact-item">
                    <i class="fa-solid fa-globe"></i>
                    <span>{{ $settings['website'] ?? 'greeco.vn' }}</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome Popup End -->
@endif
