<!-- Floating Contact Buttons -->
<div class="floating-buttons" role="complementary" aria-label="Liên hệ nhanh">
    <a href="tel:{{ $settings['phone'] ?? '+84903330454' }}" class="float-btn" title="Gọi ngay" aria-label="Gọi điện thoại">
        <i class="fa-solid fa-phone" aria-hidden="true"></i>
    </a>
    <a href="{{ $settings['messenger_url'] ?? 'https://m.me/Greeco' }}" target="_blank" class="float-btn" title="Messenger" aria-label="Nhắn tin qua Messenger">
        <i class="fa-brands fa-facebook-messenger" aria-hidden="true"></i>
    </a>
    <a href="{{ $settings['zalo_url'] ?? 'https://zalo.me/your_zalo_id' }}" target="_blank" class="float-btn" title="Zalo" aria-label="Liên hệ qua Zalo">
        <i class="fa-solid fa-comment-dots" aria-hidden="true"></i>
    </a>
    <a href="{{ $settings['google_maps_url'] ?? 'https://www.google.com/maps/search/68%2F26+Nguy%E1%BB%85n+V%C4%83n+L%E1%BA%A1c,+P.Th%E1%BA%A1nh+M%E1%BB%B9+T%C3%A2y,+TP.HCM' }}"
        target="_blank" class="float-btn" title="Chỉ đường" aria-label="Xem bản đồ chỉ đường">
        <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
    </a>
</div>
