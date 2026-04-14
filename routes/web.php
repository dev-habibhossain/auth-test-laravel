<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/login', [CustomAuthController::class, 'showLoginForm'])->name('login');

Route::post('/custom-login', [CustomAuthController::class, 'loginSubmit'])->name('login.submit');