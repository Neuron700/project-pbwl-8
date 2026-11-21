@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
    <div class="mb-4">
        <h2 class="fw-bold mb-1">Dashboard</h2>
        <p class="text-secondary mb-0">Sistem akademik menggunakan Framework Laravel 12.</p>
    </div>

    <div class="alert alert-primary d-flex align-items-center" role="alert">
        <i class="bi bi-info-circle-fill fs-4 me-3"></i>
        <div>Selamat datang, {{ auth()->user()->name }}, di aplikasi Sistem Akademik.</div>
    </div>
@endsection
