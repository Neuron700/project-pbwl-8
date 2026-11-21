<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MatakuliahController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/mahasiswa', MahasiswaController::class)->except('show');
    Route::get('/dosen', [DosenController::class, 'index'])->name('dosen.index');
    Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index');
});
