@extends('layouts.guest')

@section('title', 'Beranda')

@section('content')
    <div class="row align-items-center g-4 py-lg-5">
        <div class="col-12 col-lg-7">
            <span class="badge text-bg-primary mb-3">Project 8 &middot; Laravel 12</span>
            <h1 class="display-5 fw-bold">Sistem Akademik menggunakan Framework Laravel</h1>
            <p class="lead text-secondary">
                Pelajari pola MVC Laravel melalui routing, controller, Eloquent ORM,
                Blade template, migration, dan authentication dengan Fortify.
            </p>
            <a href="{{ auth()->check() ? route('dashboard') : route('login') }}" class="btn btn-primary btn-lg">
                <i class="bi bi-box-arrow-in-right me-1"></i>
                {{ auth()->check() ? 'Buka Dashboard' : 'Login' }}
            </a>
        </div>
        <div class="col-12 col-lg-5">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h5 class="fw-bold">Alur MVC Laravel</h5>
                    <ol class="text-secondary mb-0">
                        <li class="mb-2">Route menerima request.</li>
                        <li class="mb-2">Controller mengatur proses.</li>
                        <li class="mb-2">Eloquent Model mengakses database.</li>
                        <li>Blade View menampilkan halaman.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection
