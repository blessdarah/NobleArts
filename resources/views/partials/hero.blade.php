<div class="banner-area">
    <div class="container-fluid">
        <div class="banner-slider owl-carousel owl-theme">
            @foreach ($banners as $banner)
                <div class="banner-slider-item bg-1 jarallax" style="background-image:url('{{ asset($banner->image) }}')"
                    data-jarallax="{&quot;speed&quot;: 0.3}">
                    <div class="banner-content">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="banner-left-content">
                                    <h1>{{ $banner->title }}</h1>
                                    <p>{{ $banner->content }}</p>
                                    <div class="banner-btn">
                                        <a href="{{ route('pages.services') }}"
                                            class="default-btn btn
                                            mr-20">{{ $banner->button_text ?? 'Our services' }}<i
                                                class="fa-solid fa-arrow-right-long"></i></a>
                                        <a href="{{ route('pages.projects') }}" class="default-btn style2 btn">View
                                            Project<i class="fa-solid fa-arrow-right-long"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="video-play-btn">
                                    <div class="play-btn">
                                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=_NQrE6yrVo0">
                                            <i class="fa-solid fa-play"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="slider-counter"></div>
    </div>
</div>
