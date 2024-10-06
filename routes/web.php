<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Customer\CustomerAuthController;
use App\Http\Controllers\Frontend\Customer\ProfileController;

Route::get('/', [\App\Http\Controllers\Shop\HomeController::class, 'index'])->name('home');
Route::get('/shop', [\App\Http\Controllers\Shop\ShopController::class, 'shop'])->name('shop');
Route::get('/product-category/{category}', [\App\Http\Controllers\Shop\CategoryController::class, 'category'])->name('category');
Route::get('/product/{product}', [\App\Http\Controllers\Shop\ProductController::class, 'product'])->name('product');


Route::get('customer/login', [CustomerAuthController::class, 'showLoginForm'])->name('customer.login');
Route::post('customer/login', [CustomerAuthController::class, 'login']);

Route::get('customer/register', [CustomerAuthController::class, 'showRegistrationForm'])->name('customer.register');
Route::post('customer/register', [CustomerAuthController::class, 'register']);

Route::post('customer/logout', [CustomerAuthController::class, 'logout'])->name('customer.logout');

Route::get('customer/profile', [ProfileController::class, 'profile'])->name('customer.profile'); 
Route::post('customer/save-address', [ProfileController::class, 'saveAddress'])->name('customer.profile.add.address');


// Dashboard route (add authentication middleware)
Route::get('customer/dashboard', function () {
    return 'Customer Dashboard';
})->middleware('auth:customer')->name('customer.dashboard');