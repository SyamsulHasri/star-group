@extends('layouts.app')

@section('content')
<section class="d-flex align-items-center justify-content-center vh-100 bg-light text-center">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        
        <!-- Error Icon / Illustration -->
        <div class="mb-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="text-danger bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.964 0L.165 13.233c-.457.778.091 1.767.982 1.767h13.706c.89 0 1.439-.99.982-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1-2.004 0 1 1 0 0 1 2.004 0z"/>
          </svg>
        </div>

        <!-- Error Text -->
        <h1 class="display-1 fw-bold text-danger">404</h1>
        <h2 class="fw-semibold mb-3">Page Not Found</h2>
        <p class="text-muted mb-4">Oops! The page you’re looking for doesn’t exist or has been moved.</p>

        <!-- CTA Buttons -->
        <div class="d-flex justify-content-center gap-3">
          <a href="{{ url('/') }}" class="btn btn-danger btn-lg px-4 shadow-sm">Go Home</a>
          <a href="{{ url()->previous() }}" class="btn btn-outline-secondary btn-lg px-4">Go Back</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Custom CSS for subtle animation -->
<style>
  body {
    overflow-x: hidden;
  }
  svg {
    animation: float 2s ease-in-out infinite;
  }
  @keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-8px); }
  }
</style>
@endsection
