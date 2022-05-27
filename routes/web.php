<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/order', [OrderController::class,'dataOrder'])->name('orders');

Route::post('/order', [OrderController::class,'saveOrder'])->name('orders');

/*Route::get('/product', function () {
    return view('product');
})->name('products');*/

Route::get('/product', [ProductController::class,'index'])->name('products');

Route::post('/product', [ProductController::class,'saveProduct'])->name('products');

