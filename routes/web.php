<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth'])->group(function () {
    Route::resource('users', UserController::class);

    Route::put('/users/{id}/approve', [UserController::class, 'approve'])->name('users.approve');
    Route::put('/users/{id}/in-progress', [UserController::class, 'inProgress'])->name('users.inProgress');
    Route::put('/users/{id}/decline', [UserController::class, 'decline'])->name('users.decline');
    Route::put('/users/{id}/archive', [UserController::class, 'archive'])->name('users.archive');
});
