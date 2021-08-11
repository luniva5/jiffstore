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
Route::get('/main', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::post("/login",[UserController::class,'login']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("search",[ProductController::class,'search']);

//Route::get('/', function () {
//   return view('product');
//});
//details
Route::get('/details.book', function () {
    return view('details.book');
});
Route::get('/details.joggers', function () {
    return view('details.joggers');
});
Route::get('/details.flannel', function () {
    return view('details.flannel');
});
Route::get('/details.hoodie', function () {
    return view('details.hoodie');
});
Route::get('/details.converse', function () {
    return view('details.converse');
});
Route::get('/details.chain', function () {
    return view('details.chain');
});
Route::get('/details.leather', function () {
    return view('details.leather');
});
Route::get('/details.bag', function () {
    return view('details.bag');
});
Route::get('/details.bikershorts', function () {
    return view('details.bikershorts');
});
Route::get('/details.graphictee', function () {
    return view('details.graphictee');
});
Route::get('/details.croptop', function () {
    return view('details.croptop');
});
Route::get('/details.cargopants', function () {
    return view('details.cargopants');
});
Route::get('/checkout', function () {
    return view('checkout');
});