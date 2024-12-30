<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::any('/', function () {
//     return redirect()->route('index');
// });

// Route::get('/index', function () {
//     return view('welcome');
// })->name('index');

// Route::get('/auth', [authController::class, 'index'])->name('login');

// Route::get('/auth/otp', function() {
//     return view('auth.auth');
// })->name('auth.otp')->middleware('auth');

// Route::post('/auth/login', [authController::class, 'login'])->name('auth.login');

// Route::post('/auth/register', [authController::class, 'register'])->name('auth.register');

// Route::get('/flight', function () {
//     return view('pages/flight-views/index');
// })->name('index.flight')->middleware('auth');

// Route::get('/logout', [authController::class, 'logout'])->name('logout');

Route::fallback(function() {
    return view('fallback');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
