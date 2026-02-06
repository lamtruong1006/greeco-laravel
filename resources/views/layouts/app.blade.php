<!DOCTYPE html>
<html lang="vi">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description"
        content="{{ $metaDescription ?? ($settings['meta_description'] ?? 'GREECO - Viện Đào tạo và nghiên cứu Môi trường') }}">
    <meta name="keywords"
        content="{{ $metaKeywords ?? ($settings['meta_keywords'] ?? 'GREECO, môi trường, khí nhà kính, carbon') }}">
    <meta name="author" content="GREECO">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Page Title -->
    <title>@yield('title', $settings['meta_title'] ?? 'GREECO - Viện Đào tạo và nghiên cứu Môi trường')</title>

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ $canonicalUrl ?? url()->current() }}">

    <!-- Open Graph Meta -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', $settings['meta_title'] ?? 'GREECO')">
    <meta property="og:description" content="{{ $metaDescription ?? ($settings['meta_description'] ?? 'GREECO - Viện Đào tạo và nghiên cứu Môi trường') }}">
    <meta property="og:image" content="{{ $ogImage ?? asset($settings['og_image'] ?? 'images/logo.png') }}">
    <meta property="og:site_name" content="{{ $settings['company_name'] ?? 'GREECO' }}">
    <meta property="og:locale" content="vi_VN">

    <!-- Twitter Card Meta -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', $settings['meta_title'] ?? 'GREECO')">
    <meta name="twitter:description" content="{{ $metaDescription ?? ($settings['meta_description'] ?? 'GREECO - Viện Đào tạo và nghiên cứu Môi trường') }}">
    <meta name="twitter:image" content="{{ $ogImage ?? asset($settings['og_image'] ?? 'images/logo.png') }}">

    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset($settings['favicon'] ?? 'images/logo.png') }}">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="{{ asset('css/slicknav.min.css') }}" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
    <!-- Font Awesome Icon Css-->
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="{{ asset('css/mousecursor.css') }}">
    <!-- Main Custom Css -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" media="screen">
    @stack('styles')

    {{-- JSON-LD Structured Data --}}
    @include('components.jsonld.organization')
    @stack('jsonld')
</head>

<body>

    @include('components.popup')

    @include('components.topbar')

    @include('components.header')

    @yield('content')

    @include('components.footer')

    @include('components.floating-buttons')

    <!-- Jquery Library File -->
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap js file -->
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <!-- Validator js file -->
    <script src="{{ asset('js/validator.min.js') }}" defer></script>
    <!-- SlickNav js file -->
    <script src="{{ asset('js/jquery.slicknav.js') }}" defer></script>
    <!-- Swiper js file -->
    <script src="{{ asset('js/swiper-bundle.min.js') }}" defer></script>
    <!-- Counter js file -->
    <script src="{{ asset('js/jquery.waypoints.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}" defer></script>
    <!-- Magnific js file -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}" defer></script>
    <!-- SmoothScroll -->
    <script src="{{ asset('js/SmoothScroll.js') }}" defer></script>
    <!-- Parallax js -->
    <script src="{{ asset('js/parallaxie.js') }}" defer></script>
    <!-- MagicCursor js file -->
    <script src="{{ asset('js/gsap.min.js') }}" defer></script>
    <script src="{{ asset('js/magiccursor.js') }}" defer></script>
    <!-- Text Effect js file -->
    <script src="{{ asset('js/SplitText.js') }}" defer></script>
    <script src="{{ asset('js/ScrollTrigger.min.js') }}" defer></script>
    <!-- YTPlayer js File -->
    <script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}" defer></script>
    <!-- Wow js file -->
    <script src="{{ asset('js/wow.min.js') }}" defer></script>
    <!-- Main Custom js file -->
    <script src="{{ asset('js/function.js') }}" defer></script>
    @stack('scripts')
</body>

</html>
