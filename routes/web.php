<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/details/{id}', [DetailController::class, 'index'])->name('detail');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/success', [CartController::class, 'success'])->name('success');

// Route::get('/register/', [RegisterController::class, 'success'])->name('register-success');

// Route::get('/', 'HomeController@index')->name('home');

// Route::get('/categories', 'CategoryController@index')->name('categories');
// Route::get('/categories/{id}', 'CategoryController@detail')->name('categories-detail');

// Route::get('/details/{id}', 'DetailController@index')->name('detail');
// Route::post('/details/{id}', 'DetailController@add')->name('detail-add');

// Route::get('/success', 'CartController@success')->name('success');
// Route::post('/checkout/callback', 'CheckoutController@callback')->name('midtrans-callback');
// Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');
