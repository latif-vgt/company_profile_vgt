<footer class="footer-wrapper footer-layout2" data-bg-src="{{ URL::asset('techbiz-it/assets/img/bg/footer-bg-2-1.jpg') }}">
    <div class="footer-top">
        <div class="container">
            <div class="row align-items-center justify-content-between gy-30">
                <div class="col-sm-auto">
                    <div class="footer-top-logo">
                        <a href="{{ route('welcome') }}"><img src="{{ URL::asset('techbiz-it/assets/img/logo-white.png') }}" alt="VisiGlobalTeknologi" class="logo"></a>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="footer-social">
                        <span class="social-title">Follow Us On:</span>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-behance"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between gx-80">
                <div class="col-md-6 col-lg-4 col-xl-auto col-xxl order-2 order-lg-1">
                    <div class="widget widget_nav_menu  footer-widget">
                        <h3 class="widget_title">Quick Links</h3>
                        <div class="menu-all-pages-container footer-links">
                            <ul class="menu">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Our Mission</a></li>
                                <li><a href="#">Meet The Teams</a></li>
                                <li><a href="#">Our Projects</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Our Mission</a></li>
                                <li><a href="#">Meet The Teams</a></li>
                                <li><a href="#">Our Projects</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xl-auto order-1 order-lg-2">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">About Company</h3>
                        <div class="vs-widget-about">
                            <p class="footer-text">Continually evolve worldwide vortals rather than process centric human capital.wide benefits via quality niches provide access without plagiarize collaborative alignments after</p>
                            <form action="#" class="footer-newsletter">
                                <input type="email" placeholder="Enter Email Address">
                                <button disabled type="submit" class="vs-btn style2">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-auto order-3">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Working Hours</h3>
                        <div class="footer-schedule">
                            <table>
                                <tbody>
                                    <tr>
                                        <th>Mon - Fri : </th>
                                        <td>09:00 AM - 05:00 PM</td>
                                    </tr>
                                    <tr>
                                        <th>Weekend : </th>
                                        <td>Closed</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="footer-number">
                            <h4 class="title h6">Need Help? Contact Number</h4>
                            <a href="tel:{{ $informationContents['company_phone_number'] }}" class="info">{{ $informationContents['company_phone_number'] }}</a>
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
