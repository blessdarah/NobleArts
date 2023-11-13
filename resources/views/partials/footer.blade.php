<footer class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget logo-area">
                    <div class="logo">
                        <a href="{{ route('pages.welcome') }}">
                            {{-- <img src="assets/images/white-logo.png" alt="Image"> --}}
                            <h1 class="text-white">NAEC</h1>
                        </a>
                    </div>
                    <p>{{ setting('common.about') }}</p>
                    <div class="social-content">
                        <ul>
                            <li>
                                <a href="{{ setting('social.facebook') }}" target="_blank"><i
                                        class="fa-brands fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="{{ setting('social.twitter') }}" target="_blank"><i
                                        class="fa-brands fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="{{ setting('social.linkedin') }}" target="_blank"><i
                                        class="fa-brands fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="{{ setting('social.instagram') }}" target="_blank"><i
                                        class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="{{ setting('social.youtube') }}" target="_blank"><i
                                        class="fa-brands fa-youtube"></i></a>
                            </li>
                            <li>
                                <a href="{{ setting('social.tiktok') }}" target="_blank"><i
                                        class="fa-brands fa-tiktok"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget quick-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            <a href="#">About Us</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            <a href="{{ route('pages.services') }}">Works</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            <a href="#">Videos</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            <a href="{{ route('pages.blog') }}">Blog</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-arrow-right"></i>
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget instagram-content">
                    <h3>Instagram</h3>
                    <div class="row g-0">
                        <div class="col-4">
                            <div class="single-instagram-box">
                                <img src="assets/images/instagram/instagram-img-1.jpg" alt="Image">
                                <a href="{{ setting('instagram.post1') }}" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="single-instagram-box">
                                <img src="assets/images/instagram/instagram-img-2.jpg" alt="Image">
                                <a href="{{ setting('instagram.post2') }}" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="single-instagram-box">
                                <img src="assets/images/instagram/instagram-img-3.jpg" alt="Image">
                                <a href="{{ setting('instagram.post3') }}" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="single-instagram-box">
                                <img src="assets/images/instagram/instagram-img-4.jpg" alt="Image">
                                <a href="{{ setting('instagram.post4') }}n" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="single-instagram-box">
                                <img src="assets/images/instagram/instagram-img-5.jpg" alt="Image">
                                <a href="{{ setting('instagram.post5') }}" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="single-instagram-box">
                                <img src="assets/images/instagram/instagram-img-6.jpg" alt="Image">
                                <a href="{{ setting('instagram.post6') }}" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-footer-widget get-in-touch">
                    <h3>Get In Touch</h3>
                    <ul>
                        <li>
                            <i class="fa-solid fa-phone"></i>
                            <span>Phone</span>
                            <a href="tel:{{ setting('common.telephone') }}">{{ setting('common.telephone') }}</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-envelope"></i>
                            <span>Email</span>
                            <a href="mailto:{{ setting('common.email') }}">
                                <span>{{ setting('common.email') }}</span>
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Address</span>
                            <p>{{ setting('common.address') }}</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shape">
            <img src="assets/images/instagram/shape.png" class="shape-1" alt="Image">
            <img src="assets/images/instagram/shape.png" class="shape-2" alt="Image">
        </div>
    </div>
</footer>


<div class="copy-right-area">
    <div class="container">
        <p>© <span>NAEC</span> {{ now()->format('Y') }}</p>
    </div>
</div>


<div class="go-top">
    <i class="fa-solid fa-arrow-turn-up"></i>
    <i class="fa-solid fa-arrow-turn-up"></i>
</div>
