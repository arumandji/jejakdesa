<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('main');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/usaha', function () {
    return view('usaha');
});

Route::get('/tim', function () {
    return view('tim');
});

Route::get('/testimoni', function () {
    return view('testimoni');
});

Route::get('/peta', function () {
    return view('desa.peta');
});