<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Category\CategoryController;
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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/product/create',[ProductController::class, 'create'])->name('products.create');
Route::post('/product/store',[ProductController::class, 'store'])->name('products.store');
Route::get('/category/create',[CategoryController::class,'create'])->name('categories.create');
Route::post('/category/store',[CategoryController::class,'store'])->name('categories.store');
