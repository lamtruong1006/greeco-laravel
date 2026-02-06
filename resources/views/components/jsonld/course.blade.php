{{-- Course JSON-LD --}}
@if(isset($course))
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Course",
    "name": "{{ $course->name }}",
    "description": "{{ Str::limit(strip_tags($course->short_description ?? $course->overview), 160) }}",
    "image": "{{ asset($course->featured_image ?? 'images/project-carbon.png') }}",
    "provider": {
        "@type": "Organization",
        "name": "{{ $settings['company_name'] ?? 'GREECO' }}",
        "url": "{{ url('/') }}"
    },
    @if($course->price)
    "offers": {
        "@type": "Offer",
        "price": "{{ $course->price }}",
        "priceCurrency": "VND",
        "availability": "https://schema.org/InStock"
    },
    @endif
    "hasCourseInstance": {
        "@type": "CourseInstance",
        "courseMode": "Blended",
        "instructor": {
            "@type": "Person",
            "name": "{{ $course->instructor->name ?? 'GREECO' }}"
        }
    }
}
</script>
@endif
