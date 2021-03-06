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

//Search
Route::get('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('search.post');

Route::get('/home', [App\Http\Controllers\MainController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('index.post');

//Autthenticated Path
Route::middleware('auth')->group(function () {
Route::post('/post/store', [App\Http\Controllers\PostController::class, 'storePost'])->name('store.post');
Route::post('/media/store', [App\Http\Controllers\PostController::class, 'storeMedia'])->name('store.media');
Route::post('/quote/store', [App\Http\Controllers\PostController::class, 'storeQuote'])->name('store.quote');
Route::post('/devotion/store', [App\Http\Controllers\PostController::class, 'storeDevotion'])->name('store.devotion');
Route::post('/testifyprayer/store', [App\Http\Controllers\TestifyPrayerController::class, 'storeTestifyPrayer'])->name('store.testifyprayer');
});

//dispalying posts
Route::get('/post/{id}', [App\Http\Controllers\PostController::class, 'showPost'])->name('show.post');
Route::get('/media/{id}', [App\Http\Controllers\PostController::class, 'showMedia'])->name('show.media');
Route::get('/devotion/{id}', [App\Http\Controllers\PostController::class, 'showDevotion'])->name('show.devotion');

//Profile
Route::get('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'show'])->name('show.profile');
Route::get('/profile/{id}/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('edit.profile');
Route::post('/profile/{id}/update', [App\Http\Controllers\ProfileController::class, 'update'])->name('update.profile');

//History
Route::get('/history', [App\Http\Controllers\HistoryController::class, 'index'])->name('index.history');

//Meetup
Route::get('/meetup', [App\Http\Controllers\MeetupController::class, 'index'])->name('index.meetup');

//Conferences
Route::get('/conferences', [App\Http\Controllers\ConferencesController::class, 'index'])->name('index.conferences');