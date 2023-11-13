<x-guest-layout>
    <x-page-header title="Service detail" />
    <section class="blog-details-area grey-bg pt-130 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mt-30">
                    <div class="blog-details-content">
                        <div class="single-blog">
                            <h2>{{ $service->name }}</h2>
                            <div class="info">
                                <ul>
                                    <li>{{ $service->created_at->format('d M, Y') }}</li>
                                </ul>
                            </div>
                            <div class="img">
                                <img src="{{ asset('/storage/' . $service->image) }}" alt="Image">
                            </div>
                            {!! $service->description !!}
                        </div>
                        <div class="quote">
                            <p>{{ $service->summary }}</p>
                            <div class="icon">
                                <img src="{{ asset('assets/images/blog/quote-icon.png') }}" alt="Icon">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right section --}}
                <div class="col-xl-4 col-lg-4 col-md-12">
                    <div class="card mt-5">
                        <div class="card-header">Want this service?</div>
                        <div class="card-body">
                            <p class="card-text">Contact us today</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    {{-- other services --}}
    <div class="trailer-area-style2 bg-color ptb-100">
        <div class="container">
            <div class="section-title white-title">
                <span>Similar services</span>
                <h2>Here are other services to have a look </h2>
            </div>
            <div class="trailer-slider2 owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage"
                        style="transform: translate3d(-3948px, 0px, 0px); transition: all 0.8s ease 0s; width: 8883px;">
                        @foreach ($otherServices as $otherService)
                            <div class="owl-item cloned" style="width: 309px; margin-right: 20px;">
                                <div class="single-trailer-box">
                                    <div class="trailer-img">
                                        <img src="{{ asset($otherService->image) }}" alt="Image">
                                    </div>
                                    <div class="content">
                                        <h3>{{ $otherService->name }}</h3>
                                        <span>{{ $otherService->category->name }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="owl-nav">
                    <button type="button" role="presentation" class="owl-prev">
                        <i class="fa-solid fa-angle-left"></i>
                    </button>
                    <button type="button" role="presentation" class="owl-next">
                        <i class="fa-solid fa-angle-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
