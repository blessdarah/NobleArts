<x-guest-layout>
    <x-page-header title="Our blog" />
    <div class="blog-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7">
                    <div class="section-title style2">
                        <span>Latest News</span>
                        <h2>Articles Updated Daily</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="blog-search-bar">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <button class="default-btn btn" type="submit">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($posts as $post)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-card">
                            <div class="blog-img">
                                <a href="{{ $post->postUrl() }}">
                                    <img src="{{ asset($post->image) }}" alt="Image">
                                </a>
                                <div class="tag">
                                    <a href="#">{{ $post->category->name }}</a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="info">
                                    <ul>
                                        <li>{{ $post->created_at->format('M d, Y') }}</li>
                                        <li>By Admin</li>
                                    </ul>
                                </div>
                                <h2>
                                    <a href="{{ $post->postUrl() }}">{{ $post->title }}</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="paginations">
                <ul>
                    <li><a class="active" href="blog-grid.html">01</a></li>
                    <li><a href="#">02</a></li>
                    <li><a href="#">03</a></li>
                    <li><a href="#"><i class="fa-solid fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</x-guest-layout>
