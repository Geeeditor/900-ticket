<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::any('/', function () {
    return redirect()->route('index');
});

Route::get('/index', function () {
    return view('welcome');
})->name('index');

Route::get('/auth', [authController::class, 'index'])->name('login');

Route::get('/auth/otp', function() {
    return view('auth.auth');
})->name('auth.otp')->middleware('auth');

Route::post('/auth/login', [authController::class, 'login'])->name('auth.login');

Route::post('/auth/register', [authController::class, 'register'])->name('auth.register');

Route::get('/flight', function () {
    return view('pages/flight-views/index');
})->name('index.flight')->middleware('auth');

Route::get('/logout', [authController::class, 'logout'])->name('logout');

Route::fallback(function() {
    return view('fallback');
});
