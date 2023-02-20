<footer class="footer-wrapper footer-layout1" data-bg-src="{{ URL::asset('techbiz-it/assets/img/shape/bg-footer-1-1.jpg') }}">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm footer-info_group">
                    <div class="footer-info">
                        <div class="footer-info_icon"><i class="fal fa-map-marker-alt"></i></div>
                        <div class="media-body">
                            <span class="footer-info_label">Office Address</span>
                            <div class="footer-info_link">{{ $informationContents['company_address'] }}</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm footer-info_group">
                    <div class="footer-info">
                        <div class="footer-info_icon"><i class="fal fa-clock"></i></div>
                        <div class="media-body">
                            <span class="footer-info_label">Working Hours</span>
                            <div class="footer-info_link">Weekdays 9am - 6pm</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm footer-info_group">
                    <div class="footer-info">
                        <div class="footer-info_icon"><i class="fal fa-phone-volume"></i></div>
                        <div class="media-body">
                            <span class="footer-info_label">Contact Us</span>
                            <div class="footer-info_link"><a href="{{ $informationContents['company_email'] }}">{{ $informationContents['company_email'] }}</a><br><a href="{{ $informationContents['company_phone_number'] }}">{{ $informationContents['company_phone_number'] }}</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-lg-4 col-xl-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Follow Us</h3>
                        <div class="vs-widget-about">
                            <div class="footer-social">
                                <a href="{{ $informationContents['company_socmed_twitter'] }}"><i class="fab fa-twitter"></i></a>
                                <a href="{{ $informationContents['company_socmed_instagram'] }}"><i class="fab fa-instagram"></i></a>
                                <a href="{{ $informationContents['company_socmed_linkedin'] }}"><i class="fab fa-linkedin"></i></a>
                                <a href="{{ $informationContents['company_socmed_youtube'] }}"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 col-xl-auto">
                    <div class="widget widget_nav_menu  footer-widget">
                        <h3 class="widget_title">Links</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="{{ route('about-us') }}">About Us</a></li>
                                <li><a href="#">Our Mission</a></li>
                                <li><a href="#">Meet The Teams</a></li>
                                <li><a href="#">Our Projects</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 col-xl-auto">
                    <div class="widget widget_nav_menu  footer-widget">
                        <h3 class="widget_title">Explore</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="#">Latest News</a></li>
                                <li><a href="#">Latest Blogs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2023 <a class="text-white" href="{{ route('welcome') }}">Visi Global Teknologi</a></p>
        </div>
    </div>
</footer>
