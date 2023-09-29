<x-guest-layout>
    <x-page-header title="Services" />
    <div class="movie-area bg-color ptb-100">
        <div class="container">
            @foreach ($services as $service)
                <div class="row align-items-center">
                    <div class="col-lg-6 @if ($loop->index % 2 == 1) order-2 @endif">
                        <div class="movie-image pr-15">
                            <img src="{{ $service->image }}" alt="Service cover">
                        </div>
                    </div>
                    <div class="col-lg-6 @if ($loop->index % 2 == 1) order-1 @endif">
                        <div class="movie-content pl-15">
                            <div class="movie-title">
                                <span>{{ $service->category->name }}</span>
                                <h2>{{ $service->name }}</h2>
                            </div>
                            <div class="content text-dark">
                                <p>{{ $service->summary }}</p>
                            </div>
                            <a href="{{ $service->serviceUrl() }}" class="default-btn btn mt-30">Learn
                                more<i class="fa-solid fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-guest-layout>
