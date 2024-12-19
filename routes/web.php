<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('main');
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