<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Visi Global Teknologi</title>
        <meta name="description" content="Visi Global Teknologi">
        <meta name="keywords" content="Visi Global Teknologi" />
        <meta name="robots" content="INDEX,FOLLOW">
        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Favicons - Place favicon.ico in the root directory -->
        <link rel="apple-touch-icon" sizes="192x192" href="{{ URL::asset('favicon_io/android-chrome-192x192.png') }}">
        <link rel="apple-touch-icon" sizes="512x512" href="{{ URL::asset('favicon_io/android-chrome-512x512.png') }}">
        <link rel="apple-touch-icon" sizes="16x16" href="{{ URL::asset('favicon_io/android-chrome-16x16.png') }}">
        <link rel="apple-touch-icon" sizes="32x32" href="{{ URL::asset('favicon_io/android-chrome-32x32.png') }}">
        <link rel="manifest" href="{{ URL::asset('techbiz-it/assets/img/favicons/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ URL::asset('techbiz-it/assets/img/favicons/ms-icon-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">

        <!--============================== Google Fonts ============================== -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600;700&family=Fira+Sans:wght@400;500&display=swap" rel="stylesheet">
        @include('layouts.techbiz-it.head-css')
    </head>
    <body>
        <!--============================== Preloader ==============================-->
        <div class="preloader">
            <button class="vs-btn preloaderCls">Cancel Preloader</button>
            <div class="preloader-inner">
                <span class="loader"></span>
            </div>
        </div>

        <!--============================== Mobile Menu ============================== -->
        <div class="vs-menu-wrapper">
            <div class="vs-menu-area text-center">
                <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
                <div class="mobile-logo">
                    <a href="{{ route('welcome') }}"><img src="{{ URL::asset('vgt/logo-visi.png') }}" alt="VisiGlobalTeknologi" class="logo"></a>
                </div>
                <div class="vs-mobile-menu">
                    <ul>
                        <li>
                            <a href="{{ route('welcome') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('about-us') }}">About Us</a>
                        </li>
                        <li>
                            <a href="#">Services</a>
                        </li>
                        <li>
                            <a href="#">News</a>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--============================== Header Area ==============================-->
        <header class="vs-header header-layout1">
            <div class="container">
                <div class="menu-top">
                    <div class="row justify-content-between align-items-center gx-sm-0">
                        <div class="col">
                            <div class="header-logo">
                                <a href="{{ route('welcome') }}"><img src="{{ URL::asset('vgt/logo-visi-18049.png') }}" alt="VisiGlobalTeknologi" class="logo"></a>
                            </div>
                        </div>
                        <div class="col-auto header-info ">
                            <div class="header-info_icon"><i class="fas fa-phone-alt"></i></div>
                            <div class="media-body">
                                <span class="header-info_label">Call Anytime 24/7</span>
                                <div class="header-info_link"><a href="tel:{{ $informationContents['company_phone_number'] }}">{{ $informationContents['company_phone_number'] }}</a></div>
                            </div>
                        </div>
                        <div class="col-auto header-info d-none d-lg-flex">
                            <div class="header-info_icon"><i class="fas fa-envelope"></i></div>
                            <div class="media-body">
                                <span class="header-info_label">Mail Us For Support</span>
                                <div class="header-info_link"><a href="mailto:{{ $informationContents['company_email'] }}">{{ $informationContents['company_email'] }}</a></div>
                            </div>
                        </div>
                        <div class="col-auto header-info d-none d-xl-flex">
                            <div class="header-info_icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="media-body">
                                <span class="header-info_label">Office Address</span>
                                <div class="header-info_link">{{ $informationContents['company_address'] }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sticky-wrapper">
                <div class="sticky-active">
                    <!-- Main Menu Area -->
                    <div class="container">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <nav class="main-menu menu-style1 d-none d-lg-block">
                                    <ul>
                                        <li>
                                            <a href="{{ route('welcome') }}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('about-us') }}">About Us</a>
                                        </li>
                                        <li>
                                            <a href="#">Services</a>
                                        </li>
                                        <li>
                                            <a href="#">News</a>
                                        </li>
                                        <li>
                                            <a href="#">Blog</a>
                                        </li>
                                        <li>
                                            <a href="#">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
        @include('layouts.techbiz-it.footer-homepage')
        <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>
        @include('layouts.techbiz-it.vendor-scripts')
    </body>
</html>
