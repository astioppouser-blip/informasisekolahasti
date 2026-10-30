
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformasiController;

// Halaman Beranda
Route::get('/', [HomeController::class, 'index']);

// Halaman Profil Sekolah
Route::get('/profil', [HomeController::class, 'profil']);

// Halaman Daftar Guru
Route::get('/guru', [InformasiController::class, 'guru']);

// Halaman Kegiatan
Route::get('/kegiatan', [InformasiController::class, 'kegiatan']);

// Halaman Detail Kegiatan
Route::get('/kegiatan/{id}', [InformasiController::class, 'detailKegiatan']);
