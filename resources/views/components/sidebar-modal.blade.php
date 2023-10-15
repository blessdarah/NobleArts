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
                    <p>This is about NAEC.</p>
                </div>
                <div class="sidebar-contact-info">
                    <h3>Contact Information</h3>
                    <ul class="info-list">
                        <li><i class="fa-solid fa-phone"></i> <a href="tel:9901234567">+990-123-4567</a></li>
                        <li><i class="fa-regular fa-envelope"></i><a href="mailto:user@gmail.com"><span
                                    class="__cf_email__">info@naec.com</span></a>
                        </li>
                        <li><i class="fa-regular fa-location-dot"></i> Vertinery Junction Bamenda</li>
                    </ul>
                </div>
                <ul class="sidebar-social-list">
                    <li>
                        <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
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
                @auth
                    <a href="/admin" class="default-btn mt-4">Dashboard</a>
                @else
                    <a href="/admin" class="default-btn mt-4">Login</a>
                @endauth
            </div>
        </div>
    </div>
</div>
