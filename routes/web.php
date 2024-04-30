<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/index', function () {
    return view('home.index');
});

Route::get('/überuns', function () {
    return view('überuns.überuns');
});

Route::get('/kontakt', function () {
    return view('kontakt.kontakt');
});