<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\UtenteController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::post('/register', [UtenteController::class, 'store'])->name('register');