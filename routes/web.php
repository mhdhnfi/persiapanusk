<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Hash;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/







Route::middleware(['guest'])->group(function () {
    
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login.validasi');   
});

Route::middleware(['auth'])->group(function () {
    
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('dashboard', DashboardController::class);
});

Route::middleware(['auth', 'role:pustakawan,admin'])->group(function () {
    
    Route::get('pustakawan', function () {
        return view('pustakawan');
    });

        Route::middleware(['auth', 'role:admin'])->group(function () {
            Route::get('admin', function () {
                return view('admin');
            });

            Route::resource('buku', BukuController::class);
            Route::resource('kategori', KategoriController::class);
            Route::resource('user', UserController::class);
        });
});