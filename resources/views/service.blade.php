@extends('layouts.techbiz-it.master')

@section('css')
@endsection

@section('content')
<!--============================== Breadcumb ============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ URL::asset('techbiz-it/assets/img/breadcumb/breadcumb-bg.jpg') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Service</h1>
        </div>
    </div>
</div>

<!--============================== Service Area ==============================-->
<section class=" space-top space-extra-bottom">
    <div class="container wow fadeInUp" data-wow-delay="0.2s">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="service-style1 layout2">
                    <div class="service-bg" data-bg-src="{{ URL::asset('techbiz-it/assets/img/bg/sr-box-bg-1.jpg') }}"></div>
                    <div class="service-icon"><img src="{{ URL::asset('techbiz-it/assets/img/icon/sr-icon-1-1.png') }}" alt="Features"></div>
                    <h3 class="service-title h5"><a href="#">Cloud Services</a></h3>
                    <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products with business models</p>
                    <a href="#" class="vs-btn style3">Read More<i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-style1 layout2">
                    <div class="service-bg" data-bg-src="{{ URL::asset('techbiz-it/assets/img/bg/sr-box-bg-1.jpg') }}"></div>
                    <div class="service-icon"><img src="{{ URL::asset('techbiz-it/assets/img/icon/sr-icon-1-2.png') }}" alt="Features"></div>
                    <h3 class="service-title h5"><a href="#">UI Development</a></h3>
                    <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products with business models</p>
                    <a href="#" class="vs-btn style3">Read More<i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-style1 layout2">
                    <div class="service-bg" data-bg-src="{{ URL::asset('techbiz-it/assets/img/bg/sr-box-bg-1.jpg') }}"></div>
                    <div class="service-icon"><img src="{{ URL::asset('techbiz-it/assets/img/icon/sr-icon-1-3.png') }}" alt="Features"></div>
                    <h3 class="service-title h5"><a href="#">Digital Marketing</a></h3>
                    <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products with business models</p>
                    <a href="#" class="vs-btn style3">Read More<i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-style1 layout2">
                    <div class="service-bg" data-bg-src="{{ URL::asset('techbiz-it/assets/img/bg/sr-box-bg-1.jpg') }}"></div>
                    <div class="service-icon"><img src="{{ URL::asset('techbiz-it/assets/img/icon/sr-icon-1-4.png') }}" alt="Features"></div>
                    <h3 class="service-title h5"><a href="#">Web Development</a></h3>
                    <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products with business models</p>
                    <a href="#" class="vs-btn style3">Read More<i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-style1 layout2">
                    <div class="service-bg" data-bg-src="{{ URL::asset('techbiz-it/assets/img/bg/sr-box-bg-1.jpg') }}"></div>
                    <div class="service-icon"><img src="{{ URL::asset('techbiz-it/assets/img/icon/sr-icon-1-5.png') }}" alt="Features"></div>
                    <h3 class="service-title h5"><a href="#">Software Services</a></h3>
                    <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products with business models</p>
                    <a href="#" class="vs-btn style3">Read More<i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-style1 layout2">
                    <div class="service-bg" data-bg-src="{{ URL::asset('techbiz-it/assets/img/bg/sr-box-bg-1.jpg') }}></div>
                    <div class="service-icon"><img src="{{ URL::asset('techbiz-it/assets/img/icon/sr-icon-1-6.png') }}" alt="Features"></div>
                    <h3 class="service-title h5"><a href="#">Machine Learning</a></h3>
                    <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products with business models</p>
                    <a href="#" class="vs-btn style3">Read More<i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--============================== CTA Area ==============================-->
<section class="z-index-common space" data-bg-src="{{ URL::asset('techbiz-it/assets/img/bg/cta-bg-1-2.jpg') }}">
    <div class="container">
        <div class="row text-center text-lg-start align-items-center justify-content-between">
            <div class="col-lg-auto">
                <span class="sec-subtitle text-white">We are here to answer your questions 24/7</span>
                <h2 class="h1 sec-title cta-title1">Need A Consultation?</h2>
            </div>
            <div class="col-lg-auto">
                <a href="#" class="vs-btn">Get A Quote<i class="far fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!--============================== Work Process ==============================-->
<section class="process-wrap1 space-top space-extra-bottom" data-bg-src="{{ URL::asset('techbiz-it/assets/img/bg/process-bg-3-1.jpg') }}">
    <div class="container wow fadeInUp" data-wow-delay="0.2s">
        <div class="row justify-content-center text-center">
            <div class="col-xl-6">
                <div class="title-area">
                    <span class="sec-subtitle">What We Do For You</span>
                    <h2 class="sec-title3 h1">Our Specialization</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-md-4 col-xl-auto process-style2">
                <div class="process-arrow"><img src="{{ URL::asset('techbiz-it/assets/img/icon/process-arrow-2-1.png') }}" alt="arrow"></div>
                <div class="process-icon">
                    <img src="{{ URL::asset('techbiz-it/assets/img/icon/process-1-1.png') }}" alt="icon">
                    <span class="process-number">01</span>
                </div>
                <h3 class="process-title h5">Project Planning</h3>
                <p class="process-text">Internal or "organic" sources without turnkey growth strategies. Seamlessly promote client-centered</p>
            </div>
            <div class="col-md-4 col-xl-auto process-style2">
                <div class="process-arrow"><img src="{{ URL::asset('techbiz-it/assets/img/icon/process-arrow-2-1.png') }}" alt="arrow"></div>
                <div class="process-icon">
                    <img src="{{ URL::asset('techbiz-it/assets/img/icon/process-1-2.png') }}" alt="icon">
                    <span class="process-number">02</span>
                </div>
                <h3 class="process-title h5">Request A Meeting</h3>
                <p class="process-text">Internal or "organic" sources without turnkey growth strategies. Seamlessly promote client-centered</p>
            </div>
            <div class="col-md-4 col-xl-auto process-style2">
                <div class="process-arrow"><img src="{{ URL::asset('techbiz-it/assets/img/icon/process-arrow-2-1.png') }}" alt="arrow"></div>
                <div class="process-icon">
                    <img src="{{ URL::asset('techbiz-it/assets/img/icon/process-1-3.png') }}" alt="icon">
                    <span class="process-number">03</span>
                </div>
                <h3 class="process-title h5">Start Building</h3>
                <p class="process-text">Internal or "organic" sources without turnkey growth strategies. Seamlessly promote client-centered</p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
@endsection
