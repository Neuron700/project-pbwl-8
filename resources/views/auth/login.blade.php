@extends('layouts.guest')

@section('title', 'Login')

@section('content')
    <div class="card border-0 shadow-sm login-card">
        <div class="card-body p-4 p-md-5">
            <div class="text-center mb-4">
                <i class="bi bi-person-circle text-primary display-4"></i>
                <h2 class="fw-bold mt-2 mb-1">Login</h2>
                <p class="text-secondary mb-0">Masuk ke dashboard Sistem Akademik.</p>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <i class="bi bi-exclamation-circle me-1"></i> Email atau password salah.
                </div>
            @endif

            <form action="{{ route('login.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="admin@mail.com" required autofocus>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                    </div>
                </div>
                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Ingat saya</label>
                </div>
                <button type="submit" class="btn btn-primary w-100">
                    <i class="bi bi-box-arrow-in-right me-1"></i> Login
                </button>
            </form>
        </div>
    </div>
@endsection
