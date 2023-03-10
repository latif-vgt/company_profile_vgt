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
@if (count($ourServices) > 0)
<section class=" space-top space-extra-bottom">
    <div class="container wow fadeInUp" data-wow-delay="0.2s">
        <div class="row">
            @foreach ($ourServices as $key => $value)
            <div class="col-md-6 col-lg-4">
                <div class="service-style1 layout2">
                    <div class="service-bg" data-bg-src="{{ URL::asset('techbiz-it/assets/img/bg/sr-box-bg-1.jpg') }}"></div>
                    <div class="service-icon"><img src="{{ \Storage::disk('service-icon')->url($value['icon']) }}" alt="Features"></div>
                    <h3 class="service-title h5"><a href="#">{{ $value['name'] }}</a></h3>
                    <p class="service-text">{{ $value['description'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

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

<!--============================== Testimonial Area ==============================-->
<section class=" space-top space-extra-bottom">
    <div class="container wow fadeInUp" data-wow-delay="0.2s">
        <div class="row justify-content-between">
            <div class="col-lg-auto text-center text-lg-start">
                <div class="title-area">
                    <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Our Best Review???s</span>
                    <h2 class="sec-title3 h1">Customer???s Feedback</h2>
                </div>
            </div>
            <div class="col-auto d-none d-lg-block">
                <div class="sec-btns">
                    <button class="vs-btn style4" data-slick-prev="#testislide1"><i class="far fa-arrow-left"></i>Prev</button>
                    <button class="vs-btn style4" data-slick-next="#testislide1">Next<i class="far fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2" id="testislide1">
            <div class="col-xl-4">
                <div class="testi-style1">
                    <div class="testi-icon"><i class="fal fa-quote-right"></i></div>
                    <p class="testi-text">???Contrary to popular belief, Lorem Ipsum is not simply random text over 2000 years old. Richard McClintock???</p>
                    <h3 class="testi-name h6">David Smith</h3>
                    <div class="testi-degi">SEO Customer</div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="testi-style1">
                    <div class="testi-icon"><i class="fal fa-quote-right"></i></div>
                    <p class="testi-text">???Engineer resource maximizing whereas human high quality scenarios via client incentivize next generatio???</p>
                    <h3 class="testi-name h6">Floki Gustaf</h3>
                    <div class="testi-degi">UI Customer</div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="testi-style1">
                    <div class="testi-icon"><i class="fal fa-quote-right"></i></div>
                    <p class="testi-text">???There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration???</p>
                    <h3 class="testi-name h6">Jesper Karl</h3>
                    <div class="testi-degi">SEO Customer</div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="testi-style1">
                    <div class="testi-icon"><i class="fal fa-quote-right"></i></div>
                    <p class="testi-text">???Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable???</p>
                    <h3 class="testi-name h6">Luis Luka</h3>
                    <div class="testi-degi">Dev Customer</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
@endsection
