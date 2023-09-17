<x-guest-layout>
    @include('partials.hero')
    <main>
        <section class="about-us-area about-area-02 pt-130 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-12">
                        <div class="about-img mb-30 wow fadeInUp2  animated" data-wow-delay=".1s"
                            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
                            <div class="about-img__thumb">
                                <img src="{{ asset('assets/img/about/02.jpg') }}" alt="">
                            </div>
                            <div class="about-img__style-text">
                                <img src="{{ asset('assets/img/about/02.png') }}" alt="">
                            </div>
                            <div class="about-img__style-dot d-none d-lg-inline-block">
                                <img src="{{ asset('assets/img/shape/03.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6 col-md-12">
                        <div class="about__wrapper about-wrapper-02 pl-70">
                            <div class="section-title text-left mb-50 wow fadeInUp2  animated" data-wow-delay=".1s"
                                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
                                <h6 class="left-line pl-75">Who We Are</h6>
                                <h2>Give Your Hand To<br>
                                    <span>The Right Place</span>
                                </h2>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa
                                    ntium doloremque laudantium, totam rem aperiam, eaque ipsa quaab
                                    inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                    ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                                    consequuntur
                                    magni dolores eos qui ratione</p>
                            </div>
                            <div class="inner-counters">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="counters d-flex mb-10 wow fadeInUp2  animated" data-wow-delay=".1s"
                                            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
                                            <div class="counters__icon mb-30"><i class="far fa-box-usd"></i></div>
                                            <div class="counters__content">
                                                <h3><span class="counter">3563</span>k</h3>
                                                <p>Global Partner</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="counters d-flex mb-20 pl-35 wow fadeInUp2  animated"
                                            data-wow-delay=".1s"
                                            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
                                            <div class="counters__icon mb-30"><i class="far fa-business-time"></i></div>
                                            <div class="counters__content">
                                                <h3><span class="counter">79562</span>k</h3>
                                                <p>Founding Amount</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="theme_btn theme_btn_bg" href="about.html" data-animation="fadeInUp2"
                                data-delay=".1s">explore more <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-guest-layout>
