<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Akademik') | Project 8</title>

    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-icons/bootstrap-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="guest-page bg-light">
    <nav class="navbar bg-white border-bottom shadow-sm">
        <div class="container">
            <a href="{{ route('welcome') }}" class="navbar-brand d-flex align-items-center gap-2">
                <img src="{{ asset('img/delitekno.png') }}" class="guest-logo" alt="Logo">
                <span class="fw-bold">Sistem Akademik</span>
            </a>

            @auth
                <a href="{{ route('dashboard') }}" class="btn btn-primary">
                    <i class="bi bi-grid me-1"></i> Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary">
                    <i class="bi bi-box-arrow-in-right me-1"></i> Login
                </a>
            @endauth
        </div>
    </nav>

    <main class="container py-5">
        @yield('content')
    </main>

    <footer class="border-top bg-white text-secondary py-3">
        <div class="container">Project 8 Pemrograman Berbasis Web</div>
    </footer>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
