<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/password/request', function () {
    return view('auth.passwords.email');
})->name('password.request');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::resource('users', UserController::class);

    Route::put('/users/{id}/approve', [UserController::class, 'approve'])->name('users.approve');
    Route::put('/users/{id}/in-progress', [UserController::class, 'inProgress'])->name('users.inProgress');
    Route::put('/users/{id}/decline', [UserController::class, 'decline'])->name('users.decline');
    Route::put('/users/{id}/archive', [UserController::class, 'archive'])->name('users.archive');
});

Route::get('/privacy-policy', function () {
    return view('pages.privacy-policy');
})->name('privacy.policy');


Route::get('/user-homepage', function () {
    return view('user-homepage');
});

Route::get('/user-document-request', function () {
    return view('user-document-request');
});

Route::get('/user-complaint', function () {
    return view('user-complaint');
});

Route::get('/user-profile', function () {
    return view('user-profile');
});

Route::get('/superadmin-dashboard', function () {
    return view('superadmin-dashboard');
});

Route::get('/superadmin-user', function () {
    return view('superadmin-user');
});


