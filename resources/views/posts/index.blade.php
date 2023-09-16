<x-guest-layout>
    <x-page-header title="Our blog" />
    <section class="blog-area pt-130 pb-100">
        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp2  animated" data-wow-delay=".1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
                        <div class="blogs mb-30">
                            <div class="blogs__thumb pos-rel mb-45">
                                <div class="blogs__thumb--img">
                                    <img src="{{ $post->image }}" alt="blog post image">
                                </div>
                                <a class="blog-tag" href="blog-details.html">{{ $post->category->name }}</a>
                            </div>
                            <div class="blogs__content">
                                <div class="blogs__content--meta mb-15">
                                    <span><i class="far fa-calendar-alt"></i>
                                        {{ $post->created_at->format('d M Y') }}</span>
                                    {{-- <span><i class="far fa-comment"></i> Comment (03)</span> --}}
                                </div>
                                <h4 class="mb-4"><a href="{{ $post->postUrl() }}">{{ $post->title }}</a></h4>
                                <p class="mb-10">{{ Str::words($post->summary, 30) }}</p>
                                <ul class="project-manager">
                                    {{-- <li><a href="#"><img src="{{ asset('assets/img/blog/04.png') }}" --}}
                                    {{--             alt=""> --}}
                                    {{--         <span>David Zon</span></a></li> --}}
                                    {{-- <li> --}}
                                    <a class="more_btn_02" href="{{ $post->postUrl() }}">Read more <i
                                            class="far fa-arrow-right"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- old blog --}}
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div>
            {{ $posts->links() }}
        </div>
    </div>
</x-guest-layout>
