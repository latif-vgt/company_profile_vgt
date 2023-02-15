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
        <link rel="apple-touch-icon" sizes="192x192" href="favicon_io/android-chrome-192x192.png">
        <link rel="apple-touch-icon" sizes="512x512" href="favicon_io/android-chrome-512x512.png">
        <link rel="apple-touch-icon" sizes="16x16" href="favicon_io/favicon-16x16.png">
        <link rel="apple-touch-icon" sizes="32x32" href="favicon_io/favicon-32x32.png">

        <!--============================== Google Fonts ============================== -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Exo:wght@400;500;600;700&family=Fira+Sans:wght@400;500&display=swap" rel="stylesheet">
        @include('layouts.techbiz-it.head-css')
    </head>
    <body class="home-five">
        <!--============================== Preloader ==============================-->
        <div class="preloader  ">
            <button class="vs-btn preloaderCls">Cancel Preloader </button>
            <div class="preloader-inner">
                <span class="loader"></span>
            </div>
        </div>
        @yield('content')
        @include('layouts.techbiz-it.footer')
        @include('layouts.techbiz-it.vendor-scripts')
    </body>
</html>
