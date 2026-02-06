{{-- Article JSON-LD for blog posts --}}
@if (isset($post))
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "{{ $post->title }}",
    "description": "{{ Str::limit(strip_tags($post->short_description ?? $post->content), 160) }}",
    "image": "{{ asset($post->featured_image ?? 'images/post-1.jpg') }}",
    "datePublished": "{{ $post->published_at?->toW3cString() ?? $post->created_at->toW3cString() }}",
    "dateModified": "{{ $post->updated_at->toW3cString() }}",
    "author": {
        "@type": "Person",
        "name": "{{ $post->author->name ?? 'GREECO' }}"
    },
    "publisher": {
        "@type": "Organization",
        "name": "{{ $settings['company_name'] ?? 'GREECO' }}",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ asset($settings['logo'] ?? 'images/logo.png') }}"
        }
    },
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ url()->current() }}"
    }
}
</script>
@endif
