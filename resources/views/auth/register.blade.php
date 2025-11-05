@extends('layouts.app')

@section('content')

{{-- FOR SHOWING THE REGISTER PAGE ONLY AS DISABLED --}}

<section class="min-vh-100 d-flex align-items-center justify-content-center" 
         style="background: linear-gradient(135deg, #ff7b00 0%, #dc3545 100%);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="card border-0 shadow-lg p-4 rounded-4 bg-white bg-opacity-75 backdrop-blur">
          <div class="card-body text-center">

            <!-- Logo -->
            <div class="mb-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" 
                   class="bi bi-person-plus-fill text-danger" viewBox="0 0 16 16">
                <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm5.5-3a.5.5 0 0 1 .5.5V6h1.5a.5.5 0 0 1 0 1H12v1.5a.5.5 0 0 1-1 0V7H9.5a.5.5 0 0 1 0-1H11V5.5a.5.5 0 0 1 .5-.5z"/>
                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1z"/>
              </svg>
            </div>

            <!-- Title -->
            <h3 class="fw-bold mb-4 text-danger">Create Account</h3>

            <!-- Register Form -->
            <form method="POST" action="{{ route('register') }}">
              @csrf

              <div class="mb-3 text-start">
                <label for="name" class="form-label fw-semibold">Full Name</label>
                <input id="name" type="text" 
                       class="form-control form-control-lg rounded-pill" 
                       name="name" placeholder="Enter your full name" required disabled autofocus>
              </div>

              <div class="mb-3 text-start">
                <label for="email" class="form-label fw-semibold">Email Address</label>
                <input id="email" type="email" 
                       class="form-control form-control-lg rounded-pill" 
                       name="email" placeholder="Enter your email" disabled required>
              </div>

              <div class="mb-3 text-start">
                <label for="password" class="form-label fw-semibold">Password</label>
                <input id="password" type="password" 
                       class="form-control form-control-lg rounded-pill" 
                       name="password" placeholder="Create a password" disabled required>
              </div>

              <div class="mb-4 text-start">
                <label for="password_confirmation" class="form-label fw-semibold">Confirm Password</label>
                <input id="password_confirmation" type="password" 
                       class="form-control form-control-lg rounded-pill" 
                       name="password_confirmation" placeholder="Re-enter password" disabled required>
              </div>

              <button type="submit" disabled class="btn btn-danger btn-lg w-100 rounded-pill shadow-sm">Register</button>
            </form>

            <hr class="my-4">

            <p class="text-muted mb-0">
              Already have an account? 
              <a href="{{ route('login') }}" class="text-danger fw-semibold text-decoration-none">Login here</a>
            </p>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Custom CSS -->
<style>
  body {
    overflow-x: hidden;
  }

  .backdrop-blur {
    backdrop-filter: blur(8px);
  }

  .card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .card:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
  }

  input:focus {
    box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
    border-color: #dc3545;
  }
</style>
@endsection

