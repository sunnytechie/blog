<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\MainController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('index.post');

//Autthentication Path
Route::middleware('auth')->group(function () {
Route::post('/post/store', [App\Http\Controllers\PostController::class, 'storePost'])->name('store.post');
Route::post('/media/store', [App\Http\Controllers\PostController::class, 'storeMedia'])->name('store.media');
Route::post('/quote/store', [App\Http\Controllers\PostController::class, 'storeQuote'])->name('store.quote');
Route::post('/devotion/store', [App\Http\Controllers\PostController::class, 'storeDevotion'])->name('store.devotion');
});