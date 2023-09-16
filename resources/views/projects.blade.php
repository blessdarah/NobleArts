<x-guest-layout>
    <x-page-header title="Our projects" />

    <section class="project-01-area pt-125 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="section-title text-center mb-85 wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <h6 class="left-line pl-75 pr-75">Popular Project</h6>
                        <h2>We’ve Done Many Crowd <br>
                            <span>Founding Project</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($projects as $project)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="projects projects-02 white-bg mb-30 wow fadeInUp2 animated" data-wow-delay='.1s'>
                            <div class="projects__thumb pos-rel">
                                <img src="{{ $project->image }}" alt="">
                                <a href="project-video.html" class="new-tag">new</a>
                            </div>
                            <div class="projects__content">
                                <h4><a href="{{ $project->projectUrl() }}">{{ $project->name }}</a></h4>
                                <div class="skill mb-30">
                                    <p>Raised <span>$2535</span></p>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="95"
                                            aria-valuemin="0" aria-valuemax="95">
                                            <h5>95%</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="projects__content--manager">
                                    <ul class="project-manager">
                                        <li>
                                            <a href="#">
                                                <img src="../../../../devsnews.com/template/fande/fande/assets/img/project/01.png/index.html"
                                                    alt="">
                                                <span>{{ $project->status === '1' ? 'Completed' : 'Active' }}</span>
                                            </a>
                                        </li>
                                        <li>
                                            <p class="time"><i class="far fa-clock"></i>
                                                Ends: {{ $project->end_date->format('d M, Y') }}</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--project-area end-->
    <!--cta-area start-->
    <section class="cta-area theme-bg pt-55 pb-25">
        <div class="container">
            <div class="row align-items-md-center">
                <div class="col-xl-9 col-lg-9 col-md-8">
                    <div class="cta-wrapper wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <div class="section-title mb-30">
                            <h2>Become Our <b>Premium</b> Partner ?</h2>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4">
                    <div class="cta-wrapper wow fadeInUp2 animated" data-wow-delay='.1s'>
                        <div class="cta-btn text-left text-md-right">
                            <a class="theme_btn theme_btn_bg" href="contact.html">contact us <i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
