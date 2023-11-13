<x-guest-layout>
    @include('partials.hero')

    {{-- services --}}
    <div class="services-area3 ptb-100">
        <div class="container">
            <div class="section-title style2">
                <span>Our Services</span>
                <h2>We Offer Best Services</h2>
            </div>
            <div class="services-slider2 owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage"
                        style="transform: translate3d(-2193px, 0px, 0px); transition: all 0.8s ease 0s; width: 5265px;">
                        @foreach($services as $service)
                            <div class="owl-item cloned" style="width: 418.667px; margin-right: 20px;">
                                <div class="single-service-box">
                                    <div class="services-img">
                                        <img src="{{asset('/storage/' . $service->image)}}" alt="Image">
                                    </div>
                                    <div class="services-content1">
                                        <h3>{{$service->name}}</h3>
                                    </div>
                                    <div class="services-content2">
                                        <h3>{{$service->name}}</h3>
                                        <p>{{$service->summary}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i
                            class="fa-solid fa-angle-left"></i></button><button type="button" role="presentation"
                        class="owl-next"><i class="fa-solid fa-angle-right"></i></button>
                </div>
                <div class="owl-dots disabled"></div>
            </div>
        </div>
    </div>

    {{-- our features --}}
    <div class="features-area bg-f5f5f5 pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>What defines us</span>
                <h2>Our core values</h2>
            </div>
            <div class="row core-values">
                <div class="col-lg-3 col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="200">
                    <div class="single-features-card">
                        <div class="features-img">
                            <img src="{{asset('images/values/creativity.png')}}" alt="Image">
                        </div>
                        <h3>Creativity</h3>
                        <p>We believe in the power of creativity to inspire, engage, and transform. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="400">
                    <div class="single-features-card">
                        <div class="features-img">
                            <img src="{{asset('images/values/collaboration.png')}}" alt="Image">
                        </div>
                        <h3>Collaboration</h3>
                        <p>We believe in working together with our partners and communities to co-create solutions that address local needs and challenges.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="600">
                    <div class="single-features-card">
                        <div class="features-img">
                            <img src="{{asset('images/values/diversity.png')}}" alt="Image">
                        </div>
                        <h3>Diversity and Inclusion:</h3>
                        <p>We believe in creating a safe and inclusive space for all young people, regardless of their background or identity. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="800">
                    <div class="single-features-card">
                        <div class="features-img">
                            <img src="{{asset('images/values/empowerment.png')}}" alt="Image">
                        </div>
                        <h3>Empowerment</h3>
                        <p>We believe in empowering young people to take ownership of their ideas and projects, and to be leaders in their communities. </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="800">
                    <div class="single-features-card">
                        <div class="features-img">
                            <img src="{{asset('images/values/sustainability.png')}}" alt="Image">
                        </div>
                        <h3>Sustainability</h3>
                        <p>We believe in using resources responsibly and ensuring that our programs have a positive impact on the environment and the community.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="800">
                    <div class="single-features-card">
                        <div class="features-img">
                            <img src="{{asset('images/values/innovation.png')}}" alt="Image">
                        </div>
                        <h3>Innovation</h3>
                        <p>We believe in the creative and innovative potentials of young people to finding simple solutions to very complex problems and to power the change needed in their communities. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-area bg-f8f8f8 ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img pr-15">
                        <img src="assets/images/about/about-img-2.jpg" alt="Image">
                        <div class="small-img">
                            <img src="assets/images/about/about-img-3.jpg" alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content pl-15">
                        <div class="about-title">
                            <span>About Us</span>
                            <h2>We are good at what we do</h2>
                        </div>
                        <div class="experience">
                            <span>+{{ now()->format('Y') - 2013 }}</span>
                            <p>Years of experience in theatre, and film production.</p>
                        </div>
                        <div class="content">
                            <p>Founded in 2013, Noble Arts Entertainment is a youth-led organization based in Bamenda,
                                with a Branch in Yaoundé Cameroon. Noble Arts Entertainment uses the power of film to
                                transform and develop youths especially returnees of illegal migration and those
                                currently affected by the ongoing Anglophone crisis in the English-speaking regions of
                                Cameroon. </p>
                        </div>
                        <a href="{{ route('pages.about.index') }}" class="default-btn btn">Read More <i
                                class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="trailer-area bg-1 pt-100 pb-70 jarallax" data-jarallax="{&quot;speed&quot;: 0.3}"
        data-jarallax-original-styles="null"
        style="background-image: none; background-attachment: scroll; background-size: auto;">
        <div class="container-fluid">
            <div class="container">
                <div class="section-title style2 white-title">
                    <span>Our Movie Trailer</span>
                    <h2>Upcoming Movies</h2>
                </div>
            </div>
            <div class="trailer-slider owl-carousel owl-theme owl-loaded owl-drag">





                <div class="owl-stage-outer">
                    <div class="owl-stage"
                        style="transition: all 0.8s ease 0s; width: 5756px; transform: translate3d(-1106px, 0px, 0px);">
                        <div class="owl-item cloned" style="width: 422.75px; margin-right: 20px;">
                            <div class="single-trailer-card">
                                <div class="trailer-img">
                                    <img src="assets/images/trailer/trailer-img-3.jpg" alt="Image">
                                    <div class="play-btn">
                                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=6WQCJx_vEX4">
                                            <i class="fa-solid fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="trailer-content">
                                    <h3>Hueco Mundo</h3>
                                    <span>Official Trailer (HD)</span>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 422.75px; margin-right: 20px;">
                            <div class="single-trailer-card">
                                <div class="trailer-img">
                                    <img src="assets/images/trailer/trailer-img-4.jpg" alt="Image">
                                    <div class="play-btn">
                                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=6WQCJx_vEX4">
                                            <i class="fa-solid fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="trailer-content">
                                    <h3>Mostro Atom</h3>
                                    <span>Official Trailer (HD)</span>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 422.75px; margin-right: 20px;">
                            <div class="single-trailer-card">
                                <div class="trailer-img">
                                    <img src="assets/images/trailer/trailer-img-5.jpg" alt="Image">
                                    <div class="play-btn">
                                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=6WQCJx_vEX4">
                                            <i class="fa-solid fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="trailer-content">
                                    <h3>Hueco Mundo</h3>
                                    <span>Official Trailer (HD)</span>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned active" style="width: 422.75px; margin-right: 20px;">
                            <div class="single-trailer-card">
                                <div class="trailer-img">
                                    <img src="assets/images/trailer/trailer-img-6.jpg" alt="Image">
                                    <div class="play-btn">
                                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=6WQCJx_vEX4">
                                            <i class="fa-solid fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="trailer-content">
                                    <h3>Mostro Atom</h3>
                                    <span>Official Trailer (HD)</span>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active center" style="width: 422.75px; margin-right: 20px;">
                            <div class="single-trailer-card">
                                <div class="trailer-img">
                                    <img src="assets/images/trailer/trailer-img-2.jpg" alt="Image">
                                    <div class="play-btn">
                                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=6WQCJx_vEX4">
                                            <i class="fa-solid fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="trailer-content">
                                    <h3>Mostro Atom</h3>
                                    <span>Official Trailer (HD)</span>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 422.75px; margin-right: 20px;">
                            <div class="single-trailer-card">
                                <div class="trailer-img">
                                    <img src="assets/images/trailer/trailer-img-3.jpg" alt="Image">
                                    <div class="play-btn">
                                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=6WQCJx_vEX4">
                                            <i class="fa-solid fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="trailer-content">
                                    <h3>Hueco Mundo</h3>
                                    <span>Official Trailer (HD)</span>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 422.75px; margin-right: 20px;">
                            <div class="single-trailer-card">
                                <div class="trailer-img">
                                    <img src="assets/images/trailer/trailer-img-4.jpg" alt="Image">
                                    <div class="play-btn">
                                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=6WQCJx_vEX4">
                                            <i class="fa-solid fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="trailer-content">
                                    <h3>Mostro Atom</h3>
                                    <span>Official Trailer (HD)</span>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 422.75px; margin-right: 20px;">
                            <div class="single-trailer-card">
                                <div class="trailer-img">
                                    <img src="assets/images/trailer/trailer-img-5.jpg" alt="Image">
                                    <div class="play-btn">
                                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=6WQCJx_vEX4">
                                            <i class="fa-solid fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="trailer-content">
                                    <h3>Hueco Mundo</h3>
                                    <span>Official Trailer (HD)</span>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 422.75px; margin-right: 20px;">
                            <div class="single-trailer-card">
                                <div class="trailer-img">
                                    <img src="assets/images/trailer/trailer-img-6.jpg" alt="Image">
                                    <div class="play-btn">
                                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=6WQCJx_vEX4">
                                            <i class="fa-solid fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="trailer-content">
                                    <h3>Mostro Atom</h3>
                                    <span>Official Trailer (HD)</span>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 422.75px; margin-right: 20px;">
                            <div class="single-trailer-card">
                                <div class="trailer-img">
                                    <img src="assets/images/trailer/trailer-img-2.jpg" alt="Image">
                                    <div class="play-btn">
                                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=6WQCJx_vEX4">
                                            <i class="fa-solid fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="trailer-content">
                                    <h3>Mostro Atom</h3>
                                    <span>Official Trailer (HD)</span>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 422.75px; margin-right: 20px;">
                            <div class="single-trailer-card">
                                <div class="trailer-img">
                                    <img src="assets/images/trailer/trailer-img-3.jpg" alt="Image">
                                    <div class="play-btn">
                                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=6WQCJx_vEX4">
                                            <i class="fa-solid fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="trailer-content">
                                    <h3>Hueco Mundo</h3>
                                    <span>Official Trailer (HD)</span>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 422.75px; margin-right: 20px;">
                            <div class="single-trailer-card">
                                <div class="trailer-img">
                                    <img src="assets/images/trailer/trailer-img-4.jpg" alt="Image">
                                    <div class="play-btn">
                                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=6WQCJx_vEX4">
                                            <i class="fa-solid fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="trailer-content">
                                    <h3>Mostro Atom</h3>
                                    <span>Official Trailer (HD)</span>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 422.75px; margin-right: 20px;">
                            <div class="single-trailer-card">
                                <div class="trailer-img">
                                    <img src="assets/images/trailer/trailer-img-5.jpg" alt="Image">
                                    <div class="play-btn">
                                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=6WQCJx_vEX4">
                                            <i class="fa-solid fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="trailer-content">
                                    <h3>Hueco Mundo</h3>
                                    <span>Official Trailer (HD)</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i
                            class="fa-solid fa-angle-left"></i></button><button type="button" role="presentation"
                        class="owl-next"><i class="fa-solid fa-angle-right"></i></button></div>
                <div class="owl-dots disabled"></div>
            </div>
            <div class="counter-area pt-100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="single-counter-card">
                                <h1>
                                    <span class="odometer odometer-auto-theme" data-count="4356">
                                        <div class="odometer-inside"><span class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">4</span></span></span></span></span><span
                                                class="odometer-formatting-mark">,</span><span
                                                class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">3</span></span></span></span></span><span
                                                class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">5</span></span></span></span></span><span
                                                class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">6</span></span></span></span></span>
                                        </div>
                                    </span>
                                </h1>
                                <p>Satisfied Peoples</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="single-counter-card">
                                <h1>
                                    <span class="odometer odometer-auto-theme" data-count="7934">
                                        <div class="odometer-inside"><span class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">7</span></span></span></span></span><span
                                                class="odometer-formatting-mark">,</span><span
                                                class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">9</span></span></span></span></span><span
                                                class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">3</span></span></span></span></span><span
                                                class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">4</span></span></span></span></span>
                                        </div>
                                    </span>
                                </h1>
                                <p>Project Complate</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="single-counter-card">
                                <h1>
                                    <span class="odometer odometer-auto-theme" data-count="1120">
                                        <div class="odometer-inside"><span class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">1</span></span></span></span></span><span
                                                class="odometer-formatting-mark">,</span><span
                                                class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">1</span></span></span></span></span><span
                                                class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">2</span></span></span></span></span><span
                                                class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">0</span></span></span></span></span>
                                        </div>
                                    </span>
                                </h1>
                                <p>Win Award</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                            <div class="single-counter-card">
                                <h1>
                                    <span class="odometer odometer-auto-theme" data-count="3425">
                                        <div class="odometer-inside"><span class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">3</span></span></span></span></span><span
                                                class="odometer-formatting-mark">,</span><span
                                                class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">4</span></span></span></span></span><span
                                                class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">2</span></span></span></span></span><span
                                                class="odometer-digit"><span
                                                    class="odometer-digit-spacer">8</span><span
                                                    class="odometer-digit-inner"><span class="odometer-ribbon"><span
                                                            class="odometer-ribbon-inner"><span
                                                                class="odometer-value">5</span></span></span></span></span>
                                        </div>
                                    </span>
                                </h1>
                                <p>Films Trailrs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lines">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
        <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -100;"
            id="jarallax-container-7">
            <div
                style="background-position: 50% 50%; background-size: 100%; background-repeat: no-repeat; background-image: url(&quot;file:///Users/user/websites/Vidmo/templates.hibootstrap.com/vidmo/default/assets/images/trailer/trailer-img-1.jpg&quot;); position: absolute; top: 0px; left: 0px; width: 2743.86px; height: 1477.69px; overflow: hidden; pointer-events: none; margin-left: -496.432px; margin-top: -448.843px; visibility: visible; transform: translateY(10.6892px) translateZ(0px);">
            </div>
        </div>
    </div>

    <div class="team-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>Flims &amp; Movie Maker</span>
                <h2>Meet The Directors</h2>
            </div>
            <div class="team-slider owl-carousel owl-theme owl-loaded owl-drag">





                <div class="owl-stage-outer">
                    <div class="owl-stage"
                        style="transform: translate3d(-1316px, 0px, 0px); transition: all 0.8s ease 0s; width: 4277px;">
                        <div class="owl-item cloned" style="width: 309px; margin-right: 20px;">
                            <div class="single-team-card">
                                <div class="team-img">
                                    <img src="assets/images/team/team-img-2.jpg" alt="Image">
                                </div>
                                <div class="team-content">
                                    <h3>Juan Soponatime</h3>
                                    <span>Sub Driector</span>
                                    <div class="social-content">
                                        <ul>
                                            <li>
                                                <a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fa-brands fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.twitter.com/" target="_blank"><i
                                                        class="fa-brands fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://linkedin.com/?lang=en" target="_blank"><i
                                                        class="fa-brands fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://instagram.com/?lang=en" target="_blank"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 309px; margin-right: 20px;">
                            <div class="single-team-card">
                                <div class="team-img">
                                    <img src="assets/images/team/team-img-3.jpg" alt="Image">
                                </div>
                                <div class="team-content">
                                    <h3>Carrie R. Pigeon</h3>
                                    <span>Actor</span>
                                    <div class="social-content">
                                        <ul>
                                            <li>
                                                <a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fa-brands fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.twitter.com/" target="_blank"><i
                                                        class="fa-brands fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://linkedin.com/?lang=en" target="_blank"><i
                                                        class="fa-brands fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://instagram.com/?lang=en" target="_blank"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 309px; margin-right: 20px;">
                            <div class="single-team-card">
                                <div class="team-img">
                                    <img src="assets/images/team/team-img-4.jpg" alt="Image">
                                </div>
                                <div class="team-content">
                                    <h3>Aaron Spacemuseum</h3>
                                    <span>Manager</span>
                                    <div class="social-content">
                                        <ul>
                                            <li>
                                                <a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fa-brands fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.twitter.com/" target="_blank"><i
                                                        class="fa-brands fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://linkedin.com/?lang=en" target="_blank"><i
                                                        class="fa-brands fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://instagram.com/?lang=en" target="_blank"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 309px; margin-right: 20px;">
                            <div class="single-team-card">
                                <div class="team-img">
                                    <img src="assets/images/team/team-img-1.jpg" alt="Image">
                                </div>
                                <div class="team-content">
                                    <h3>Frank Senbeans</h3>
                                    <span>Driector</span>
                                    <div class="social-content">
                                        <ul>
                                            <li>
                                                <a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fa-brands fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.twitter.com/" target="_blank"><i
                                                        class="fa-brands fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://linkedin.com/?lang=en" target="_blank"><i
                                                        class="fa-brands fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://instagram.com/?lang=en" target="_blank"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 309px; margin-right: 20px;">
                            <div class="single-team-card">
                                <div class="team-img">
                                    <img src="assets/images/team/team-img-1.jpg" alt="Image">
                                </div>
                                <div class="team-content">
                                    <h3>Frank Senbeans</h3>
                                    <span>Driector</span>
                                    <div class="social-content">
                                        <ul>
                                            <li>
                                                <a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fa-brands fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.twitter.com/" target="_blank"><i
                                                        class="fa-brands fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://linkedin.com/?lang=en" target="_blank"><i
                                                        class="fa-brands fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://instagram.com/?lang=en" target="_blank"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 309px; margin-right: 20px;">
                            <div class="single-team-card">
                                <div class="team-img">
                                    <img src="assets/images/team/team-img-2.jpg" alt="Image">
                                </div>
                                <div class="team-content">
                                    <h3>Juan Soponatime</h3>
                                    <span>Sub Driector</span>
                                    <div class="social-content">
                                        <ul>
                                            <li>
                                                <a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fa-brands fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.twitter.com/" target="_blank"><i
                                                        class="fa-brands fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://linkedin.com/?lang=en" target="_blank"><i
                                                        class="fa-brands fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://instagram.com/?lang=en" target="_blank"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 309px; margin-right: 20px;">
                            <div class="single-team-card">
                                <div class="team-img">
                                    <img src="assets/images/team/team-img-3.jpg" alt="Image">
                                </div>
                                <div class="team-content">
                                    <h3>Carrie R. Pigeon</h3>
                                    <span>Actor</span>
                                    <div class="social-content">
                                        <ul>
                                            <li>
                                                <a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fa-brands fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.twitter.com/" target="_blank"><i
                                                        class="fa-brands fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://linkedin.com/?lang=en" target="_blank"><i
                                                        class="fa-brands fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://instagram.com/?lang=en" target="_blank"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 309px; margin-right: 20px;">
                            <div class="single-team-card">
                                <div class="team-img">
                                    <img src="assets/images/team/team-img-4.jpg" alt="Image">
                                </div>
                                <div class="team-content">
                                    <h3>Aaron Spacemuseum</h3>
                                    <span>Manager</span>
                                    <div class="social-content">
                                        <ul>
                                            <li>
                                                <a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fa-brands fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.twitter.com/" target="_blank"><i
                                                        class="fa-brands fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://linkedin.com/?lang=en" target="_blank"><i
                                                        class="fa-brands fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://instagram.com/?lang=en" target="_blank"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item" style="width: 309px; margin-right: 20px;">
                            <div class="single-team-card">
                                <div class="team-img">
                                    <img src="assets/images/team/team-img-1.jpg" alt="Image">
                                </div>
                                <div class="team-content">
                                    <h3>Frank Senbeans</h3>
                                    <span>Driector</span>
                                    <div class="social-content">
                                        <ul>
                                            <li>
                                                <a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fa-brands fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.twitter.com/" target="_blank"><i
                                                        class="fa-brands fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://linkedin.com/?lang=en" target="_blank"><i
                                                        class="fa-brands fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://instagram.com/?lang=en" target="_blank"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 309px; margin-right: 20px;">
                            <div class="single-team-card">
                                <div class="team-img">
                                    <img src="assets/images/team/team-img-1.jpg" alt="Image">
                                </div>
                                <div class="team-content">
                                    <h3>Frank Senbeans</h3>
                                    <span>Driector</span>
                                    <div class="social-content">
                                        <ul>
                                            <li>
                                                <a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fa-brands fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.twitter.com/" target="_blank"><i
                                                        class="fa-brands fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://linkedin.com/?lang=en" target="_blank"><i
                                                        class="fa-brands fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://instagram.com/?lang=en" target="_blank"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 309px; margin-right: 20px;">
                            <div class="single-team-card">
                                <div class="team-img">
                                    <img src="assets/images/team/team-img-2.jpg" alt="Image">
                                </div>
                                <div class="team-content">
                                    <h3>Juan Soponatime</h3>
                                    <span>Sub Driector</span>
                                    <div class="social-content">
                                        <ul>
                                            <li>
                                                <a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fa-brands fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.twitter.com/" target="_blank"><i
                                                        class="fa-brands fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://linkedin.com/?lang=en" target="_blank"><i
                                                        class="fa-brands fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://instagram.com/?lang=en" target="_blank"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 309px; margin-right: 20px;">
                            <div class="single-team-card">
                                <div class="team-img">
                                    <img src="assets/images/team/team-img-3.jpg" alt="Image">
                                </div>
                                <div class="team-content">
                                    <h3>Carrie R. Pigeon</h3>
                                    <span>Actor</span>
                                    <div class="social-content">
                                        <ul>
                                            <li>
                                                <a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fa-brands fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.twitter.com/" target="_blank"><i
                                                        class="fa-brands fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://linkedin.com/?lang=en" target="_blank"><i
                                                        class="fa-brands fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://instagram.com/?lang=en" target="_blank"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 309px; margin-right: 20px;">
                            <div class="single-team-card">
                                <div class="team-img">
                                    <img src="assets/images/team/team-img-4.jpg" alt="Image">
                                </div>
                                <div class="team-content">
                                    <h3>Aaron Spacemuseum</h3>
                                    <span>Manager</span>
                                    <div class="social-content">
                                        <ul>
                                            <li>
                                                <a href="https://www.facebook.com/" target="_blank"><i
                                                        class="fa-brands fa-facebook-f"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://www.twitter.com/" target="_blank"><i
                                                        class="fa-brands fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://linkedin.com/?lang=en" target="_blank"><i
                                                        class="fa-brands fa-linkedin-in"></i></a>
                                            </li>
                                            <li>
                                                <a href="https://instagram.com/?lang=en" target="_blank"><i
                                                        class="fa-brands fa-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i
                            class="fa-solid fa-angle-left"></i></button><button type="button" role="presentation"
                        class="owl-next"><i class="fa-solid fa-angle-right"></i></button></div>
                <div class="owl-dots disabled"></div>
            </div>
        </div>
    </div>

    <div class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Latest News</span>
                <h2>Articles Updated Daily</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="200">
                    <div class="single-blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/images/blog/blog-img-1.jpg"
                                    alt="Image"></a>
                            <div class="tag">
                                <a href="#">Film studio</a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="info">
                                <ul>
                                    <li>June 24, 2022</li>
                                    <li>By<a href="blog-grid.html">Admin</a></li>
                                </ul>
                            </div>
                            <h2><a href="blog-details.html">How To Edit A Film Score To Best Movie Serve Your Story</a>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="400">
                    <div class="single-blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/images/blog/blog-img-2.jpg"
                                    alt="Image"></a>
                            <div class="tag">
                                <a href="#">Film Maker</a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="info">
                                <ul>
                                    <li>June 25, 2022</li>
                                    <li>By<a href="blog-grid.html">Admin</a></li>
                                </ul>
                            </div>
                            <h2><a href="blog-details.html">Teaming Up With Josh Marston Producer For Effects</a></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="600">
                    <div class="single-blog-card">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="assets/images/blog/blog-img-3.jpg"
                                    alt="Image"></a>
                            <div class="tag">
                                <a href="#">Lifestyle</a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="info">
                                <ul>
                                    <li>June 26, 2022</li>
                                    <li>By<a href="blog-grid.html">Admin</a></li>
                                </ul>
                            </div>
                            <h2><a href="blog-details.html">Interview In London With Movie Slackers Producer
                                    Sebastian</a></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
