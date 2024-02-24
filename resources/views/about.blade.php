@extends('layouts.master')

@section('content')
    <!-- About Section - Home Page -->
    <section id="about" class="about">

        <div class="container mt-5" data-aos="fade-up" data-aos-delay="100">
            <div class="row align-items-xl-center gy-5">

                <div class="col-xl-5 content">
                    <h3>About Us</h3>
                    <h2>Edcare a.k.a Education Care Rehabilitation Organization</h2>
                    <p>The Founder declares Edcare a.k.a. Education Care Rehabilitation Organization, a Charitable
                        Trust working in the areas of Education, Care and Rehabilitation is irrevocable,
                        non-political and non-religious in character.</p>
                    <a href="/about" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>

                <div class="col-xl-7">
                    <div class="row gy-4 icon-boxes">

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon-box">
                                <i class="bi bi-buildings"></i>
                                <h3>Mission</h3>
                                <p>Mission is to develop well rounded, confident and responsible individuals who
                                    aspire to achieve their full potential.</p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon-box">
                                <i class="bi bi-sunrise"></i>
                                <h3>Vision</h3>
                                <p>Vision is for individuals to develop a curiosity of learning, discover their
                                    interests and grow in their love of learning.</p>
                            </div>
                        </div> <!-- End Icon Box -->

                        <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon-box">
                                <i class="bi bi-graph-up-arrow"></i>
                                <h3>Value</h3>
                                <p>Work together to build a safe, respectful and nurturing environment focused on
                                    maximizing individual’s sense of wellbeing and acquisition of skills for life
                                    and learning.</p>
                            </div>
                        </div> <!-- End Icon Box -->

                    </div>
                </div>

            </div>
        </div>

    </section><!-- End About Section -->
@endsection('content')
