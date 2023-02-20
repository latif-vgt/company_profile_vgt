@extends('layouts.techbiz-it.master-homepage')

@section('css')
@endsection
@section('content')
<!--============================== Hero Area ==============================-->
<section class="vs-hero-wrapper position-relative">
    <div class="vs-hero-carousel" data-height="980" data-container="1900" data-slidertype="responsive">
        <!-- Slide 1-->
        <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnszoom:in; kenburnsscale:1.1;">
            <img width="1920" height="980" src="{{ URL::asset('techbiz-it/assets/img/hero/hero-2-1.jpg') }}" class="ls-bg" alt="slider-bg" />
            <img width="664" height="522" src="{{ URL::asset('techbiz-it/assets/img/hero/hero-shape-2-2.png') }}" class="ls-l ls-hide-phone ls-img-layer d-hd-none" alt="image" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; top:463px; left:-6px;" data-ls="offsetxin:left; offsetyin:bottom; durationin:1500; delayin:1400; easingin:easeOutQuint; offsetxout:left; offsetyout:bottom;">
            <img width="1923" height="90" src="{{ URL::asset('techbiz-it/assets/img/hero/hero-shape-2-1.png') }}" class="ls-l ls-hide-phone ls-img-layer d-hd-none" alt="hero shape" style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; top:894px; left:-13px;" data-ls="easingin:easeOutQuint; static:forever;">
            <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; left:352px; top:674px; width:120px; height:120px; line-height:120px;" class="ls-l ls-play-btn ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="offsetxin:-100; durationin:1500; delayin:1000; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                <a href="https://www.youtube.com/watch?v=4QylOvVaE00" class="play-btn style4 popup-video"><i class="fas fa-play"></i></a>
            </div>
            <ls-layer style="font-size:24px; color:#ffffff; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:700; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; background-color:transparent; cursor:auto; left:502px; top:705px;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:100; durationin:1500; delayin:1100; easingin:easeOutQuint; bgcolorin:transparent; colorin:transparent; offsetxout:100; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                Watch Our Story
            </ls-layer>
            <div style="top:713px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:24px; width:1000px; height:28px;" class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer" data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                <div class="ls-btn-group justify-content-center">
                    <a href="{{ route('about-us') }}" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                    <a href="#" class="vs-btn style2 ls-hero-btn">READ MORE<i class="far fa-arrow-right"></i></a>
                </div>
            </div>
            <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; left:50%; top:145px; width:120px; height:120px; line-height:120px;" class="ls-l ls-play-btn ls-hide-desktop ls-hide-phone ls-html-layer" data-ls="offsetxin:-100; durationin:1500; delayin:1000; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; bgcolorout:transparent; colorout:transparent;">
                <a href="https://www.youtube.com/watch?v=4QylOvVaE00" class="play-btn style4 popup-video"><i class="fas fa-play"></i></a>
            </div>
            <div style="top:599px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:24px; width:1000px; height:28px;" class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer" data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                <div class="ls-btn-group justify-content-center">
                    <a href="{{ route('about-us') }}" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                    <a href="#" class="vs-btn style2 ls-hero-btn">READ MORE<i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--============================== Features Area ==============================-->
@if (count($ourServices) > 0)
<section class="z-index-common space-top" data-sec-pos="bottom" data-pos-amount="30px" data-pos-for="#aboutv2">
    <div class="container wow fadeInUp" data-wow-delay="0.2s">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xxl-3 text-center text-xxl-start">
                <div class="title-area">
                    <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Why Choose Us</span>
                    <h2 class="sec-title3 h1">Why People Choose Our Services</h2>
                </div>
            </div>
            <div class="col-xxl-9">
                <div class="row vs-carousel feature-slide2 text-center text-xxl-start" data-slide-show="3" data-md-slide-show="2">
                    @foreach ($ourServices as $key => $value)
                    <div class="col-xl-4">
                        <div class="feature-style2">
                            <div class="feature-icon"><img src="{{ asset('storage/service-icon') . '/' . $value['icon'] }}" alt="OurServices"></div>
                            <h3 class="feature-title h5"><a class="text-inherit" href="#">{{ $value['name'] }}</a></h3>
                            <p class="feature-text">{{ $value['description'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif

<!--============================== About Our Company ==============================-->
<section class="space" data-bg-src="{{ URL::asset('techbiz-it/assets/img/bg/ab-bg-2-1.jpg') }}" id="aboutv2">
    <div class="container">
        <div class="row gx-60">
            <div class=" col-xl-6 mb-50 mb-xl-0  wow fadeInUp" data-wow-delay="0.2s">
                <div class="img-box3">
                    <div class="img-1"><img src="{{ URL::asset('techbiz-it/assets/img/about/ab-2-1.jpg') }}" alt="VisiGlobalTeknologi"></div>
                    <div class="img-2"><img src="{{ URL::asset('techbiz-it/assets/img/about/ab-2-2.jpg') }}" alt="VisiGlobalTeknologi"></div>
                    <div class="award-box">
                        <div class="award-box__shape"></div>
                        <div class="award-box__icon"><i class="fal fa-award"></i></div>
                        <div class="media-body">
                            <p class="award-box__number">50+</p>
                            <div class="award-box__text">Awards we won</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 align-self-center text-center text-xl-start">
                <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>ABOUT OUR COMPANY</span>
                <h2 class="sec-title3 h1">Connecting people & technology</h2>
                <p class="mb-4 pb-2 pe-xl-5">Technology can inspire innovation by providing new tools and ways of thinking that can help people solve problems and think creatively.</p>
                <div class="row gx-60 mb-4 pb-1 gy-2 text-start justify-content-center justify-content-xl-start">
                    <div class="col-auto">
                        <div class="about-media">
                            <div class="about-media__icon"><img src="{{ URL::asset('techbiz-it/assets/img/icon/ab-ic-2-1.png') }}" alt="icon"></div>
                            <div class="media-body">
                                <h3 class="about-media__title h6">Provide Skills<br>Services</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="about-media">
                            <div class="about-media__icon"><img src="{{ URL::asset('techbiz-it/assets/img/icon/ab-ic-2-2.png') }}" alt="icon"></div>
                            <div class="media-body">
                                <h3 class="about-media__title h6">Urgent Support<br>For Clients</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="vs-btn">Get A Quote<i class="far fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!--============================== Team Area ==============================-->
@if (count($bodTeams) > 0)
<section class="space">
    <div class="container wow fadeInUp" data-wow-delay="0.2s">
        <div class="row justify-content-center text-center">
            <div class="col-xl-6">
                <div class="title-area">
                    <span class="sec-subtitle">Great Team Members</span>
                    <h2 class="sec-title3 h1">We Have Expert Team</h2>
                </div>
            </div>
        </div>
        <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">
            @foreach ($bodTeams as $key => $value)
            <div class="col-xl-4">
                <div class="team-style2">
                    <div class="team-img">
                        <div class="team-shape1"></div>
                        <div class="team-shape2"></div>
                        <a href="#"><img src="{{ asset('storage/company-people') . '/' . $value['photo'] }}" alt="image"></a>
                        <div class="team-social">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3 class="team-title h5"><a class="text-inherit" href="#">{{ $value['name'] }}</a></h3>
                        <p class="team-degi">{{ $value['role_company_people']['name'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!--============================== Latest Project ==============================-->
<section class="space-top">
    <div class="container wow fadeInUp" data-wow-delay="0.2s">
        <div class="row justify-content-between">
            <div class="col-lg-auto text-center text-lg-start">
                <div class="title-area">
                    <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Our LATEST PROJECTS</span>
                    <h2 class="sec-title3 h1">Our Successful Projects</h2>
                </div>
            </div>
            <div class="col-auto d-none d-lg-block">
                <div class="sec-btns">
                    <button class="vs-btn style4" data-slick-prev="#projectslide1"><i class="far fa-arrow-left"></i>Prev</button>
                    <button class="vs-btn style4" data-slick-next="#projectslide1">Next<i class="far fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid overflow-hidden px-xxl-0">
        <div class="row vs-carousel" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" id="projectslide1">
            <div class="col-xl-3">
                <div class="project-style2">
                    <div class="project-img">
                        <img src="{{ URL::asset('techbiz-it/assets/img/gallery/gal-1-1.jpg') }}" alt="project">
                        <div class="project-shape"></div>
                        <a href="{{ URL::asset('techbiz-it/assets/img/gallery/gal-1-1.jpg') }}" class="popup-image icon-btn style3"><i class="far fa-search"></i></a>
                    </div>
                    <div class="project-content">
                        <span class="project-label">IT Solution</span>
                        <h3 class="project-title h5"><a href="#" class="text-reset">Digital Marketing</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="project-style2">
                    <div class="project-img">
                        <img src="{{ URL::asset('techbiz-it/assets/img/gallery/gal-1-2.jpg') }}" alt="project">
                        <div class="project-shape"></div>
                        <a href="{{ URL::asset('techbiz-it/assets/img/gallery/gal-1-2.jpg') }}" class="popup-image icon-btn style3"><i class="far fa-search"></i></a>
                    </div>
                    <div class="project-content">
                        <span class="project-label">App Solution</span>
                        <h3 class="project-title h5"><a href="#" class="text-reset">App Development</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="project-style2">
                    <div class="project-img">
                        <img src="{{ URL::asset('techbiz-it/assets/img/gallery/gal-1-3.jpg') }}" alt="project">
                        <div class="project-shape"></div>
                        <a href="{{ URL::asset('techbiz-it/assets/img/gallery/gal-1-3.jpg') }}" class="popup-image icon-btn style3"><i class="far fa-search"></i></a>
                    </div>
                    <div class="project-content">
                        <span class="project-label">UI Design</span>
                        <h3 class="project-title h5"><a href="#" class="text-reset">Portfolio Design</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="project-style2">
                    <div class="project-img">
                        <img src="{{ URL::asset('techbiz-it/assets/img/gallery/gal-1-4.jpg') }}" alt="project">
                        <div class="project-shape"></div>
                        <a href="{{ URL::asset('techbiz-it/assets/img/gallery/gal-1-4.jpg') }}" class="popup-image icon-btn style3"><i class="far fa-search"></i></a>
                    </div>
                    <div class="project-content">
                        <span class="project-label">Cyber Security</span>
                        <h3 class="project-title h5"><a href="#" class="text-reset">Database checkup</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-3">
                <div class="project-style2">
                    <div class="project-img">
                        <img src="{{ URL::asset('techbiz-it/assets/img/gallery/gal-1-5.jpg') }}" alt="project">
                        <div class="project-shape"></div>
                        <a href="{{ URL::asset('techbiz-it/assets/img/gallery/gal-1-5.jpg') }}" class="popup-image icon-btn style3"><i class="far fa-search"></i></a>
                    </div>
                    <div class="project-content">
                        <span class="project-label">Affiliate</span>
                        <h3 class="project-title h5"><a href="#" class="text-reset">Digital Marketing</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--============================== Appointment Area ==============================-->
<br/>
<section data-bg-src="{{ URL::asset('techbiz-it/assets/img/bg/appoin-bg-1-1.jpg') }}">
    <div class="container">
        <div class="row gx-60">
            <div class="col-xl-6 align-self-center space wow fadeInUp" data-wow-delay="0.2s">
                <span class="sec-subtitle text-white">Make An Appointment</span>
                <h2 class="sec-title3 h1 text-white">We Provide Best Advice For Your Future</h2>
                <hr class="hr-style1">
                <p class="mb-4 mt-1 pb-3 text-white">Compellingly mesh cross-platform portals through functional human capital world-class architectures for orthogonal initiatives. Assertively benchmark visionary quality vectors after covalent e-tailers. Intrinsicly</p>
                <div class="row gy-30">
                    <div class="col-md-6">
                        <div class="contact-media">
                            <div class="contact-media__icon"><i class="fal fa-phone-alt"></i></div>
                            <div class="media-body">
                                <span class="contact-media__label">24/7 Call Available</span>
                                <p class="contact-media__info"><a href="tel:{{ $informationContents['company_phone_number'] }}">{{ $informationContents['company_phone_number'] }}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-media">
                            <div class="contact-media__icon"><i class="fal fa-envelope"></i></div>
                            <div class="media-body">
                                <span class="contact-media__label">Write a Quick mail</span>
                                <p class="contact-media__info"><a href="mailto:{{ $informationContents['company_email'] }}">{{ $informationContents['company_email'] }}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-media">
                            <div class="contact-media__icon"><i class="fal fa-map-marker-alt"></i></div>
                            <div class="media-body">
                                <span class="contact-media__label">Visit Central Office</span>
                                <p class="contact-media__info">{{ $informationContents['company_address'] }}<br> Jakarta</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-media">
                            <div class="contact-media__icon"><i class="fal fa-map-marker-alt"></i></div>
                            <div class="media-body">
                                <span class="contact-media__label">Visit Our Workshop</span>
                                <p class="contact-media__info">{{ $informationContents['workshop_address'] }}<br>Jakarta</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 form-wrap1">
                <form action="#" class="form-style1">
                    <h2 class="form-title h4">Make An Appointment</h2>
                    <div class="form-group">
                        <input type="text" placeholder="Enter Full Name">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Appointment Subject">
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="mm/dd/yyyy">
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Write a short message..."></textarea>
                    </div>
                    <div class="form-btn">
                        <button disabled class="vs-btn style5">Make An Appointment<i class="far fa-arrow-right"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--============================== Client Section ==============================-->
<div class=" space" data-bg-src="{{ URL::asset('techbiz-it/assets/img/bg/brand-bg-2-1.jpg') }}">
    <div class="container">
        <div class="row vs-carousel text-center" data-slide-show="5" data-md-slide-show="3" data-sm-slide-show="2" data-xs-slide-show="2">
            @if (count($clients) > 0)
                @foreach ($clients as $item)
                    <div class="col-auto"><img width="100" height="50" src="{{ \Storage::disk('client-logo')->url($item->logo) }}" alt="Client"></div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection

@section('script')
@endsection
