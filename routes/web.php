<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('main');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/about', function () {
    return view('partials.about');
});

Route::get('/usaha', function () {
    return view('partials.usaha');
});

Route::get('/contact', function () {
    return view('partials.contact');
});

Route::get('/testimoni', function () {
    return view('partials.testimoni');
});

Route::get('/peta', function () {
    return view('desa.peta');
});