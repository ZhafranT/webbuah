<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


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
    return view('layout/product');
});
Route::get('/',[ProductController::class,'index']);
Route::get("/search",[ProductController::class,'search']);
Route::post("addtocart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']);
Route::get("removeitem/{id}",[ProductController::class,'removeItem']);
Route::get("buynow",[ProductController::class,'buyNow']);
Route::post("myorder",[ProductController::class,'myOrder']);

