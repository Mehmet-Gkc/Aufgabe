<?php

// Hier importieren wir die Dateien HomeController und ContactController, die wir im Ordner app/http/controller erstellt haben, um den Router zu nutzen
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontaktController;

use Illuminate\Support\Facades\Route;

// Routes
Route::get('/', [HomeController::class,'index']);
Route::get('/index', [HomeController::class,'index']);
Route::get('/überuns', [HomeController::class,'überuns']);

Route::get('/kontakt', [KontaktController::class,'show'])->name('kontakt.show');
Route::post('/kontakt', [KontaktController::class,'send'])->name('kontakt.send');
Route::get('/message', [KontaktController::class,'receiveMessage'])->name('kontakt.message');