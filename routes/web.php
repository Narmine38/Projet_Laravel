<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
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
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::post('/product', [ProductController::class, 'store']);
Route::post('/cart', [CartController::class, 'index']);
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
















/////////////////////////////
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});









