<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('backend/beranda', [BerandaController::class, 'berandaBackend'])->name('backend.beranda');