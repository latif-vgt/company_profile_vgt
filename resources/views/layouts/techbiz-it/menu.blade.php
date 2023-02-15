<!--============================== Mobile Menu ============================== -->
<div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
        <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ route('welcome') }}"><img width="280" src="{{ URL::asset('vgt/logo_visi.png') }}" alt="VisiGlobalTeknologi" class="logo"></a>
        </div>
        <div class="vs-mobile-menu">
            <ul>
                <li>
                    <a href="{{ route('welcome') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('about-us') }}">About Us</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!--============================== Header ============================== -->
<header class="vs-header header-layout1">
    <div class="container">
        <div class="menu-top">
            <div class="row justify-content-between align-items-center gx-sm-0">
                <div class="col">
                    <div class="header-logo">
                        <a href="index.html"><img width="280" src="{{ URL::asset('vgt/logo_visi.png') }}" alt="VisiGlobalTeknologi" class="logo"></a>
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
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
