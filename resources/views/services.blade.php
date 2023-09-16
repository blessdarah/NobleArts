<x-guest-layout>
    <x-page-header title="Our services" />
    <section class="events-area pt-130 pb-45">
        <div class="container">
            <div class="row">
                @foreach ($services as $service)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="events mb-85 wow fadeInUp2  animated" data-wow-delay=".1s"
                            style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
                            <a class="events_tag" href="events-details.html">{{ $service->category->name }}</a>
                            <div class="events__img pos-rel">
                                <img class="block-one" src="storage/{{ $service->image }}"
                                    alt="cover photo of service we offer">
                                <div class="events-back" style="background-image:url(storage/{{ $service->image }});">
                                </div>
                            </div>
                            <div class="events__content pos-abl">
                                {{-- <span><i class="far fa-map-marker-alt"></i> 25 Main Street ,New York</span> --}}
                                <h5 class="events-title">
                                    <a href="events-details.html">{{ $service->name }}</a>
                                </h5>
                                <p class="text-sm text-white">{{ $service->summary }}</p>
                                <a href="{{ $service->serviceUrl() }}" class="more_btn">
                                    <i class="far fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-guest-layout>
