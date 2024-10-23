<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Shop\HomeController::class, 'index'])->name('home');
Route::get('/shop', [\App\Http\Controllers\Shop\ShopController::class, 'shop'])->name('shop');
Route::get('/product-category/{category}', [\App\Http\Controllers\Shop\CategoryController::class, 'category'])->name('category');
Route::get('/product/{product}', [\App\Http\Controllers\Shop\ProductController::class, 'product'])->name('product');
Route::post('/add-to-cart', [\App\Http\Controllers\Shop\CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [\App\Http\Controllers\Shop\CartController::class, 'viewCart'])->name('cart.view');
Route::get('/checkout', [\App\Http\Controllers\Shop\CheckoutController::class, 'checkout'])->name('checkout');
Route::post('/place-order', [\App\Http\Controllers\Shop\CheckoutController::class, 'placeOrder'])->name('order.place');
Route::get('/get-count', [\App\Http\Controllers\Shop\CartController::class, 'getCount']);
Route::post('/cart/remove', [\App\Http\Controllers\Shop\CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/remove-all', [\App\Http\Controllers\Shop\CartController::class, 'emptyCart'])->name('cart.clear');
Route::post('/cart/update', [\App\Http\Controllers\Shop\CartController::class, 'update'])->name('cart.update');