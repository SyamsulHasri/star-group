@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="hero position-relative text-center text-white d-flex align-items-center justify-content-center" 
         style="background: linear-gradient(135deg, #dc3545 0%, #ff7b00 100%), url('{{ asset('images/hero-bg.jpg') }}') center/cover no-repeat; height: 90vh;">
  <div class="container position-relative">
    <h1 class="display-3 fw-bold mb-3 animate-fadein">
      Welcome to <span class="text-warning">STAR</span> Media Group
    </h1>
    <p class="lead mb-4 animate-fadein-delay">We help businesses grow with innovative digital solutions and strategic support.</p>
    <a href="{{ route('about') }}" class="btn btn-light btn-lg rounded-pill px-5 shadow-sm">Explore More</a>
  </div>
  <div class="scroll-down position-absolute bottom-0 start-50 translate-middle-x mb-3">
    <i class="bi bi-chevron-double-down text-white fs-3"></i>
  </div>
</section>

<!-- FEATURES SECTION -->
<section class="py-5" style="background: linear-gradient(135deg, #fff 0%, #fef3f2 100%);">
  <div class="container text-center">
    <h2 class="fw-bold mb-5 text-danger">Our Core Services</h2>
    <div class="row g-4">
      @foreach ([
        ['icon'=>'bi-lightbulb-fill','title'=>'Creative Solutions','desc'=>'We craft digital experiences that inspire and engage audiences.'],
        ['icon'=>'bi-gear-fill','title'=>'Technical Expertise','desc'=>'Our skilled developers build robust, scalable, and efficient systems.'],
        ['icon'=>'bi-people-fill','title'=>'Reliable Support','desc'=>'We value long-term partnerships through trust and quality service.']
      ] as $feature)
      <div class="col-md-4">
        <div class="p-4 shadow-sm border-0 rounded-4 h-100 feature-card bg-white">
          <div class="icon-circle mb-3">
            <i class="bi {{ $feature['icon'] }} fs-1 text-danger"></i>
          </div>
          <h5 class="fw-semibold mb-2">{{ $feature['title'] }}</h5>
          <p class="text-muted">{{ $feature['desc'] }}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- ABOUT PREVIEW SECTION -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-md-6">
        <img src="{{ asset('SMG.png') }}" alt="Company" class="img-fluid rounded-4 shadow-lg">
      </div>
      <div class="col-md-6">
        <h2 class="fw-bold text-danger mb-3">Who We Are</h2>
        <p class="text-muted fs-5">
          Founded in 2020, STAR Media Group brings together creative thinkers and tech innovators 
          to design impactful solutions for modern businesses.
        </p>
        <a href="{{ route('about') }}" class="btn btn-danger rounded-pill px-4 py-2 mt-3">Learn More</a>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS SLIDER -->
<section class="py-5 bg-light text-center">
  <div class="container">
    <h2 class="fw-bold mb-5 text-danger">What Our Clients Say</h2>
    <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        @foreach ([
          ['text'=>'STAR Media transformed our digital presence with creativity and precision.','author'=>'Sarah Lim, TechStart Solutions'],
          ['text'=>'Their web solutions elevated our brand and boosted engagement!','author'=>'Daniel Wong, BrightTech'],
          ['text'=>'Professional, responsive, and innovative — exactly what we needed.','author'=>'Aisha Rahman, Nova Group']
        ] as $i => $t)
        <div class="carousel-item {{ $i === 0 ? 'active' : '' }}">
          <blockquote class="blockquote">
            <p class="mb-4 fs-5 fst-italic">"{{ $t['text'] }}"</p>
            <footer class="blockquote-footer">{{ $t['author'] }}</footer>
          </blockquote>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

<!-- CTA SECTION -->
<section class="py-5 text-center text-white" 
         style="background: linear-gradient(135deg, #dc3545 0%, #ff7b00 100%);">
  <div class="container">
    <h2 class="fw-bold mb-3">Ready to Grow Your Business?</h2>
    <p class="lead mb-4">Let’s collaborate and build something extraordinary together.</p>
    <a href="#" class="btn btn-light btn-lg rounded-pill px-5 shadow-sm">Get in Touch</a>
  </div>
</section>

@endsection
