<x-guest-layout>
    <x-page-header title="About us" />
    <div class="container mt-30 mb-30">
        <div class="video-details-bottom-content">
            @if (request()->query('type') == 'core')
                <h3>Core Members</h3>
            @else
                <h3>Our actors</h3>
            @endif
            <p>Consectetur asperiores odio officiis reprehenderit animi Dignissimos animi recusandae id adipisci
                dolorem? Nemo rerum laborum dolore amet officiis. Assumenda quidem harum in aut ratione Quasi
                accusantium vitae fugit tempora eos impedit molestiae non amet voluptatibus! Aliquam saepe maxime
                officia nemo magnam Pariatur cum blanditiis recusandae est accusantium Earum commodi deserunt et
                consequuntur molestias! Tempora quos sed similique exercitationem quae Voluptates repellat at et quo
                nesciunt. Dolores officia deleniti assumenda eaque soluta! Neque voluptatibus accusantium placeat
                perferendis cumque! Reprehenderit maiores quam accusantium quis non? Officia dolorem nemo aliquid
                aspernatur ipsa Facere sunt accusantium alias placeat recusandae laboriosam minima. Incidunt doloremque
                sunt?</p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($members as $member)
                <div class="col-md-4 single-team-box mb-5">
                    <div class="team-img">
                        <img src="{{ asset('assets/images/team/team-img-5.jpg') }}" alt="Image">
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
