<x-guest-layout>
    <x-page-header title="Service detail" />
    <section class="blog-details-area grey-bg pt-130 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mt-30">
                    <div class="blog-details-content">
                        <div class="single-blog">
                            <h2>{{ $programme->name }}</h2>
                            <div class="info">
                                <ul>
                                    <li>{{ $programme->created_at->format('d M, Y') }}</li>
                                </ul>
                            </div>
                            <div class="img">
                                <img src="{{ asset('/storage/' . $programme->image) }}" alt="Image">
                            </div>
                            {!! $programme->description !!}
                        </div>
                        <div class="quote">
                            <p>{{ $programme->summary }}</p>
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

</x-guest-layout>
