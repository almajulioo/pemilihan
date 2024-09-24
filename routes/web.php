<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KandidatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemilihanController;
use App\Http\Controllers\Frontend\BerandaController;
use App\Http\Controllers\Dashboard\DashboardController;


// Route no middleware

Route::get('/login', [AuthController::class,'loginForm'])->name('login');
Route::post('/login', [AuthController::class,'loginAction']);
Route::get('/register', [AuthController::class,'registerForm'])->name('register');
Route::post('/register', [AuthController::class,'registerAction']);

// Need to login
Route::middleware('auth')->group(function () {
    // Frontend
    Route::get('/', [BerandaController::class, 'index'])->name('frontend.beranda');
   
    // Role has to be admin
    Route::middleware('checkRole:admin')->group(function () {
        // Dashboard
        Route::get('/dashboard/pemilihan', [DashboardController::class, 'pemilihan'])->name('dashboard.pemilihan');

        Route::post('/pemilihan', [PemilihanController::class, 'create'])->name('pemilihan.create');
        Route::put('/pemilihan/{id}', [PemilihanController::class, 'update'])->name('pemilihan.update');
        Route::delete('/pemilihan/{id}', [PemilihanController::class, 'delete'])->name('pemilihan.delete');

        Route::post('/kandidat', [KandidatController::class, 'create'])->name('kandidat.create');
        Route::put('/kandidat/{id}', [KandidatController::class, 'update'])->name('kandidat.update');
        Route::delete('/kandidat/{id}', [KandidatController::class, 'delete'])->name('kandidat.delete');
    });

    // Logout
    Route::get('/logout', [AuthController::class,'logout'])->name('logout');

});

