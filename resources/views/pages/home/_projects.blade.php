<!-- Our Projects Section Start -->
<div class="our-projects">
    <div class="container">
        <div class="row section-row">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Dự án</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">Các dự án <span>môi trường
                            tiêu biểu</span></h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Our Projects Box Start -->
                <div class="our-projeect-box">
                    <!-- Projects List Start -->
                    <div class="projects-list wow fadeInUp" data-wow-delay="0.4s">
                        @forelse($projects ?? [] as $index => $project)
                            <!-- Project Item Start -->
                            <div class="project-item{{ $index === 1 ? ' active' : '' }}">
                                <div class="project-image">
                                    <a href="{{ route('projects.show', $project->slug ?? $project->id) }}"
                                        data-cursor-text="Xem">
                                        <figure class="image-anime">
                                            <img src="{{ asset($project->featured_image ?? 'images/project-carbon.png') }}"
                                                alt="{{ $project->name }}">
                                        </figure>
                                    </a>
                                </div>
                                <div class="project-content">
                                    <p><a
                                            href="{{ route('projects.show', $project->slug ?? $project->id) }}">{{ $project->category->name ?? 'Dự án' }}</a>
                                    </p>
                                    <h3><a
                                            href="{{ route('projects.show', $project->slug ?? $project->id) }}">{{ $project->name }}</a>
                                    </h3>
                                </div>
                            </div>
                            <!-- Project Item End -->
                        @empty
                            <!-- Default projects -->
                            <div class="project-item">
                                <div class="project-image">
                                    <a href="{{ route('projects.index') }}" data-cursor-text="Xem">
                                        <figure class="image-anime">
                                            <img src="{{ asset('images/project-carbon.png') }}" alt="">
                                        </figure>
                                    </a>
                                </div>
                                <div class="project-content">
                                    <p><a href="{{ route('projects.index') }}">Tín chỉ carbon</a></p>
                                    <h3><a href="{{ route('projects.index') }}">Dự án tín chỉ carbon cho doanh
                                            nghiệp</a></h3>
                                </div>
                            </div>
                        @endforelse
                    </div>
                    <!-- Projects List End -->

                    <!-- Section Footer Text Start -->
                    <div class="section-footer-text wow fadeInUp" data-wow-delay="0.6s">
                        <p>Khám phá tất cả các dự án môi trường của chúng tôi hướng tới tương lai xanh và bền vững.
                            <a href="{{ route('projects.index') }}">Xem tất cả</a>
                        </p>
                    </div>
                    <!-- Section Footer Text End -->
                </div>
                <!-- Our Projects Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Projects Section End -->
