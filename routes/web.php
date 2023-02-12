<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
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

Route::get('/', [ProductController::class, 'index']);

Route::get('/product/{slug}', [ProductController::class, 'show']);

Route::post('/addtocart', [ProductController::class, 'add_to_cart']);

Route::post('/login', [AuthController::class, 'login']);

Route::get('/login', [AuthController::class, 'index']);

// Route::post('/logout', [AuthController::class, 'logout']);

Route::resource('/cart', TransactionController::class)->middleware('auth');

// Route::put('/cart/remove/{id}', [TransactionController::class, 'destroy']);

Route::get('/categories', function(){
    return view('categories');
});

Route::get('/register', function(){
    return view('auth.register');
});