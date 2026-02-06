{{-- BreadcrumbList JSON-LD --}}
@if(isset($breadcrumbs) && count($breadcrumbs) > 0)
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        {
            "@type": "ListItem",
            "position": 1,
            "name": "Trang chủ",
            "item": "{{ route('home') }}"
        }
        @foreach($breadcrumbs as $index => $crumb)
        ,{
            "@type": "ListItem",
            "position": {{ $index + 2 }},
            "name": "{{ $crumb['title'] }}",
            "item": "{{ $crumb['url'] ?? '' }}"
        }
        @endforeach
    ]
}
</script>
@endif
