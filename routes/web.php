<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Shop\HomeController::class, 'index'])->name('home');
