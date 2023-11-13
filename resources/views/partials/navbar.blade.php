@php
    $prefessionalServices = \App\Models\Service::all();
    $programmes = \App\Models\Programme::all();
@endphp

<div id="preloader-section">
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">

                <div class="spinner"></div>

                <div class="txt-loading">
                    <span data-text-preloader="N " class="letters-loading">N</span>
                    <span data-text-preloader="A" class="letters-loading">A</span>
                    <span data-text-preloader="E" class="letters-loading">E</span>
                    <span data-text-preloader="C" class="letters-loading">C</span>
                </div>

            </div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

        </div>
    </div>
</div>


<div class="navbar-area style2">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="{{ route('pages.welcome') }}">
                        {{-- <img src="{{ asset('assets/images/white-logo.png') }}" alt="logo"> --}}
                        <h1 class="text-white">NAEC</h1>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="desktop-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ route('pages.welcome') }}">
                    {{-- <img src="{{ asset('assets/images/white-logo.png') }}" alt="logo"> --}}
                    <h1 class="text-white">NAEC</h1>
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <x-nav-link label="Home" routeName="pages.welcome" />
                        <x-dropdown-menu label="Services">
                            <x-dropdown-menu label="Professional services" routeName="pages.services">
                                @foreach ($prefessionalServices as $service)
                                    <x-nav-link label="{{ $service->name }}" routeName="pages.services" />
                                @endforeach
                            </x-dropdown-menu>
                            <x-dropdown-menu label="Our programmes">
                                @foreach ($programmes as $programme)
                                    <x-nav-link label="{{ $programme->name }}" routeName="pages.services" />
                                @endforeach
                            </x-dropdown-menu>
                        </x-dropdown-menu>
                        <x-dropdown-menu label="News & Updates">
                            <x-nav-link label="Blog" routeName="pages.blog" />
                            <x-nav-link label="Events" routeName="pages.events" />
                        </x-dropdown-menu>
                        <x-dropdown-menu label="Our works">
                            <x-nav-link label="Trailers" routeName="pages.blog" />
                            <x-nav-link label="Short films" routeName="pages.blog" />
                            <x-nav-link label="Theatre arts" routeName="pages.events" />
                        </x-dropdown-menu>
                        <x-dropdown-menu label="About us">
                            <x-nav-link label="About NAEC" routeName="pages.about.index" />
                            <x-nav-link label="Core team"
                                routeName="{{ route('pages.about.team', ['type' => 'core']) }}" isVerbose />
                            <x-nav-link label="Our actors"
                                routeName="{{ route('pages.about.team', ['type' => 'actor']) }}" isVerbose />
                        </x-dropdown-menu>
                        <x-nav-link label="Contact us" routeName="pages.contact" />
                    </ul>
                    <div class="others-options">
                        <div class="option-item">
                            <div class="search-btn">
                                <a class="#" href="#searchmodal" data-bs-toggle="modal"
                                    data-bs-target="#searchmodal">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                            </div>
                        </div>
                        <div class="option-item">
                            <div class="sidebar-btn">
                                <div class="sidebar-menu" data-bs-toggle="modal" data-bs-target="#sidebarModal">
                                </div>
                            </div>
                        </div>
                        <div class="option-item">
                            <div class="switch-box">
                                <label id="switch" class="switch">
                                    <input type="checkbox" onchange="toggleTheme()" id="slider">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="others-options ms-auto">
                        <div class="option-item">
                            <div class="search-btn">
                                <a class="#" href="#searchmodal" data-bs-toggle="modal"
                                    data-bs-target="#searchmodal">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </a>
                            </div>
                        </div>
                        <div class="option-item">
                            <div class="sidebar-btn">
                                <div class="sidebar-menu" data-bs-toggle="modal" data-bs-target="#sidebarModal">
                                </div>
                            </div>
                        </div>
                        <div class="option-item">
                            <div class="switch-box">
                                <label id="switch2" class="switch">
                                    <input type="checkbox" onchange="toggleTheme()" id="slider2">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<x-search-modal />
<x-sidebar-modal />
