<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ProfileController;

// Route::any('/', function () {
//     return redirect()->route('index');
// });

Route::get('/index', function () {
    return view('welcome');
})->name('index');

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
})->middleware('user')->name('dashboard');

Route::get('/admin', function() {
    // return view('admin.pages.index');
    return view('admin.pages.index');

})->middleware('admin')->name('admin.index');

/* Route::get('/admin', function () {
    return view('dashboard');
})->middleware(['auth', 'admin'])->name('dashboard'); */



Route::get('/events/latest', [EventsController::class, 'showEvents'])->name('events.index');

Route::get('/events/latest', [EventsController::class, 'showEvents'])->name('events.index');

Route::get('/events/1/view', [EventsController::class, 'viewEvents'])->name('events.view');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
