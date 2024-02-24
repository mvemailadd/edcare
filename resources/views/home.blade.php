@extends('layouts.master')

@section('content')
    <!-- Hero Section - Home Page -->
    <section id="hero" class="hero">

        <img src="{{ asset('assets/img/hero-bg.jpg') }}" alt="" data-aos="fade-in">

        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h2 data-aos="fade-up" data-aos-delay="100">Welcome to EdCare</h2>
                    <p data-aos="fade-up" data-aos-delay="200">EdCare aims at protecting, promoting, developing and doing
                        all that it deems fit,</p>
                    <p>in the areas of Education, Care and Rehabilitation</p>
                </div>
                <div class="col-lg-5">
                    <form action="#" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="300">
                        <input type="text" class="form-control" placeholder="Enter email address">
                        <input type="submit" class="btn btn-primary" value="Sign up">
                    </form>
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->
    @include('clients')
    @include('services')
    @include('stats')
    @include('faq')
@endsection('content')
