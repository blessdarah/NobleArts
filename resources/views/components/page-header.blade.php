@props([
    'title' => null,
])

<section class="page-title-area" style="background-image:url(assets/img/bg/page-title-bg.jpg);">
    <div class="right-border-shape">
        <img src="assets/img/shape/02.png" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3">
                <div class="page-title-wrapper text-center">
                    <h1 class="page-title wow fadeInUp2  animated" data-wow-delay=".1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp2;">
                        {{ $title }}</h1>
                    <div class="breadcrumb">
                        <ul class="breadcrumb-list wow fadeInUp2  animated" data-wow-delay=".3s"
                            style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp2;">
                            <li><a href="index.html">Home <i class="far fa-chevron-right"></i></a></li>
                            <li><a class="active" href="#">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
