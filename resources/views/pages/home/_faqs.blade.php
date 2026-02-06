<!-- Our Faqs Section Start -->
@if (isset($faqs) && count($faqs) > 0)
    <div class="our-faqs home-our-faqs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Faqs Content Start -->
                    <div class="faq-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">Câu hỏi thường gặp</h3>
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Giải đáp thắc mắc
                                <span>về môi trường</span>
                            </h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Faqs Image Start -->
                        <div class="faq-image">
                            <figure class="image-anime reveal">
                                <img src="{{ asset('images/about-image-env.png') }}" alt="">
                            </figure>
                        </div>
                        <!-- Faqs Image End -->
                    </div>
                    <!-- Faqs Content End -->
                </div>
                <div class="col-lg-6">
                    <!-- FAQ Accordion Start -->
                    <div class="faq-accordion" id="accordion">
                        @foreach ($faqs->take(4) as $index => $faq)
                            <!-- FAQ Item Start -->
                            <div class="accordion-item wow fadeInUp"
                                @if ($index > 0) data-wow-delay="{{ $index * 0.2 }}s" @endif>
                                <h2 class="accordion-header" id="heading{{ $index + 1 }}">
                                    <button class="accordion-button{{ $index > 0 ? ' collapsed' : '' }}"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $index + 1 }}"
                                        aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                        aria-controls="collapse{{ $index + 1 }}">
                                        {{ $faq->question }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $index + 1 }}"
                                    class="accordion-collapse collapse{{ $index === 0 ? ' show' : '' }}"
                                    aria-labelledby="heading{{ $index + 1 }}" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p>{{ $faq->answer }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Item End -->
                        @endforeach
                    </div>
                    <!-- FAQ Accordion End -->
                </div>
            </div>
        </div>
    </div>
@endif
<!-- Our Faqs Section End -->
