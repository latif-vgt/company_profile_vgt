<footer class="footer-wrapper footer-layout5" data-bg-src="{{ URL::asset('techbiz-it/assets/img/bg/footer-5-1.png') }}">
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <div class="vs-widget-about">
                            <div class="footer-logo">
                                <a href="{{ route('welcome') }}"><img src="{{ URL::asset('techbiz-it/assets/img/logo.png') }}" alt="TechBiz" class="logo"></a>
                            </div>
                            <div class="footer-info-list">
                                <p class="info"><i class="fal fa-map-marker-alt"></i>{{ $informationContents['company_address'] }}</p>
                                <p class="info"><i class="fal fa-envelope"></i><a href="mailto:{{ $informationContents['company_email'] }}">{{ $informationContents['company_email'] }}</a></p>
                                <p class="info"><i class="fal fa-phone-alt"></i><a href="tel:+{{ $informationContents['company_phone_number'] }}">{{ $informationContents['company_phone_number'] }}</a></p>
                            </div>
                            <div class="footer-social style2">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu  footer-widget">
                        <h3 class="widget_title">Useful Links</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="#">Our Company</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Latest News</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget  footer-widget">
                        <h4 class="widget_title">Connect With Us</h4>
                        <form class="newsletter-form2">
                            <p class="form_text">Subscribe Our Newsletter For Getting Quick Updates</p>
                            <input class="form-control" type="email" placeholder="Your Email Address">
                            <button type="submit" class="vs-btn mask-style1">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2023 <a href="{{ route('welcome') }}">Visi Global Teknologi</a></p>
        </div>
    </div>
</footer>

<!-- Scroll To Top -->
<a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>
