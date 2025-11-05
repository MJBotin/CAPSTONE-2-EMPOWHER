<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
})->name('privacy.policy');