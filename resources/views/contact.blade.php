<x-guest-layout>
    <x-page-header title="Contact us" />
    <div class="contact-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="get-in-touch">
                        <h2>Get In Touch</h2>
                        <div class="contact-info-card">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <h4>Phone</h4>
                            <a href="tel:0884566477587">(237) 656 64 77 87</a>
                            <a href="tel:0884566465247">(237) 656 64 77 87</a>
                        </div>
                        <div class="contact-info-card">
                            <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <h4>Email</h4>
                            <a href="mailto:vidmonet@domain.com">contact@naec.org</a>
                            <a href="mailto:hello@video.com">contact@naec.org</a>
                        </div>
                        <div class="contact-info-card">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <h4>Address</h4>
                            <span>Commercial avenue</span>
                            <span>Bamenda, Cameroon</span>
                        </div>
                        <div class="social-content">
                            <ul>
                                <li><span>Follow us:</span></li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"><i
                                            class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com/" target="_blank"><i
                                            class="fa-brands fa-twitter"></i></a>
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="map-area">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12711295.912702927!2d-97.8942370839028!3d38.93897514662292!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1654928837073!5m2!1sen!2sbd"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- contact form --}}
    <div class="contact-form-area ptb-100 bg-f8f8f8">
        <div class="container">
            <div class="section-title">
                <span>We’re Ready To Help You</span>
                <h2>Leave A Message</h2>
            </div>
            <div class="contacts-form">
                <form id="contactForm" novalidate="true">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Name" id="name"
                                    class="form-control" required="" data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" placeholder="Email"
                                    class="form-control" required="" data-error="Please enter your email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" name="phone_number" id="phone_number" placeholder="Phone number"
                                    required="" data-error="Please enter your number" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                    placeholder="Subject" required="" data-error="Please enter your subject">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" placeholder="Message" id="message" cols="30" rows="6"
                                    required="" data-error="Write your message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn disabled"
                                style="pointer-events: all; cursor: pointer;">
                                <span>Send Message</span>
                                <i class="flaticon-right-arrow-2"></i>
                            </button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-guest-layout>
