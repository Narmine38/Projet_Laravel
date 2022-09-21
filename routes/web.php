<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
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

Route::get('/', [HomeController::class, 'home']);
Route::get('/cart', [CartController::class, 'index']);
Route::get('/product', [ProductController::class, 'listeProduits']);
Route::get('/product/{id}', [ProductController::class, 'ficheduProduit']);
////////////////////////////////////////////////////////////////
Route::get('/byName', [ProductController::class, 'byName']);
Route::get('/byPrice', [ProductController::class, 'byPrice']);
Route::get('/byPriceName/{id}', [ProductController::class, 'byPriceName']);
//////////////////////////////////////////
Route::get('/backoffice', [BackController::class, 'index']);

Route::get('/backoffice/products', [BackController::class, 'products']);

Route::get('/backoffice/products/add', [BackController::class, 'create']);
Route::post('/backoffice', [BackController::class, 'store']);

Route::delete('/backoffice/{id}/delete', [BackController::class, 'delete']);

Route::get('/backoffice/products/edite/{id}', [BackController::class, 'edite']);
Route::put('/backoffice/{id}', [BackController::class, 'update']);











