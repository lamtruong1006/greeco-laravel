{{-- Organization + LocalBusiness JSON-LD --}}
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "@id": "{{ url('/') }}/#organization",
    "name": "{{ $settings['company_name'] ?? 'GREECO' }}",
    "alternateName": "Viện Đào tạo và nghiên cứu Môi trường GREECO",
    "url": "{{ url('/') }}",
    "logo": "{{ asset($settings['logo'] ?? 'images/logo.png') }}",
    "image": "{{ asset($settings['og_image'] ?? 'images/logo.png') }}",
    "description": "{{ $settings['meta_description'] ?? 'GREECO - Viện Đào tạo và nghiên cứu Môi trường, chuyên tư vấn kiểm kê khí nhà kính, báo cáo CBAM, ESG và phát triển bền vững.' }}",
    "telephone": "{{ $settings['phone'] ?? '0915887148' }}",
    "email": "{{ $settings['email'] ?? 'info@greeco.vn' }}",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "{{ $settings['address'] ?? '68/26 Nguyễn Văn Lạc' }}",
        "addressLocality": "TP. Hồ Chí Minh",
        "addressCountry": "VN"
    },
    "sameAs": [
        @if(!empty($settings['facebook_url']))"{{ $settings['facebook_url'] }}"@endif
        @if(!empty($settings['youtube_url'])),"{{ $settings['youtube_url'] }}"@endif
        @if(!empty($settings['linkedin_url'])),"{{ $settings['linkedin_url'] }}"@endif
    ],
    "priceRange": "$$"
}
</script>
