@extends('layouts.techbiz-it.master')

@section('css')
@endsection

@section('content')
<!--============================== Breadcumb ============================== -->
<div class="breadcumb-wrapper " data-bg-src="{{ URL::asset('techbiz-it/assets/img/breadcumb/breadcumb-bg.jpg') }}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">About Us</h1>
        </div>
    </div>
</div>

<!--============================== About Us ==============================-->
<section class=" space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="mb-3 pb-3"><img src="{{ URL::asset('techbiz-it/assets/img/project/p-d-1-1.jpg') }}" alt="About Us Image"></div>
                <h2 class="h4">PT Visi Global Teknologi</h2>
                <p>{{ $informationContents['company_about_us'] }}</p>
            </div>
            <div class="col-lg-4 mt-30 mt-lg-0">
                <div class="project-box">
                    <h3 class="project-box__title h5">Company Information</h3>
                    <div class="project-box__item">
                        <div class="project-box__icon"><i class="fas fa-user"></i></div>
                        <div class="media-body">
                            <span class="project-box__label">Name:</span>
                            <h4 class="project-box__info">Visi Global Teknologi</h4>
                        </div>
                    </div>
                    <div class="project-box__item">
                        <div class="project-box__icon"><i class="fas fa-layer-group"></i></div>
                        <div class="media-body">
                            <span class="project-box__label">Category:</span>
                            <h4 class="project-box__info">{{ $informationContents['company_category'] }}</h4>
                        </div>
                    </div>
                    <div class="project-box__item">
                        <div class="project-box__icon"><i class="fas fa-calendar-alt"></i></div>
                        <div class="media-body">
                            <span class="project-box__label">Birth Date:</span>
                            <h4 class="project-box__info">{{ $informationContents['company_established'] }}</h4>
                        </div>
                    </div>
                    <div class="project-box__item">
                        <div class="project-box__icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="media-body">
                            <span class="project-box__label">Address:</span>
                            <h4 class="project-box__info">{{ $informationContents['company_address'] }}, Jakarta</h4>
                        </div>
                    </div>
                </div>
                <div class="project-contact" data-bg-src="{{ URL::asset('techbiz-it/assets/img/bg/sidebox-bg-1-1.jpg') }}">
                    <h3 class="project-contact__title h5">Need Any Help?</h3>
                    <p class="project-contact__text">Need Any Help, Call Us 24/7 For Support</p>
                    <p class="project-contact__info"><i class="fas fa-phone-alt"></i><a href="tel:{{ $informationContents['company_phone_number'] }}">{{ $informationContents['company_phone_number'] }}</a></p>
                    <p class="project-contact__info"><i class="fas fa-envelope"></i><a href="mailto:{{ $informationContents['company_email'] }}">{{ $informationContents['company_email'] }}</a></p>
                    <p class="project-contact__info"><i class="fas fa-map-marker-alt"></i>{{ $informationContents['company_address'] }}<br>Jakarta</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
@endsection
