<?php

use App\Http\Controllers\backoffice\BackProductController;
use App\Http\Controllers\backoffice\CategoryController;
use App\Http\Controllers\backoffice\Order_productController;
use App\Http\Controllers\backoffice\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);
Route::post('/cart', [CartController::class, 'index']);
Route::get('/product', [ProductController::class, 'index' , "formatPrice"]);
Route::get('/product/{id}', [ProductController::class, 'show']);
////////////////////////////////////////////////////////////////
Route::get('/backoffice', [BackProductController::class, 'index']);
//////////////////////////////////////////
Route::get('/backoffice/products', [BackProductController::class, 'index']);
Route::get('/backoffice/products/add', [BackProductController::class, 'create']);
Route::post('/backoffice', [BackProductController::class, 'store']);
//////////////////////////////////////////////////
Route::delete('/backoffice/{id}/delete', [BackProductController::class, 'destroy']);
////////////////////////////////
Route::get('/backoffice/products/edite/{id}', [BackProductController::class, 'edite']);
Route::put('/backoffice/{id}', [BackProductController::class, 'update']);
////////////////////////////////////////////////
Route::get('/backoffice/orders' , [OrderController::class, 'index']);
Route::get('/backoffice/category' , [CategoryController::class, 'index']);
Route::get('/backoffice/customer' , [CustomerController::class, 'index']);
//////////////////////////////////
Route::get('/backoffice/ordersProduct' , [Order_productController::class, 'index']);










