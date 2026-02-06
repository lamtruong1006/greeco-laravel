@props(['title', 'breadcrumbs' => []])

<!-- Breadcrumb Bar Start -->
<div class="breadcrumb-bar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Trang chủ</a></li>
                        @foreach ($breadcrumbs as $breadcrumb)
                            @if ($loop->last)
                                <li class="breadcrumb-item active" aria-current="page">{{ $breadcrumb['title'] }}</li>
                            @else
                                <li class="breadcrumb-item"><a
                                        href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['title'] }}</a></li>
                            @endif
                        @endforeach
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Bar End -->

<!-- Page Title Bar Start -->
<div class="page-title-bar">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{ $title }}</h1>
            </div>
        </div>
    </div>
</div>
<!-- Page Title Bar End -->
