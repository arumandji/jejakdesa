<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\DashboardController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/about', function () {
    return view('desa.about');
});

Route::get('/usaha', function () {
    return view('desa.usaha');
});

Route::get('/contact', function () {
    return view('desa.contact');
});

Route::get('/testimoni', function () {
    return view('desa.testimoni');
});

Route::get('/peta', function () {
    return view('desa.peta');
});

Route::get('/rekomendasi', function () {
    return view('desa.rekomendasi');
});

Route::get('/event', function () {
    return view('desa.event');
});

Route::get('/booking', function () {
    return view('desa.booking');
});

Route::get('/wisata/desa-lembah-hijau', function () {
    return view('wisata.desa-lembah-hijau');
});

Route::get('/wisata/desa-air-jernih', function () {
    return view('wisata.desa-air-jernih');
});

Route::get('/wisata/desa-bambu-rindu', function () {
    return view('wisata.desa-bambu-rindu');
});

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [LoginController::class, 'registerForm'])->name('register');

// Rute untuk proses register (POST)
Route::post('/register', [LoginController::class, 'register'])->name('register.post');

// Route::get('/dashboard', function () {
//     return view('home');
// })->middleware('auth');

    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');