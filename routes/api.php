<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;  
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CommController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\EventsController;
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

Route::get('/search', [SearchController::class, 'apiSearch']);

// EVENTS MANAGER ROUTES
Route::get('/events', [EventsController::class, 'index']);
Route::get('/events/{id}', [EventsController::class, 'show']);
Route::post('/events', [EventsController::class, 'store']);
Route::put('/events/{id}', [EventsController::class, 'update']);
Route::delete('/events/{id}', [EventsController::class, 'destroy']);

// BLOG MANAGER ROUTES - ZERAN
Route::get('/blogs/latest', [BlogController::class, 'getLatest']);
Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/blogs/{slug}', [BlogController::class, 'show']);
Route::post('/blogs', [BlogController::class, 'store']);
Route::put('/blogs/{id}', [BlogController::class, 'update']);
Route::delete('/blogs/{id}', [BlogController::class, 'destroy']);

Route::post('/api/contact', [ContactController::class, 'store']);
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
Route::get('/comm', [CommController::class, 'index'])->name('comm');

