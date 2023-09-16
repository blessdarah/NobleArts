<x-guest-layout>
    <x-page-header title="Service detail" />
    <section class="blog-details-area grey-bg pt-130 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 mb-40">
                    <div class="blogs__thumb--img white-bg pb-25">
                        <img src="{{ $service->imageUrl() }}" alt="service cover image">
                    </div>
                    <div class="blogs-details-content-area white-bg">
                        <div class="blogs blogs-03 white-bg wow fadeInUp2  animated" data-wow-delay=".1s"
                            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
                            <div class="blogs__thumb pos-rel mb-35">
                                <a class="blog-tag" href="blog-details.html">{{ $service->category->name }}</a>
                            </div>
                            <div class="blogs__content blogs-03__content">
                                <h3 class="mb-20">{{ $service->name }}</h3>
                                <div class="mb-20">{!! $service->description !!}</div>
                            </div>
                        </div>
                        <div class="blog-post-tag wow fadeInUp2 animated" data-wow-delay=".1s"
                            style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-7">
                                    <div class="post-tag-list mb-50">
                                        <span>Tags : </span>
                                        @foreach ($service->tags as $tag)
                                            <a href="#">{{ $tag->name }}</a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-5">
                                    <div class="post-share-icon text-md-right mb-50">
                                        <span>Share :</span>
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                        <a href="#"><i class="fab fa-behance"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right section --}}
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="blog-standard-right">
                        <div class="widget white-bg mb-10 wow fadeInUp2  animated" data-wow-delay=".1s"
                            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
                            <div class="widget-search-box">
                                <h4 class="widget-title mb-8">Search Here</h4>
                                <form class="subscribe-form" action="#">
                                    <input class="form-control" type="search" placeholder="Keywords">
                                    <button><i class="far fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="widget mb-10 wow fadeInUp2  animated" data-wow-delay=".1s"
                            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
                            <ul class="widget-list">
                                <li>Web Development <span class="f-right"><i class="far fa-chevron-right"></i></span>
                                </li>
                                <li>IT Consulting <span class="f-right"><i class="far fa-chevron-right"></i></span>
                                </li>
                                <li>Product Engineering <span class="f-right"><i
                                            class="far fa-chevron-right"></i></span></li>
                                <li>Product Marketing <span class="f-right"><i class="far fa-chevron-right"></i></span>
                                </li>
                                <li>Education <span class="f-right"><i class="far fa-chevron-right"></i></span></li>
                                <li>Medical &amp; Health <span class="f-right"><i
                                            class="far fa-chevron-right"></i></span></li>
                            </ul>
                        </div>
                        <div class="widget white-bg mb-10 pb-10 wow fadeInUp2  animated" data-wow-delay=".1s"
                            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
                            <h4 class="widget-title pt-10 mb-10 pl-35">Recent News</h4>
                            <ul class="post-list">
                                <li>
                                    <div class="post d-sm-flex align-items-center mb-20">
                                        <div class="post__img mr-20">
                                            <img src="{{ asset('assets/img/blog/14.jpg') }}" alt="">
                                        </div>
                                        <div class="post__text">
                                            <h5><a href="blog-details.html">Smaing Podcast Epis
                                                    Ode 15 With Phile</a></h5>
                                            <span><i class="far fa-chevron-right"></i> By Silva Hola</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="post d-sm-flex align-items-center mb-20">
                                        <div class="post__img mr-20">
                                            <img src="assets/img/blog/15.jpg" alt="">
                                        </div>
                                        <div class="post__text">
                                            <h5><a href="blog-details.html">Epis Smaing Podcast
                                                    Ode 15 With Phile</a></h5>
                                            <span><i class="far fa-chevron-right"></i> By Silva Hola</span>
                                        </div>
                                    </div>
                                </li>
                                <div class="post d-sm-flex align-items-center mb-20">
                                    <div class="post__img mr-20">
                                        <img src="assets/img/blog/17.jpg" alt="">
                                    </div>
                                    <div class="post__text">
                                        <h5><a href="blog-details.html">Smaing Podcast Epis
                                                Ode 15 With Phile</a></h5>
                                        <span><i class="far fa-chevron-right"></i> By Silva Hola</span>
                                    </div>
                                </div>
                                </li>
                            </ul>
                        </div>
                        <div class="widget white-bg mb-40 pb-10 wow fadeInUp2 animated" data-wow-delay=".1s"
                            style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                            <h4 class="widget-title pt-35 mb-10 pl-35">Popular Tags</h4>
                            <div class="tags">
                                <a href="#">Design</a>
                                <a href="#">Portfolio</a>
                                <a href="#">Energy</a>
                                <a href="#">Resume</a>
                                <a href="#">Gallery</a>
                                <a href="#">Renewable</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
