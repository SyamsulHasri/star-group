@extends('layouts.app')

@section('content')
<!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1 class="display-5 fw-bold">Welcome to <b class="text-danger">STAR</b> Media Group</h1>
      <p class="lead mb-4">We help businesses grow with innovative solutions and professional support.</p>
      <a href="{{route('about')}}" class="btn btn-light btn-lg px-4">Learn More</a>
    </div>
  </section>

  <!-- Features Section -->
  <section class="py-5">
    <div class="container text-center">
      <h2 class="mb-4">Our Services</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="p-4 border rounded shadow-sm h-100">
            <div class="feature-icon mb-3">💡</div>
            <h5>Creative Solutions</h5>
            <p>We deliver innovative and effective solutions tailored to your business needs.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-4 border rounded shadow-sm h-100">
            <div class="feature-icon mb-3">⚙️</div>
            <h5>Technical Expertise</h5>
            <p>Our expert team ensures your systems run efficiently and securely at all times.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="p-4 border rounded shadow-sm h-100">
            <div class="feature-icon mb-3">🤝</div>
            <h5>Reliable Support</h5>
            <p>We build long-term partnerships through trust, transparency, and quality service.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="testimonial text-center">
    <div class="container">
      <h2 class="mb-5">What Our Clients Say</h2>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <blockquote class="blockquote">
            <p class="mb-4">"Your Company transformed our business with their professional and creative approach. Highly recommended!"</p>
            <footer class="blockquote-footer">Sarah Lim, <cite title="Source Title">TechStart Solutions</cite></footer>
          </blockquote>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-5 text-center">
    <div class="container">
      <h2>Ready to Get Started?</h2>
      <p class="lead mb-4">Let’s work together to grow your business today.</p>
      <a href="#" class="btn btn-orange btn-lg">Contact Us</a>
    </div>
  </section>


@endsection