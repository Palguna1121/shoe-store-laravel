<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\SizeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;

//guest
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/product', [HomeController::class, 'product'])->name('home.product');
Route::get('/product-detail/{id}', [HomeController::class, 'productDetail'])->name('home.product.detail');
Route::post('/cart/store/{id}', [HomeController::class, 'addToCart'])->name('cart.store');
Route::get('/cart/{id}', [HomeController::class, 'cart'])->name('cart.index');
Route::put('/cart/update/{id}', [HomeController::class, 'updateCart'])->name('cart.update');
Route::delete('/cart/delete/{id}', [HomeController::class, 'removeCart'])->name('cart.destroy');

//auth
Route::get('/auth', [AuthController::class, 'auth'])->name('auth');
Route::post('/auth/login', [AuthController::class, 'postLogin'])->name('auth.login');
Route::post('/auth/register', [AuthController::class, 'postRegister'])->name('auth.register');
Route::post('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

//admin
Route::prefix('admin')->group(function () {
    //dashboard
    Route::get('/home', [AdminController::class, 'index'])->name('admin.index');

    //size
    Route::get('/size', [SizeController::class, 'index'])->name('size.index');
    Route::get('/size/create', [SizeController::class, 'create'])->name('size.create');
    Route::post('/size/store', [SizeController::class, 'store'])->name('size.store');
    Route::get('/size/edit/{id}', [SizeController::class, 'edit'])->name('size.edit');
    Route::put('/size/update/{id}', [SizeController::class, 'update'])->name('size.update');
    Route::delete('/size/delete/{id}', [SizeController::class, 'destroy'])->name('size.destroy');

    //product
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/delete/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
});
