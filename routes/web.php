<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index')->name('index'); // 首页
Route::view('about-us', 'about-us')->name('about-us'); // 关于我们
Route::view('contact-us', 'contact-us')->name('contact-us'); // 联系我们
Route::get('products/{product}', [ProductsController::class, 'show'])->name('products.show'); // 产品详情