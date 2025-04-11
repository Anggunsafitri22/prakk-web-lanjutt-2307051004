<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Ini adalah tempat untuk mendaftarkan route web dalam aplikasi Laravel.
| Semua route ini dimuat oleh RouteServiceProvider dalam grup "web".
|
*/

// Halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Profile
Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/profile/{nama}/{kelas}/{npm}', [ProfileController::class, 'profile']);

// CRUD User
Route::get('/users', [UserController::class, 'index'])->name('users.index'); // List User
Route::get('/user/create', [UserController::class, 'create'])->name('user.create'); // Form Tambah User
Route::post('/user/store', [UserController::class, 'store'])->name('user.store'); // Simpan User
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit'); // Form Edit User
Route::put('/user/update/{id}', [UserController::class, 'update'])->name('user.update'); // Update User
Route::delete('/user/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy'); // Hapus User
