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
<header class="vs-header header-layout6">
    <div class="shape1"></div>
    <div class="shape2"></div>
    <div class="shape3"></div>
    <div class="container">
        <div class="row align-items-center justify-content-between gx-15">
            <div class="col-auto">
                <div class="header-logo">
                    <a href="{{ route('welcome') }}"><img width="280" src="{{ URL::asset('vgt/logo_visi.png') }}" alt="VisiGlobalTeknologi" class="logo"></a>
                </div>
            </div>
            <div class="col text-center">
                <nav class="main-menu menu-style5 d-none d-lg-block">
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
</header>
