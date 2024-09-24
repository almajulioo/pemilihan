<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemilihanController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/pemilihan', [PemilihanController::class, 'create'])->name('pemilihan.create');
Route::put('/pemilihan/{id}', [PemilihanController::class, 'update'])->name('pemilihan.update');
Route::delete('/pemilihan/{id}', [PemilihanController::class, 'delete'])->name('pemilihan.delete');