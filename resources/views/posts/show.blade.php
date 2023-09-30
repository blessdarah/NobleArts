<x-guest-layout>
    <x-page-header title="Blog detail" />
    <div class="blog-details-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-content">
                        <div class="single-blog">
                            <h2>{{ $post->title }}</h2>
                            <div class="info">
                                <ul>
                                    <li>{{ $post->created_at->format('M d, Y') }}</li>
                                    <li>By Admin</li>
                                </ul>
                            </div>
                            <div class="img">
                                <img src="{{ asset($post->image) }}" alt="Image">
                            </div>
                            <div>
                                {!! $post->detail !!}
                            </div>
                        </div>
                        <div class="quote">
                            <p>{{ $post->summary }}</p>
                            <div class="icon">
                                <img src="{{ asset('assets/images/blog/quote-icon.png') }}" alt="Icon">
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
                        <div class="comments-reply-area">
                            <h3>Comments Reply</h3>
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" placeholder="Email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Comments..." id="message" cols="30" rows="4"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">
                                                Save my info for the next comment
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="default-btn btn">
                                    <span>Post Comment</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        <div class="sidebar-search">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <button class="default-btn btn" type="submit">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-widget categories">
                            <h3>Categories</h3>
                            <ul>
                                <li>
                                    <a href="blog-grid.html">
                                        Film Maker
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">
                                        Film Studio
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">
                                        HaruTheme
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">
                                        LifeStyle
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-grid.html">
                                        Uncategorized
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-widget popular-post">
                            <h3>Popular Post</h3>
                            <div class="post-wrap">
                                <article class="item">
                                    <a href="blog-grid.html" class="thumb">
                                        <span class="fullimage cover bg1" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <h4 class="title usmall">
                                            <a href="blog-grid.html">
                                                How To Edit A Flim Score To Best Movie Serve Your Story
                                            </a>
                                        </h4>
                                        <time datetime="2022-07-30">29 July,2022</time>
                                    </div>
                                    <div class="clear"></div>
                                </article>
                                <article class="item">
                                    <a href="blog-grid.html" class="thumb">
                                        <span class="fullimage cover bg2" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <h4 class="title usmall">
                                            <a href="blog-grid.html">
                                                Teaming Up With Josh Marston Producer For Effects
                                            </a>
                                        </h4>
                                        <time datetime="2022-07-30">29 July,2022</time>
                                    </div>
                                    <div class="clear"></div>
                                </article>
                                <article class="item">
                                    <a href="blog-grid.html" class="thumb">
                                        <span class="fullimage cover bg3" role="img"></span>
                                    </a>
                                    <div class="info">
                                        <h4 class="title usmall">
                                            <a href="blog-grid.html">
                                                Top Actors That Have Benn Fired From Shows Movie
                                            </a>
                                        </h4>
                                        <time datetime="2022-07-30">29 July,2022</time>
                                    </div>
                                    <div class="clear"></div>
                                </article>
                            </div>
                        </div>
                        <div class="sidebar-widget tags">
                            <h3>Tags</h3>
                            <ul>
                                <li>
                                    <a href="works.html">Actor</a>
                                </li>
                                <li>
                                    <a href="works.html">Director</a>
                                </li>
                                <li>
                                    <a href="works.html">Award</a>
                                </li>
                                <li>
                                    <a href="works.html">Camera</a>
                                </li>
                                <li>
                                    <a href="works.html">Film</a>
                                </li>
                                <li>
                                    <a href="works.html">Trailer</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
