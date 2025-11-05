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
