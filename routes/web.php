<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ProfileController;
use Illuminate\Support\Facades\Route;

// ...

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/home', [LoginController::class, 'home'])->name('home')->middleware('auth');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile');
    Route::get('/setting', [ProfileController::class, 'showSetting'])->name('setting');
    Route::post('/update-profile', [ProfileController::class, 'updateProfile'])->name('updateProfile');
    Route::post('/update-password', [ProfileController::class, 'updatePassword'])->name('updatePassword');

});