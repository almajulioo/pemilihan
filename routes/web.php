<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard\KandidatDashboard;
use App\Http\Controllers\KandidatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemilihanController;
use App\Http\Controllers\Frontend\BerandaController;
use App\Http\Controllers\Dashboard\PemilihanDashboard;


// Route no middleware
Route::get('/login', [AuthController::class,'loginForm'])->name('login');
Route::post('/login', [AuthController::class,'loginAction']);
Route::get('/register', [AuthController::class,'registerForm'])->name('register');
Route::post('/register', [AuthController::class,'registerAction']);

// Need to login
Route::middleware('auth')->group(function () {
    // Frontend
    Route::get('/', [BerandaController::class, 'index'])->name('frontend.beranda');
    Route::get('/pemilihan/{id}', [BerandaController::class, 'pemilihan'])->name('frontend.pemilihan');
   
    // Role has to be admin
    Route::middleware('checkRole:admin')->group(function () {
        // Dashboard
        Route::prefix('/dashboard')->group(function () {
            Route::get('/pemilihan', [PemilihanDashboard::class, 'pemilihan'])->name('dashboard.pemilihan');
            Route::get('/pemilihan/tambah', [PemilihanDashboard::class, 'tambahPemilihan'])->name('dashboard.pemilihan.tambah');
            Route::get('/pemilihan/update/{id}', [PemilihanDashboard::class, 'updatePemilihan'])->name('dashboard.pemilihan.update');

            Route::get('/pemilihan/{id}/kandidat', [KandidatDashboard::class, 'tambahKandidat'])->name('dashboard.kandidat.tambah');
            Route::get('/pemilihan/{pemilihan_id}/kandidat/{id}', [KandidatDashboard::class, 'updateKandidat'])->name('dashboard.kandidat.update');
        });

        Route::prefix('/crud')->group(function () {
            // CRUD for Pemilihan
            Route::post('/pemilihan', [PemilihanController::class, 'create'])->name('pemilihan.create');
            Route::put('/pemilihan/{id}', [PemilihanController::class, 'update'])->name('pemilihan.update');
            Route::get('/pemilihan/{id}', [PemilihanController::class, 'delete'])->name('pemilihan.delete');
            
            // CRUD for Kandidat
            Route::post('/kandidat', [KandidatController::class, 'create'])->name('kandidat.create');
            Route::put('/kandidat/{id}', [KandidatController::class, 'update'])->name('kandidat.update');
            Route::get('/kandidat/{id}', [KandidatController::class, 'delete'])->name('kandidat.delete');
        });

    });

    // Logout
    Route::get('/logout', [AuthController::class,'logout'])->name('logout');

});

