<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.layout');
});

Route::get('/index', function () {
    return view('layouts.layout');
});

Route::get('/contact', function () {
    return view('home.index');
});