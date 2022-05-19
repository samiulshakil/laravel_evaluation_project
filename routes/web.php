<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontendController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//user info
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
Route::get('/users/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
Route::get('/users/{id}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::post('/users/update', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::delete('/users/delete/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');

//products route 
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::post('/products/update', [ProductController::class, 'update'])->name('products.update');
Route::delete('products/destroy/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('products/show/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('products/variant/{id}', [ProductController::class, 'createVariant'])->name('products.variant.create');
Route::Post('products/variant', [ProductController::class, 'storeVariant'])->name('products.variant.store');

//frontend
Route::get('/frontend', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/frontend/product/{slug}', [FrontendController::class, 'productItem'])->name('frontend.product.item');
Route::post('frontend/product/price', [FrontendController::class, 'priceList'])->name('product.price');
Route::post('frontend/product/color', [FrontendController::class, 'colorList'])->name('product.color');