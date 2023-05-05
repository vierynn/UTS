<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;

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
    return view('chooseuser');
});

// GOLD LEVEL
Route::get('/user1', [UserController::class, 'index']);

Route::get('/user1/transaction', [TransactionController::class, 'index']);

Route::get('/user1/product', [ProductController::class, 'index5']);
Route::get('/user1/product/signature', [ProductController::class, 'index']);
Route::get('/user1/product/basic', [ProductController::class, 'index2']);
Route::get('/user1/product/cream', [ProductController::class, 'index3']);
Route::get('/user1/product/tea', [ProductController::class, 'index4']);

Route::get('add-form', [TransactionController::class, 'create']);
Route::post('store-form', [TransactionController::class, 'store']);

// GREEN LEVEL
Route::get('/user2', [UserController::class, 'index2']);

Route::get('/user2/transaction', [TransactionController::class, 'index2']);

Route::get('/user2/product', [ProductController::class, 'index10']);
Route::get('/user2/product/signature', [ProductController::class, 'index6']);
Route::get('/user2/product/basic', [ProductController::class, 'index7']);
Route::get('/user2/product/cream', [ProductController::class, 'index8']);
Route::get('/user2/product/tea', [ProductController::class, 'index9']);

Route::get('add-form2', [TransactionController::class, 'create2']);
Route::post('store-form2', [TransactionController::class, 'store2']);