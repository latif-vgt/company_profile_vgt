@extends('layouts.techbiz-it.master')

@section('css')
@endsection

@include('layouts.techbiz-it.menu')
@section('content')
<!--============================== Breadcumb ============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ URL::asset('techbiz-it/assets/img/breadcumb/breadcumb-bg.jpg') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">About Us</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="{{ route('welcome') }}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--============================== Service Area ==============================-->
<div>
    <div class="container space-top space-extra-bottom">
        <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2" data-arrows="true">
            <div class="col-md-6 col-lg-4">
                <div class="service-style1 layout3">
                    <div class="service-bg" data-bg-src="{{ URL::asset('techbiz-it/assets/img/bg/sr-box-bg-1.jpg') }}"></div>
                    <div class="service-top">
                        <div class="service-icon"><img src="{{ URL::asset('techbiz-it/assets/img/icon/sr-icon-1-1.png') }}" alt="Features"></div>
                        <span class="service-number">01</span>
                    </div>
                    <h3 class="service-title h5"><a href="#">Our Missions</a></h3>
                    <p class="service-text">Cardinate premier technology without sustainable leadership work...</p>
                    <a href="#" class="link-btn">Read More<i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-style1 layout3">
                    <div class="service-bg" data-bg-src="{{ URL::asset('techbiz-it/assets/img/bg/sr-box-bg-1.jpg') }}"></div>
                    <div class="service-top">
                        <div class="service-icon"><img src="{{ URL::asset('techbiz-it/assets/img/icon/sr-icon-1-2.png') }}" alt="Features"></div>
                        <span class="service-number">02</span>
                    </div>
                    <h3 class="service-title h5"><a href="#">Our Services</a></h3>
                    <p class="service-text">Cardinate premier technology without sustainable leadership work...</p>
                    <a href="#" class="link-btn">Read More<i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-style1 layout3">
                    <div class="service-bg" data-bg-src="{{ URL::asset('techbiz-it/assets/img/bg/sr-box-bg-1.jpg') }}"></div>
                    <div class="service-top">
                        <div class="service-icon"><img src="{{ URL::asset('techbiz-it/assets/img/icon/sr-icon-1-3.png') }}" alt="Features"></div>
                        <span class="service-number">03</span>
                    </div>
                    <h3 class="service-title h5"><a href="#">Our Clients</a></h3>
                    <p class="service-text">Cardinate premier technology without sustainable leadership work...</p>
                    <a href="#" class="link-btn">Read More<i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-style1 layout3">
                    <div class="service-bg" data-bg-src="{{ URL::asset('techbiz-it/assets/img/bg/sr-box-bg-1.jpg') }}"></div>
                    <div class="service-top">
                        <div class="service-icon"><img src="{{ URL::asset('techbiz-it/assets/img/icon/sr-icon-1-4.png') }}" alt="Features"></div>
                        <span class="service-number">04</span>
                    </div>
                    <h3 class="service-title h5"><a href="#">Our Works</a></h3>
                    <p class="service-text">Cardinate premier technology without sustainable leadership work...</p>
                    <a href="#" class="link-btn">Read More<i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection
