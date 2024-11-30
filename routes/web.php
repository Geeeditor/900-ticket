<?php

use Illuminate\Support\Facades\Route;

Route::any('/', function () {
    return redirect()->route('index');
});

Route::get('/index', function () {
    return view('welcome');
})->name('index');

Route::any('/flight', function () {
    return view('pages/flight-views/index');
})->name('index.flight');

Route::fallback(function() {
    return view('fallback');
});

