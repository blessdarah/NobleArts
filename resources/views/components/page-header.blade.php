@props([
    'title' => null,
])

<div class="page-banner-area bg-3 jarallax" data-jarallax="{&quot;speed&quot;: 0.3}" data-jarallax-original-styles="null"
    style="background-image: none; background-attachment: scroll; background-size: auto;">
    <div class="container">
        <div class="page-banner-content">
            <h1>{{ $title }}</h1>
            <ul>
                <li><a href="{{ route('pages.welcome') }}">Home</a></li>
                <li>Works</li>
            </ul>
        </div>
    </div>
    <div style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -100;"
        id="jarallax-container-0">
        <div
            style="background-position: 50% 50%; background-size: 100%;
            background-repeat: no-repeat; background-image: url(&quot;{{ asset('assets/images/banner/banner-bg-7.jpg') }}&quot;);
            position: absolute; top: 0px; left: 0px; width: 1914.47px; height: 498.56px; overflow: hidden; pointer-events: none; margin-left: -61.2352px; margin-top: 20.22px; visibility: visible; transform: translateY(-86.02px) translateZ(0px);">
        </div>
    </div>
</div>
