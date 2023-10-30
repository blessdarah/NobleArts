<x-guest-layout>
    <x-page-header title="About us" />
    <div class="container mt-30 mb-20">
        <div class="row">
            <div class="col-lg-8">
                <div class="video-details-content">
                    <div class="video-img">
                        <img src="assets/images/video-img/video-img-7.jpg" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
            </div>
        </div>
        <div class="video-details-bottom-content">
            @if (isset($sections))
                @foreach ($sections as $section)
                    <h3>{{ $section->name }}</h3>
                    <div class="video-img">
                        <img src="{{ asset($section->image) }}" alt="Image">
                    </div>
                    {!! $section->body !!}
                @endforeach
            @endif
        </div>
    </div>
</x-guest-layout>
