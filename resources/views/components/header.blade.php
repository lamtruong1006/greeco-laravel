<!-- Header Start -->
<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg" aria-label="Menu chính">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset($settings['logo'] ?? 'images/logo.png') }}" alt="GREECO Logo" loading="eager">
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('home') }}">Trang chủ</a>
                            </li>
                            <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('about') }}">Giới thiệu</a>
                            </li>
                            <li
                                class="nav-item submenu {{ request()->routeIs('services.*') || request()->routeIs('projects.*') ? 'active' : '' }}">
                                <a class="nav-link" href="#">Dịch vụ</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('services.index') }}">Tư&nbsp;vấn</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="{{ route('projects.index') }}">Dự&nbsp;án</a></li>
                                </ul>
                            </li>
                            <li class="nav-item {{ request()->routeIs('courses.*') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('courses.index') }}">Đào&nbsp;tạo</a>
                            </li>
                            <li class="nav-item {{ request()->routeIs('cooperation') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('cooperation') }}">Hợp&nbsp;tác & NCKH</a>
                            </li>
                            <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('contact') }}">Liên hệ</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Header Btn Start -->
                    <div class="header-btn">
                        <a href="{{ route('contact') }}" class="btn-default">Liên&nbsp;hệ tư&nbsp;vấn</a>
                    </div>
                    <!-- Header Btn End -->
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
<!-- Header End -->
