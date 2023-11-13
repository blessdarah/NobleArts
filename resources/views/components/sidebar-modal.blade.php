<div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-bs-dismiss="modal"> <i class="fa-solid fa-xmark"></i></button>
            <div class="modal-body">
                <a href="{{ route('pages.welcome') }}">
                    <img src="{{ asset('assets/images/white-logo.png') }}" alt="logo">
                </a>
                <div class="sidebar-content">
                    <h3>About Us</h3>
                    <p>{{ setting('common.about') }}</p>
                </div>
                <div class="sidebar-contact-info">
                    <h3>Contact Information</h3>
                    <ul class="info-list">
                        <li><i class="fa-solid fa-phone"></i> <a
                                href="tel:{{ setting('common.telephone') }}">{{ setting('common.telephone') }}</a></li>
                        <li><i class="fa-regular fa-envelope"></i><a
                                href="mailto:{{ setting('common.email') }}"><span>{{ setting('common.email') }}</span></a>
                        </li>
                        <li><i class="fa-regular fa-location-dot"></i> {{ setting('common.address') }}</li>
                    </ul>
                </div>
                <ul class="sidebar-social-list">
                    <li>
                        <a href="{{ setting('social.facebook') }}" target="_blank"><i
                                class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="{{ setting('social.twitter') }}" target="_blank"><i
                                class="fa-brands fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="{{ setting('social.linkedin') }}" target="_blank"><i
                                class="fa-brands fa-linkedin-in"></i></a>
                    </li>
                    <li>
                        <a href="{{ setting('social.instagram') }}" target="_blank"><i
                                class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="{{ setting('social.youtube') }}" target="_blank"><i
                                class="fa-brands fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="{{ setting('social.tiktok') }}" target="_blank"><i
                                class="fa-brands fa-tiktok"></i></a>
                    </li>
                </ul>
                @auth
                    <a href="/admin" class="default-btn mt-4">Dashboard</a>
                @else
                    <a href="/admin" class="default-btn mt-4">Login</a>
                @endauth
            </div>
        </div>
    </div>
</div>
