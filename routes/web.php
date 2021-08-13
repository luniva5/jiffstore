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

Route::get('/laravel', function () {
   return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::view('/register','register');
Route::post("/login",[UserController::class,'login']);
Route::post("/register",[UserController::class,'register']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("search",[ProductController::class,'search']);
Route::get("cart",[ProductController::class,'cart']);
Route::get("removecart/{id}",[ProductController::class,'removeCart']);
Route::get("ordernow",[ProductController::class,'orderNow']);
Route::post("placeorder",[ProductController::class,'placeOrder']);
Route::get("myorders",[ProductController::class,'myOrders']);
//Route::get('/', function () {
//   return view('product');
//});
//details

Route::get('/checkout', function () {
    return view('checkout');
});