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
Route::get('/catalog', [\App\Http\Controllers\CatalogController::class, 'index'])->name('catalog');
Route::get('/category/{id}', [\App\Http\Controllers\CatalogController::class, 'category'])->name('category');
Route::get('/brand/{id}', [\App\Http\Controllers\CatalogController::class, 'brand'])->name('brand');
Route::get('/product/{id}', [\App\Http\Controllers\CatalogController::class, 'product'])->name('product');
Route::post('/send-request', [\App\Http\Controllers\RequestController::class, 'sendRequest'])->name('send.request');
Route::post('/send-call', [\App\Http\Controllers\RequestController::class, 'callRequest'])->name('send.call');
Route::get('/store', [\App\Http\Controllers\SiteController::class, 'index'])->name('store');
Route::get('/manufacturers', [\App\Http\Controllers\ManufacturersController::class, 'index'])->name('manufacturers');
Route::get('/delivery', [\App\Http\Controllers\SiteController::class, 'delivery'])->name('delivery');
Route::get('/guaranties', [\App\Http\Controllers\SiteController::class, 'guaranties'])->name('guaranties');
Route::get('/suppliers', [\App\Http\Controllers\SiteController::class, 'suppliers'])->name('suppliers');
Route::get('/about-us', [\App\Http\Controllers\SiteController::class, 'aboutUs'])->name('about-us');
Route::get('/contacts', [\App\Http\Controllers\SiteController::class, 'contacts'])->name('contacts');
