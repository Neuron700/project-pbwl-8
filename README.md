# Project 8 - Laravel 12 dan Fortify

Project ini adalah pengembangan Sistem Akademik dari MVC sederhana menjadi
aplikasi menggunakan Framework Laravel 12.

## Materi

- Routing dan middleware.
- Controller dan resource controller.
- Eloquent Model.
- Migration dan seeder.
- Blade template.
- Validasi request.
- Authentication menggunakan Laravel Fortify.
- CRUD Mahasiswa.

CRUD Dosen dan Matakuliah disediakan sebagai latihan lanjutan mahasiswa.

## Menjalankan project

1. Buat database `dbakademik8`.
2. Jalankan `composer install` jika folder `vendor` belum tersedia.
3. Sesuaikan koneksi database pada `.env`.
4. Jalankan `php artisan migrate --seed`.
5. Buka `http://localhost/project8/public`.

## Akun awal

- Email: `admin@mail.com`
- Password: `admin`

## Route utama

- `/` - halaman guest.
- `/login` - halaman login Fortify.
- `/dashboard` - dashboard setelah login.
- `/mahasiswa` - CRUD Mahasiswa.
- `/dosen` - halaman latihan CRUD Dosen.
- `/matakuliah` - halaman latihan CRUD Matakuliah.
