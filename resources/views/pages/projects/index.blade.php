@extends('layouts.app')

@section('title', 'Dự án - GREECO | Viện Đào tạo và nghiên cứu Môi trường')

@section('content')
    <x-page-header title="Dự án tiêu biểu" :breadcrumbs="[['title' => 'Dự án', 'url' => route('projects.index')]]" />

    <!-- Page Projects Start -->
    <div class="page-projects">
        <div class="container">
            @if (isset($categories) && count($categories) > 0)
                <!-- Category Filter Start -->
                <div class="row mb-4">
                    <div class="col-lg-12">
                        <div class="project-filter wow fadeInUp">
                            <ul class="filter-list">
                                <li><a href="{{ route('projects.index') }}"
                                        class="{{ !isset($currentCategory) || !$currentCategory ? 'active' : '' }}">Tất
                                        cả</a></li>
                                @foreach ($categories as $category)
                                    <li><a href="{{ route('projects.index', ['category' => $category->slug ?? $category->id]) }}"
                                            class="{{ isset($currentCategory) && $currentCategory == ($category->slug ?? $category->id) ? 'active' : '' }}">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Category Filter End -->
            @endif

            <div class="row">
                @forelse($projects as $index => $project)
                    <div class="col-lg-4 col-md-6">
                        <!-- Project Item Start -->
                        <div class="project-item wow fadeInUp"
                            @if ($index > 0) data-wow-delay="{{ ($index % 3) * 0.2 }}s" @endif>
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
                    </div>
                @empty
                    <!-- Default projects -->
                    <div class="col-lg-4 col-md-6">
                        <div class="project-item wow fadeInUp">
                            <div class="project-image">
                                <a href="#" data-cursor-text="Xem">
                                    <figure class="image-anime">
                                        <img src="{{ asset('images/project-carbon.png') }}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="project-content">
                                <p><a href="#">Tín chỉ carbon</a></p>
                                <h3><a href="#">Dự án phát triển tín chỉ carbon cho doanh nghiệp</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="project-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="project-image">
                                <a href="#" data-cursor-text="Xem">
                                    <figure class="image-anime">
                                        <img src="{{ asset('images/project-renewable.png') }}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="project-content">
                                <p><a href="#">Năng lượng tái tạo</a></p>
                                <h3><a href="#">Dự án điện mặt trời và năng lượng sạch</a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="project-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="project-image">
                                <a href="#" data-cursor-text="Xem">
                                    <figure class="image-anime">
                                        <img src="{{ asset('images/project-forest.png') }}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <div class="project-content">
                                <p><a href="#">Biochar</a></p>
                                <h3><a href="#">Dự án sản xuất biochar từ phế phẩm nông nghiệp</a></h3>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>

            @if (isset($projects) && $projects instanceof \Illuminate\Pagination\LengthAwarePaginator && $projects->hasPages())
                <div class="row">
                    <div class="col-lg-12">
                        <div class="pagination-wrapper">
                            {{ $projects->links() }}
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <!-- Page Projects End -->
@endsection
