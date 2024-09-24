<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemilihanController;


// Route no middleware
Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/login', [AuthController::class,'loginForm'])->name('login');
Route::post('/login', [AuthController::class,'loginAction']);
Route::get('/register', [AuthController::class,'registerForm'])->name('register');
Route::post('/register', [AuthController::class,'registerAction']);

// Need to login
Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class,'logout'])->name('logout');
   
    // Role has to be admin
    Route::middleware('checkRole:admin')->group(function () {
        Route::post('/pemilihan', [PemilihanController::class, 'create'])->name('pemilihan.create');
        Route::put('/pemilihan/{id}', [PemilihanController::class, 'update'])->name('pemilihan.update');
        Route::delete('/pemilihan/{id}', [PemilihanController::class, 'delete'])->name('pemilihan.delete');
    });
});