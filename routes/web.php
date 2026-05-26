<?php

use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rutas públicas (auth)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

// Rutas para Administrador
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('users', AdminUserController::class);
});

// Rutas para Usuario
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
});

require __DIR__.'/auth.php';
