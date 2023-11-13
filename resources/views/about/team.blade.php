<x-guest-layout>
    <x-page-header title="About us" />
    <div class="container mt-30 mb-30">
        <div class="video-details-bottom-content">
            @if (request()->query('type') == 'core')
                <h3>Core Members</h3>
            @else
                <h3>Our actors</h3>
            @endif
            <p></p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($members as $member)
                <div class="col-md-4 single-team-box mb-5">
                    <div class="team-img">
                        <img src="{{ asset('/storage/' . $member->image) }}" alt="Image">
                        <div class="social-content">
                            <ul>
                                <li>
                                    <a href="{{ $member->facebook ?? '#' }}" target="_blank">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ $member->twitter ?? '#' }}" target="_blank"><i
                                            class="fa-brands fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $member->linkedin ?? '#' }}" target="_blank"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a href="{{ $member->instagram ?? '#' }}" target="_blank"><i
                                            class="fa-brands fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>{{ $member->name }}</h3>
                        <span>{{ $member->position ?? 'member' }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-guest-layout>
