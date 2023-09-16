<x-guest-layout>
    <x-page-header title="Blog detail" />
    <section class="blog-details-area grey-bg pt-130 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 mb-40">
                    <div class="blogs__thumb--img white-bg pb-25">
                        <img src="{{ asset($post->image) }}" alt="blog post image">
                    </div>
                    <div class="blogs-details-content-area white-bg">
                        <div class="blogs blogs-03 white-bg wow fadeInUp2  animated" data-wow-delay=".1s"
                            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
                            <div class="blogs__thumb pos-rel mb-35">
                                <a class="blog-tag" href="blog-details.html">{{ $post->category->name }}</a>
                            </div>
                            <div class="blogs__content blogs-03__content">
                                <h3 class="mb-20">
                                    <a href="blog-details.html">{{ $post->title }}</a>
                                </h3>
                                <div class="blogs__content--meta">
                                    <span><i class="far fa-user-circle"></i> By Somalia Doe</span>
                                    <span><i class="far fa-calendar-alt"></i>
                                        {{ $post->created_at->format('d m Y') }}</span>
                                    {{-- <span><i class="far fa-comment"></i> Comment (03)</span> --}}
                                    {{-- <span><i class="far fa-heart"></i> Like (1K)</span> --}}
                                </div>
                                <div class="mb-20">
                                    {!! $post->detail !!}
                                </div>
                            </div>
                        </div>
                        <div class="blog-post-tag wow fadeInUp2 animated" data-wow-delay=".1s"
                            style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-7">
                                    <div class="post-tag-list mb-50">
                                        <span>Tags : </span>
                                        @foreach ($post->tags as $tag)
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
                        <div class="author grey-bg mb-50 wow fadeInUp2 animated" data-wow-delay=".1s"
                            style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                            <div class="author__avatar">
                                <img src="{{ asset('assets/img/blog/06.png') }}" alt="">
                            </div>
                            <div class="author__text">
                                <h4>Eugene A. Pearson</h4>
                                <p>But must explain to you how all this mistake idea deounciasure and praising pain was
                                    born and will give you comete account the system</p>
                                <div class="post-share-icon">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-post-area mb-45  wow fadeInUp2 animated" data-wow-delay=".1s"
                            style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                            <div class="row">
                                <div class="col-xl-6 col-lg-12 col-md-12">
                                    <div class="post d-sm-flex align-items-center mb-50">
                                        <div class="post__img mr-20">
                                            <img src="{{ asset('assets/img/blog/19.jpg') }}" alt="">
                                        </div>
                                        <div class="post__text">
                                            <h5><a href="blog-details.html">Mixing Tangible Intan
                                                    Interfaces Using</a></h5>
                                            <div class="post__text--meta">
                                                <span><i class="far fa-map-marker-alt"></i> Somlia</span>
                                                <span><i class="far fa-calendar-alt"></i> 05 Aug 2020</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-12">
                                    <div class="post d-sm-flex align-items-center mb-50">
                                        <div class="post__img mr-20">
                                            <img src="assets/img/blog/20.jpg" alt="">
                                        </div>
                                        <div class="post__text">
                                            <h5><a href="blog-details.html">Mixing Tangible Intan
                                                    Interfaces Using</a></h5>
                                            <div class="post__text--meta">
                                                <span><i class="far fa-map-marker-alt"></i> Somlia</span>
                                                <span><i class="far fa-calendar-alt"></i> 05 Aug 2020</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- TODO: Remove d-none to show comments feature  --}}
                        <div class="d-none post-comments mb-50 wow fadeInUp2 animated" data-wow-delay=".1s"
                            style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                            <h4 class="comments-title mb-40">People’s Comments</h4>
                            <ul class="latest-comments">
                                <li>
                                    <div class="comments-box">
                                        <div class="comments__avatar">
                                            <img src="{{ asset('assets/img/blog/07.png') }}" alt="">
                                        </div>
                                        <div class="comments__content fix">
                                            <h5>David Angel Makel</h5>
                                            <span>IT Consultant</span>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content page looking at its layout point of using normal</p>
                                            <a class="com-btn" href="#">Reply Comments <i
                                                    class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="children">
                                    <div class="comments-box">
                                        <div class="comments__avatar">
                                            <img src="assets/img/blog/08.png" alt="">
                                        </div>
                                        <div class="comments__content fix">
                                            <h5>David Angel Makel</h5>
                                            <span>IT Consultant</span>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content page looking at its layout point of using normal</p>
                                            <a class="com-btn" href="#">Reply Comments <i
                                                    class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="comments-box">
                                        <div class="comments__avatar">
                                            <img src="assets/img/blog/09.png" alt="">
                                        </div>
                                        <div class="comments__content fix">
                                            <h5>David Angel Makel</h5>
                                            <span>IT Consultant</span>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content page looking at its layout point of using normal</p>
                                            <a class="com-btn" href="#">Reply Comments <i
                                                    class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        {{-- TODO: Remove d-none to show comments form  --}}
                        <div class="d-none post-comments-form pb-40 wow fadeInUp2 animated" data-wow-delay=".1s"
                            style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                            <h4 class="comments-title mb-40">Reply Comments</h4>
                            <div class="post-form-area">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="input-text mb-30">
                                            <input type="text" class="form-control" placeholder="Full Name Here">
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="input-text input-mail mb-30">
                                            <input type="text" class="form-control" placeholder="Email Here">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="input-text input-msg mb-30">
                                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Comments"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="comment-btn">
                                            <a class="theme_btn theme_btn_bg" href="#">send comments <i
                                                    class="far fa-arrow-right"></i></a>
                                        </div>
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
                                <li>Product Marketing <span class="f-right"><i
                                            class="far fa-chevron-right"></i></span></li>
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
                        <div class="widget wow fadeInUp2 animated" data-wow-delay=".1s"
                            style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
                            <div class="widget-donate-box pos-rel text-center"
                                style="background-image:url(assets/img/events/15.jpg);">
                                <h5>Donate Now</h5>
                                <h3>Want To Donate
                                    Our Product</h3>
                                <a class="theme_btn theme_btn_bg" href="contact.html" data-animation="fadeInLeft"
                                    data-delay=".5s">donate now <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
