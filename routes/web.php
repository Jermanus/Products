<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\ProductController::class, 'index'])->name('home');

Route::middleware("auth")->group(function () {
    Route::get('products', [ProductController::class, 'index']);
    Route::get('products/{plan}', [ProductController::class, 'show'])->name("products.show");
    Route::post('subscription', [ProductController::class, 'subscription'])->name("subscription.create");
});

