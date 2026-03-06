<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruBkController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\WaliKelasController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/tentang', 'tentang')->name('tentang');
    Route::get('/materi', 'materi')->name('materi');
    Route::get('/informasi', 'informasi')->name('informasi');
});

// ================== AUTH ==================
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

// ================== ADMIN ==================
Route::middleware(['auth','role:admin'])
    ->prefix('admin')
    ->group(function () {

    // Dashboard 
    Route::get('/', [AdminController::class, 'dashboard'])
        ->name('admin.dashboard');

    // CRUD data
    Route::resource('data-guru', GuruBkController::class);
    Route::resource('data-siswa', SiswaController::class);
    Route::resource('data-wali-kelas', WaliKelasController::class);

});

// ================== GURU BK ==================
Route::middleware(['auth','role:guru_bk'])
    ->prefix('guru_bk')
    ->group(function () {

    // Dashboard 
    Route::get('/', [AdminController::class, 'dashboard'])
        ->name('guru_bk.dashboard');

    // CRUD data
    Route::resource('data-guru', GuruBkController::class);
    Route::resource('data-siswa', SiswaController::class);
    Route::resource('data-wali-kelas', WaliKelasController::class);

});


// ================== SISWA ==================
Route::middleware(['auth','role:siswa'])
    ->prefix('siswa')
    ->group(function () {

    Route::get('/', [SiswaController::class, 'dashboard'])
        ->name('siswa.dashboard');

});