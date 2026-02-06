{{-- Service JSON-LD --}}
@if(isset($service))
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Service",
    "name": "{{ $service->name }}",
    "description": "{{ Str::limit(strip_tags($service->short_description ?? $service->content), 160) }}",
    "image": "{{ asset($service->featured_image ?? 'images/icon-service-1.svg') }}",
    "provider": {
        "@type": "Organization",
        "name": "{{ $settings['company_name'] ?? 'GREECO' }}",
        "url": "{{ url('/') }}"
    },
    "areaServed": {
        "@type": "Country",
        "name": "Việt Nam"
    },
    "url": "{{ url()->current() }}"
}
</script>
@endif
