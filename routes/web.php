<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', [DashboardController::class,'index']);

Route::resource('kategori', CategoryController::class);
Route::resource('produk', ProductController::class);