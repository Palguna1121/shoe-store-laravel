<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//guest
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/product', [HomeController::class, 'product'])->name('home.product');
Route::get('/product-detail', [HomeController::class, 'productDetail'])->name('home.product.detail');
Route::get('/cart', [HomeController::class, 'cart'])->name('home.cart');

//auth
Route::get('/auth', [AuthController::class, 'auth'])->name('auth');
Route::post('/auth/login', [AuthController::class, 'postLogin'])->name('auth.login');
Route::post('/auth/register', [AuthController::class, 'postRegister'])->name('auth.register');
Route::post('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

//admin
Route::prefix('admin')->group(function () {
    Route::get('/home', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/product', [AdminController::class, 'product'])->name('admin.product');
});
