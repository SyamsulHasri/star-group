@extends('layouts.app')

@section('content')
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
                   class="bi bi-person-circle text-danger" viewBox="0 0 16 16">
                <path d="M11 10a2 2 0 1 0-6 0a2 2 0 0 0 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.226 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg>
            </div>

            <!-- Title -->
            <h3 class="fw-bold mb-4 text-danger">Welcome Back</h3>

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
              @csrf

              <div class="mb-3 text-start">
                <label for="email" class="form-label fw-semibold">Email address</label>
                <input type="email" class="form-control form-control-lg rounded-pill" id="email" 
                       name="email" placeholder="Enter your email" required autofocus>
              </div>

              <div class="mb-3 text-start">
                <label for="password" class="form-label fw-semibold">Password</label>
                <input type="password" class="form-control form-control-lg rounded-pill" id="password" 
                       name="password" placeholder="Enter your password" required>
              </div>

              <div class="d-flex justify-content-between align-items-center mb-4">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember" name="remember">
                  <label class="form-check-label small" for="remember">Remember Me</label>
                </div>
                <a href="/ERROR-PAGE" class="small text-decoration-none text-danger">Forgot Password?</a>
              </div>

              <button type="submit" class="btn btn-danger btn-lg w-100 rounded-pill shadow-sm">Login</button>
            </form>

            <hr class="my-4">

            <p class="text-muted mb-0">Don't have an account? 
              <a href="{{ route('register') }}" class="text-danger fw-semibold text-decoration-none">Register here</a>
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

