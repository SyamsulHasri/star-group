@extends('layouts.app')

@section('content')

<!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1 class="display-5 fw-bold">About Our Company</h1>
      <p class="lead">We are passionate about creating value and innovation that makes life better.</p>
    </div>
  </section>

  <!-- About Description -->
  <section class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
          <img src="{{asset('SMG.png')}}" alt="About Image" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
          <h2>Who We Are</h2>
          <p>
            Founded in 2020, our company has grown from a small startup to a trusted name in the industry. 
            We specialize in delivering high-quality products and exceptional customer service. 
            Our goal is to make a meaningful difference through creativity, collaboration, and commitment.
          </p>
          <p>
            We believe in building long-term relationships with our clients and partners, 
            ensuring mutual success and continuous growth.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Team -->
  <section class="py-5 bg-light">
    <div class="container text-center">
      <h2 class="mb-5">Meet Our Team</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="team-member">
            <img src="{{asset('images/person_1.jpg')}}" alt="Team Member" class="mb-3">
            <h5 class="mb-0">Jane Doe</h5>
            <p class="text-muted">CEO & Founder</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="team-member">
            <img src="{{asset('images/person_2.jpg')}}" alt="Team Member" class="mb-3">
            <h5 class="mb-0">John Smith</h5>
            <p class="text-muted">Head of Marketing</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="team-member">
            <img src="{{asset('images/person_4.jpg')}}" alt="Team Member" class="mb-3">
            <h5 class="mb-0">Emily Johnson</h5>
            <p class="text-muted">Product Manager</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact CTA -->
  <section class="py-5 text-center">
    <div class="container">
      <h2>Want to Know More?</h2>
      <p class="lead">Get in touch with us today — we’d love to hear from you!</p>
      <a href="#" class="btn btn-orange btn-lg">Contact Us</a>
    </div>
  </section>


@endsection