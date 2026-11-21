@extends('layouts.dashboard')

@section('title', 'Edit Mahasiswa')

@section('content')
    <div class="mb-4">
        <h2 class="fw-bold mb-1">Edit Mahasiswa</h2>
        <p class="text-secondary mb-0">Perbarui data mahasiswa.</p>
    </div>

    <div class="row">
        <div class="col-12 col-lg-7">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <form action="{{ route('mahasiswa.update', $mahasiswa) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim" value="{{ old('nim', $mahasiswa->nim) }}">
                            @error('nim')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $mahasiswa->nama) }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="4">{{ old('alamat', $mahasiswa->alamat) }}</textarea>
                            @error('alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-floppy me-1"></i> Update
                            </button>
                            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">
                                <i class="bi bi-x-circle me-1"></i> Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
