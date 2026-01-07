<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Namangan Turizm</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <i class="bi bi-globe-americas me-2 text-primary"></i>Namangan Turizm
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <!-- <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                            href="{{ route('home') }}">{{ __('Home') }}</a></li> -->
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                            href="{{ route('about') }}">{{ __('About') }}</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('tours.*') ? 'active' : '' }}"
                            href="{{ route('tours.index') }}">{{ __('Tours') }}</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('hotels.*') ? 'active' : '' }}"
                            href="{{ route('hotels.index') }}">{{ __('Hotels') }}</a></li>
                    <!-- <li class="nav-item"><a class="nav-link {{ request()->routeIs('transport.*') ? 'active' : '' }}"
                            href="{{ route('transport.index') }}">{{ __('Transport') }}</a></li> -->
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('blog.*') ? 'active' : '' }}"
                            href="{{ route('blog.index') }}">{{ __('Blog') }}</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">{{ __('Contact') }}</a></li>

                    <!-- Language Switcher -->
                    <li class="nav-item dropdown ms-lg-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="bi bi-translate me-1"></i> {{ strtoupper(app()->getLocale()) }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('locale', 'uz') }}">O'zbekcha</a></li>
                            <li><a class="dropdown-item" href="{{ route('locale', 'ru') }}">Русский</a></li>
                            <li><a class="dropdown-item" href="{{ route('locale', 'en') }}">English</a></li>
                        </ul>
                    </li>

                    <!-- <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <a class="btn btn-primary-custom btn-sm px-4"
                            href="{{ route('login') }}">{{ __('Admin Panel') }}</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <main class="min-vh-100" style="padding-top: 80px;">
        @yield('content')
    </main>

    <footer>
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                    <h5 class="mb-3">Namangan Turizm</h5>
                    <p class="small">{{ __('Explore the beauty of Uzbekistan with us. We provide the best tours, hotels, and transport services for an unforgettable experience.') }}</p>
                </div>
                <div class="col-lg-2 col-md-3 col-6">
                    <h5 class="mb-3">{{ __('Links') }}</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
                        <li><a href="{{ route('about') }}">{{ __('About') }}</a></li>
                        <li><a href="{{ route('tours.index') }}">{{ __('Tours') }}</a></li>
                        <li><a href="{{ route('blog.index') }}">{{ __('Blog') }}</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 col-6">
                    <h5 class="mb-3">{{ __('Services') }}</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('hotels.index') }}">{{ __('Hotels') }}</a></li>
                        <!-- <li><a href="{{ route('transport.index') }}">Transport</a></li> -->
                        <li><a href="{{ route('gallery.index') }}">{{ __('Gallery') }}</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="mb-3">{{ __('Contact') }}</h5>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><i class="bi bi-geo-alt me-2"></i>
                            {{ $settings['footer_address'] ?? 'Namangan City, Uzbekistan' }}</li>
                        <li class="mb-2"><i class="bi bi-telephone me-2"></i>
                            {{ $settings['footer_phone'] ?? '+998 90 123 45 67' }}</li>
                        <li><i class="bi bi-envelope me-2"></i> {{ $settings['footer_email'] ?? 'info@namanganturizm.uz'
                            }}</li>
                    </ul>
                </div>
            </div>
            <div class="border-top border-secondary mt-4 pt-4 text-center">
                <p class="mb-0 small">&copy; {{ date('Y') }} {{ $settings['footer_copyright'] ?? 'Namangan Turizm' }}.
                    {{ __('All rights reserved.') }}</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>