<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//guest
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/product', [HomeController::class, 'product'])->name('home.product');

//auth
Route::get('/auth/login', [HomeController::class, 'login'])->name('auth.login');
Route::post('/auth/login', [HomeController::class, 'postLogin'])->name('auth.login.post');
Route::get('/auth/register', [HomeController::class, 'register'])->name('auth.register');
Route::post('/auth/register', [HomeController::class, 'postRegister'])->name('auth.register.post');
Route::post('/auth/logout', [HomeController::class, 'logout'])->name('auth.logout');

//admin
Route::prefix('admin')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('admin.index');
    Route::get('/product', [HomeController::class, 'product'])->name('admin.product');
});
