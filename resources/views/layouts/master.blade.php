<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JasaIn</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link href="/css/theme.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">


    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm sticky-top p-0">
            <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
                <img src="/img/logo.png" alt="" height="36">
                <h2 class="ms-2 text-primary">JasaIn</h2>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav me-auto p-4 p-lg-0">
                    <a href="{{ route('carijasa') }}" class="nav-item nav-link @yield('menuServices')">Cari
                        Jasa</a>
                    <a href="{{ route('kontak') }}" class="nav-item nav-link @yield('menuContact')">Kontak</a>
                    <a href="{{ route('tentang') }}" class="nav-item nav-link @yield('menuAbout')">Tentang</a>
                    <a href="/dashboard" class="nav-item nav-link @yield('menuAbout')">Dashboard</a>

                </div>
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 sm:block">
                        @auth
                            <div class="nav-item dropdown @yield('menuProfile') me-5">
                                <a href="#" class="nav-link dropdown-toggle text-primary" data-bs-toggle="dropdown">
                                    <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"
                                        height="36" class="p-2 h-20 w-20 object-cover">{{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu fade-down m-0">
                                    <a href="{{ route('profile.show') }}" class="dropdown-item"
                                        :active="{{ request()->routeIs('profile.show') }}"><span
                                            class="fa fa-user-circle me-2"></span>Profil
                                    </a>

                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                        <a href="{{ route('api-tokens.index') }}" class="dropdown-item"
                                            :active="{{ request()->routeIs('api-tokens.index') }}">
                                            {{ __('API Tokens') }}
                                        </a>
                                    @endif

                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" class="dropdown-item"
                                            onclick="event.preventDefault(); this.closest('form').submit();"><span
                                                class="fa fa-sign-out-alt me-2"></span>{{ __('Keluar') }}
                                        </a>
                                    </form>
                                </div>
                            </div>

                            {{-- <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div> --}}
                            {{-- <a href="#" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">{{ Auth::user()->name }}<i
                                    class="fa fa-arrow-right ms-3"></i></a>
                            <div class="mt-3 space-y-1">
                                <!-- Account Management -->
                                <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                                    {{ __('Profile') }}
                                </x-jet-responsive-nav-link>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                                        {{ __('API Tokens') }}
                                    </x-jet-responsive-nav-link>
                                @endif

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        {{ __('Logout') }}
                                    </x-jet-responsive-nav-link>
                                </form>

                            </div> --}}
                        @else
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="btn btn-primary py-3 px-lg-5 d-none d-lg-block m-1">Masuk
                                    / Daftar<i class="fa fa-sign-in-alt ms-3"></i></a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </nav>
    </header>

    @yield('content')

    <footer>
        <div class="container-fluid bg-black text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-white mb-3">Quick Link</h4>
                        <a class="btn btn-link" href="">Tentang Kami</a>
                        <a class="btn btn-link" href="">Hubungi Kami</a>
                        <a class="btn btn-link" href="">FAQs & Bantuan</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-white mb-3">Kontak</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Universitas Negeri Malang</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">JasaIn</a>, All Right Reserved.
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br><br>
                            Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Bantuan</a>
                                <a href="">FAQs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/waypoints/waypoints.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
    @livewireScripts();

</body>

</html>
