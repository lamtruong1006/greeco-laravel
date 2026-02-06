{{-- FAQPage JSON-LD --}}
@if(isset($faqs) && count($faqs) > 0)
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        @foreach($faqs as $index => $faq)
        @if($index > 0),@endif
        {
            "@type": "Question",
            "name": "{{ $faq->question }}",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "{{ strip_tags($faq->answer) }}"
            }
        }
        @endforeach
    ]
}
</script>
@endif
