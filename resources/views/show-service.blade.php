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
                                <img src="{{ $service->image }}" alt="Image">
                            </div>
                            {!! $service->description !!}
                        </div>
                        <div class="quote">
                            <p>{{ $service->summary }}</p>
                            <div class="icon">
                                <img src="assets/images/blog/quote-icon.png" alt="Icon">
                            </div>
                        </div>
                        <div class="tag-and-share">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="tags">
                                        <ul>
                                            <li>
                                                <span>Tags:</span>
                                            </li>
                                            <li><a href="#">Director</a></li>
                                            <li><a href="#">Film Maker</a></li>
                                            <li><a href="#">Film Studio</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="share">
                                        <ul>
                                            <li><span>Share:</span></li>
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

                {{-- Right section --}}
                <div class="col-xl-4 col-lg-4 col-md-12">
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
