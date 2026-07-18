<?php

use App\Http\Controllers\VideojuegoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/videojuegos', [VideojuegoController::class, 'index'])->name('videojuegos.index');