@extends('layouts.app')

@section('content')

<!-- Hero Section -->
<section class="hero position-relative d-flex align-items-center justify-content-center text-center text-white" 
         style="background: linear-gradient(135deg, #dc3545 0%, #ff7b00 100%), url('{{ asset('images/about-bg.jpg') }}') center/cover no-repeat; height: 70vh;">
  <div class="container position-relative">
    <h1 class="display-3 fw-bold mb-3 animate-fadein">About <span class="text-warning">Our Company</span></h1>
    <p class="lead mb-4 animate-fadein-delay">We turn ideas into innovation that drives growth and impact.</p>
    <a href="#about-section" class="btn btn-light btn-lg rounded-pill px-5 shadow-sm">Discover More</a>
  </div>
</section>

<!-- About Description -->
<section id="about-section" class="py-5">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-md-6">
        <div class="position-relative">
          <img src="{{ asset('SMG.png') }}" alt="About Image" class="img-fluid rounded-4 shadow-lg">
          <div class="position-absolute top-50 start-50 translate-middle bg-danger text-white p-3 rounded-circle shadow-lg">
            <i class="bi bi-lightbulb fs-2"></i>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <h2 class="fw-bold text-danger mb-3">Who We Are</h2>
        <p class="text-muted fs-5 mb-3">
          Since 2020, we’ve been helping businesses evolve through technology, creativity, and collaboration. 
          Our team is passionate about building digital experiences that make a lasting impact.
        </p>
        <ul class="list-unstyled">
          <li class="mb-2"><i class="bi bi-check-circle-fill text-danger me-2"></i> Innovative and agile solutions</li>
          <li class="mb-2"><i class="bi bi-check-circle-fill text-danger me-2"></i> Strong focus on user experience</li>
          <li><i class="bi bi-check-circle-fill text-danger me-2"></i> Dedicated support and collaboration</li>
        </ul>
        <a href="#" class="btn btn-danger mt-4 rounded-pill px-4 py-2 shadow-sm">Learn More</a>
      </div>
    </div>
  </div>
</section>

<!-- Stats Section -->
<section class="py-5 bg-light text-center">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-3">
        <h2 class="fw-bold text-danger display-5">5+</h2>
        <p class="text-muted">Years of Experience</p>
      </div>
      <div class="col-md-3">
        <h2 class="fw-bold text-danger display-5">200+</h2>
        <p class="text-muted">Projects Completed</p>
      </div>
      <div class="col-md-3">
        <h2 class="fw-bold text-danger display-5">50+</h2>
        <p class="text-muted">Happy Clients</p>
      </div>
      <div class="col-md-3">
        <h2 class="fw-bold text-danger display-5">15</h2>
        <p class="text-muted">Team Members</p>
      </div>
    </div>
  </div>
</section>

<!-- Our Team -->
<section class="py-5" style="background: linear-gradient(135deg, #fff 0%, #fdf2ef 100%);">
  <div class="container text-center">
    <h2 class="fw-bold mb-5 text-danger">Meet Our Team</h2>
    <div class="row g-4">
      @foreach ([
        ['name' => 'Jane Doe', 'role' => 'CEO & Founder', 'img' => 'images/person_1.jpg'],
        ['name' => 'John Smith', 'role' => 'Head of Marketing', 'img' => 'images/person_2.jpg'],
        ['name' => 'Emily Johnson', 'role' => 'Product Manager', 'img' => 'images/person_4.jpg']
      ] as $member)
      <div class="col-md-4">
        <div class="card border-0 shadow team-card overflow-hidden rounded-4 bg-white bg-opacity-75 backdrop-blur">
          <div class="position-relative overflow-hidden">
            <img src="{{ asset($member['img']) }}" alt="{{ $member['name'] }}" class="card-img-top team-img">
            <div class="overlay d-flex align-items-center justify-content-center">
              <a href="#" class="btn btn-danger rounded-pill px-4">Connect</a>
            </div>
          </div>
          <div class="card-body">
            <h5 class="fw-semibold mb-0">{{ $member['name'] }}</h5>
            <p class="text-muted mb-0">{{ $member['role'] }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Contact CTA -->
<section class="py-5 text-center text-white" 
         style="background: linear-gradient(135deg, #dc3545 0%, #ff7b00 100%);">
  <div class="container">
    <h2 class="fw-bold mb-3">Want to Know More?</h2>
    <p class="lead mb-4">Let’s create something amazing together.</p>
    <a href="#" class="btn btn-light btn-lg rounded-pill px-5">Contact Us</a>
  </div>
</section>

<!-- Custom CSS -->
<style>
  body { overflow-x: hidden; }
</style>

@endsection
