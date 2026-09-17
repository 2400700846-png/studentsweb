<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/store', [ContactController::class, 'store'])->name('contact.store');


Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/forgot-password', [HomeController::class, 'forgot-password'])->name('forgot-password');

Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::get('/notification', [HomeController::class, 'notification'])->name('notification');

Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

Route::get('/register', [HomeController::class, 'register'])->name('register');

Route::get('/reset-password', [HomeController::class, 'reset-password'])->name('reset-password');
