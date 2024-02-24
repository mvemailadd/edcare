@extends('layouts.master')

@section('content')
    <!-- Contact Section - Home Page -->
    <section id="contact" class="contact">

        <!--  Section Title -->
        <div class="container section-title">
            <h2>Contact</h2>
            <p>Edcare aims at protecting, promoting, developing and doing all that it deems fit, in the areas of
                Education, Care and Rehabilitation, in the best interests, rights, defense and welfare of all the
                needy, without discrimination.</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-item">
                                <i class="bi bi-geo-alt"></i>
                                <h3>EdCare</h3>
                                <p>32/1, Nehru Third Street</p>
                                <p>Khajamalai, Tiruchirappalli - 620023</p>
                                <p>Tamil Nadu, India</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item">
                                <i class="bi bi-telephone"></i>
                                <h3>Call Us</h3>
                                <p>+91 999 437 0099</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Us</h3>
                                <p>edcare@gmail.com</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item">
                                <i class="bi bi-clock"></i>
                                <h3>Open Hours</h3>
                                <p>Monday - Friday, 7:00 am – 5:00 pm for families with the childcare subsidy
                                    approval</p>
                                <p>Monday - Friday, 7:00 am – 5:00 pm for families without the childcare subsidy
                                    approval</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                </div>

                <div class="col-lg-6">
                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>

                                <button type="submit">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Contact Form -->

            </div>
            <div class="contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.499640784103!2d78.69066277499081!3d10.772992259257116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baaf52cd5cdfb2d%3A0x478b7eca082c9234!2sNehru%20Nagar%20Third%20St%2C%20Tiruchirappalli%2C%20Tamil%20Nadu%2C%20India!5e0!3m2!1sen!2sus!4v1708363312924!5m2!1sen!2sus"
                    width="800" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>

    </section><!-- End Contact Section -->
@endsection('content')
