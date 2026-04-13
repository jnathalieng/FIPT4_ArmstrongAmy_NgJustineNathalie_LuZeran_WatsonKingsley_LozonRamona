<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;  
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CommController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SearchController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/contact', [ContactController::class, 'store']);

Route::get('/comm', [CommController::class, 'index']);

Route::get('/galleries', [GalleryController::class, 'index']);
Route::get('/galleries/{slug}', [GalleryController::class, 'getGallery']);
Route::get('/blogs/latest', [BlogController::class, 'getLatest']);
Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/search', [SearchController::class, 'apiSearch']);
Route::post('/api/contact', [ContactController::class, 'store']);
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');