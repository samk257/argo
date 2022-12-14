<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;

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
Route::get('/product/{id}/details', [ProductController::class, 'productDetails'])->name('productDetails');
Route::get('/product/{id}/bycategory',[ProductController::class,'viewprodbycat'])->name('product.bycategory');
Route::get('/allregions',[FrontendController::class,'getallregions']);
Route::post('/searchProduct',[FrontendController::class,'searchProduct'])->name('searchProduct');



Route::get("address", [AddressController::class, 'index'])->name('address');
Route::resource("users", UserController::class);

Route::resource('category', App\Http\Controllers\CategoryController::class);

Route::resource('product', App\Http\Controllers\ProductController::class);
