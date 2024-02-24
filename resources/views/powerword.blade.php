@extends('layouts.master')

@section('content')
    <!-- Team Section - Home Page -->
    <section id="team" class="team contact">

        <!--  Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Power Words Tool</h2>
            <p>Please type or paste the passages you want to analyze.</p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-5">
                    <div class="member-info text-center" data-aos="fade-up" data-aos-delay="300">
                        <div class="input-group">
                            <textarea class="form-control" id="userInput" rows="5"required></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your passage is parsed successfully.</div>
                            <div class="col-md-12 text-center mt-2">
                                <button id="target" type="submit">Analyze</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="resultDiv" class="resultjumbo container">
            <span id="resultHead"></span>
            <span id="result"></span>
            <span id="counts"></span>
        </div>

    </section>
@endsection('content')
