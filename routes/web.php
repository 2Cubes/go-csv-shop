<?php

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

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');
Route::get('/category/{id}', [\App\Http\Controllers\IndexController::class, 'category'])->name('category');
Route::get('/product/{id}', [\App\Http\Controllers\IndexController::class, 'product'])->name('product');
Route::post('/send-request', [\App\Http\Controllers\RequestController::class, 'sendRequest'])->name('send.request');
