<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Suendri">
    <title>@yield('title', 'Dashboard') | Project 8</title>

    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap-icons/bootstrap-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="d-flex" id="wrapper">
        <aside class="text-dark" id="sidebar-wrapper">
            <header class="sidebar-heading text-center position-relative">
                <button class="btn btn-sm btn-outline-secondary d-md-none position-absolute top-0 end-0 m-2 menu-toggle" type="button" aria-label="Tutup menu">
                    <i class="bi bi-x-lg"></i>
                </button>
                <img src="{{ asset('img/delitekno.png') }}" class="brand" alt="Logo">
                <div class="fw-bold mt-2">Sistem Akademik</div>
            </header>

            <nav class="list-group list-group-flush p-3 gap-1">
                <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action rounded {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <i class="bi bi-house-door me-2"></i> Dashboard
                </a>
                <a href="{{ route('mahasiswa.index') }}" class="list-group-item list-group-item-action rounded {{ request()->routeIs('mahasiswa.*') ? 'active' : '' }}">
                    <i class="bi bi-people me-2"></i> Mahasiswa
                </a>
                <a href="{{ route('dosen.index') }}" class="list-group-item list-group-item-action rounded {{ request()->routeIs('dosen.*') ? 'active' : '' }}">
                    <i class="bi bi-person-badge me-2"></i> Dosen
                </a>
                <a href="{{ route('matakuliah.index') }}" class="list-group-item list-group-item-action rounded {{ request()->routeIs('matakuliah.*') ? 'active' : '' }}">
                    <i class="bi bi-journal-bookmark me-2"></i> Matakuliah
                </a>
            </nav>
        </aside>

        <div class="sidebar-overlay menu-toggle"></div>

        <div id="page-content-wrapper">
            <nav class="navbar bg-white border-bottom shadow-sm px-3 sticky-top">
                <button class="btn btn-outline-primary menu-toggle" type="button" aria-label="Tampilkan atau sembunyikan menu">
                    <i class="bi bi-list fs-5"></i>
                </button>
                <span class="navbar-brand ms-3 mb-0 h1">Akademik</span>

                <div class="d-flex align-items-center gap-2 ms-auto">
                    <span class="text-secondary d-none d-sm-inline">
                        <i class="bi bi-person-circle me-1"></i>{{ auth()->user()->name }}
                    </span>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger btn-sm">
                            <i class="bi bi-box-arrow-right me-1"></i> Logout
                        </button>
                    </form>
                </div>
            </nav>

            <main class="container-fluid p-3 p-md-4">
                @yield('content')
            </main>

            <footer class="bg-white border-top text-secondary px-4 py-3">
                Project 8 Pemrograman Berbasis Web
            </footer>
        </div>
    </div>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
