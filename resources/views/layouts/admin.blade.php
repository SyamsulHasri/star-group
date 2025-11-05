<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Star Media Group') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
        body {
            overflow-x: hidden;
            background-color: #dcdbdb;
        }

        main {
            background-color: #f8f9fa; /* light neutral for contrast */
            margin-left: 250px;
            padding: 30px;
            min-height: calc(100vh - 140px);
            transition: all 0.3s ease;
        }
        main.expanded {
            margin-left: 70px;
        }


        /* === Sidebar Styling === */
        .sidebar {
            position: fixed;
            top: 70px; /* below navbar */
            left: 0;
            height: calc(100% - 70px);
            width: 250px;
            background: linear-gradient(180deg, #ff7a00 0%, #ff9a3d 60%, #ffe3c4 100%);
            box-shadow: 3px 0 12px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            z-index: 1;
            padding-top: 1rem;
            overflow-y: auto;
            color: #fff;
        }

        /* Sidebar links */
        .sidebar a {
            color: #fff;
            font-weight: 500;
            display: flex;
            align-items: center;
            padding: 12px 20px;
            border-radius: 8px;
            transition: background 0.2s ease, transform 0.2s ease;
            text-decoration: none;

        }

        /* Active / hover effects */
        .sidebar a:hover,
        .sidebar a.active {
            background: rgba(255, 255, 255, 0.15);
            transform: translateX(5px);
            text-decoration: none;
        }

        /* Icon styling */
        .sidebar i {
            margin-right: 10px;
            font-size: 1.2rem;
            color: #fff;
        }

        .sidebar.collapsed a span {
            display: none;
        }

        .sidebar.collapsed a i {
            margin-right: 0;
            text-align: center;
            width: 100%;
        }

        /* Main content */
        .main-content {
            margin-left: 250px;
            padding: 30px;
            transition: all 0.3s ease;
        }

        .main-content.expanded {
            margin-left: 70px;
        }

        /* === Footer === */
        footer.footer-section {
            margin-left: 250px;
            background: linear-gradient(90deg, #001b33 0%, #112d4e 100%);
            color: #fff;
            z-index: 10;
            position: relative;
            text-align: center;
            padding: 15px 0;
            box-shadow: 0 -3px 10px rgba(0, 0, 0, 0.2);
        }


        footer.footer-section.expanded {
            margin-left: 70px;
        }


        @media (max-width: 992px) {
            .sidebar {
                left: -250px;
            }

            .sidebar.show {
                left: 0;
            }

            .main-content {
                margin-left: 0;
            }

            footer.footer-section {
            margin-left: 0;
            }
        }
    </style>
</head>

<body>
    <div id="app" class="d-flex flex-column min-vh-100">

        <!-- Navbar -->
        <nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <div class="container-fluid px-md-5">
                <button id="sidebarToggle" class="btn btn-outline-light me-2 d-lg-none">
                    <i class="bi bi-list"></i>
                </button>

                <a class="navbar-brand" href="#">
                    <img src="{{asset('SMG.png')}}" alt="Logo" height="45">
                </a>

                <button id="navbarToggle" class="navbar-toggler" type="button"  data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsFurni">
                    <ul class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" 
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul id="navbarDropdown1" class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" style="right: 0;">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                    </li>
                                </ul>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Sidebar -->
        <div id="sidebar" class="sidebar">
            <a href="{{ route('dashboard') }}" class="@if (request()->routeIs('dashboard')) active @endif"><i class="bi bi-house-door"></i> <span>Dashboard</span></a>
            <a href="#"><i class="bi bi-shield-check"></i> <span>Consents</span></a>
            <a href="{{ route('users.index') }}" class="@if (request()->routeIs('users.index')) active @endif"><i class="bi bi-people"></i> <span>Users</span></a>
            {{-- <a href="#"><i class="bi bi-gear"></i> <span>Settings</span></a> --}}
        </div>

        <!-- Main Content -->
        <div id="main-content" class="main-content">
            <div class="mt-5 pt-4">

                {{-- breadcrumbs --}}
                @isset($breadcrumbs)
                    <x-breadcrumb :items="$breadcrumbs" />
                @endisset

                @yield('content')

            </div>
        </div>

        <!-- Footer -->
        <footer class="footer-section mt-auto bg-dark text-white text-center py-3">
            <div class="container">
                <p class="mb-0">© {{ date('Y') }} Star Media Group. All rights reserved.</p>
            </div>
        </footer>

    </div>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebarToggle');

        const navbarDropdown = document.getElementById('navbarDropdown');
        const navbarDropdown1 = document.getElementById('navbarDropdown1');

        const navbarsFurni = document.getElementById('navbarsFurni');
        const furniToggle = document.getElementById('navbarToggle');

        const mainContent = document.getElementById('main-content');
        const footer = document.getElementById('footer');

        sidebarToggle.addEventListener('click', () => {
            if (window.innerWidth < 992) {
                sidebar.classList.toggle('show');
            } else {
                sidebar.classList.toggle('collapsed');
                mainContent.classList.toggle('expanded');
                footer.classList.toggle('expanded');
            }
        });

        furniToggle.addEventListener('click', () => {
            navbarsFurni.classList.toggle('show');
        });

        navbarDropdown.addEventListener('click', () => {
            navbarDropdown1.classList.toggle('show');
        });
    </script>
</body>
</html>

