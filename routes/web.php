<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => redirect(auth()->check() ? '/homepage' : '/login'));

Route::middleware("guest")->group(function () {
    Route::get('/register', [RegisterController::class, 'create']);
    Route::post('/register', [RegisterController::class, 'store']);

    Route::get('/login', [SessionController::class, 'create']);
    Route::post('/login', [SessionController::class, 'store']);
});

Route::middleware("auth")->group(function () {
    Route::delete('/logout', [SessionController::class, 'destroy']);

    Route::get('/homepage', function () {
        return view('homepage');
    });
});
