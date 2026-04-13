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

// COMMEMORATION MANAGER ROUTES - ZERAN
Route::get('/comm', [CommController::class, 'index'])->name('comm');
Route::post('/comm', [CommController::class, 'storeComm']);
Route::put('/comm/{id}', [CommController::class, 'updateComm']);
Route::delete('/comm/{id}', [CommController::class, 'destroyComm']);

    // COMM - TRAINING 3 CRUD
    Route::post('/commThree', [CommController::class, 'storeCommThree']);
    Route::put('/commThree/{id}', [CommController::class, 'updateCommThree']);
    Route::delete('/commThree/{id}', [CommController::class, 'destroyCommThree']);

    // COMM - TRAINING 4 CRUD
    Route::post('/commFour', [CommController::class, 'storeCommFour']);
    Route::put('/commFour/{id}', [CommController::class, 'updateCommFour']);
    Route::delete('/commFour/{id}', [CommController::class, 'destroyCommFour']);


// GALLERY MANAGER ROUTES - ZERAN
Route::get('/galleries', [GalleryController::class, 'index']);
// Route::get('/galleries/{slug}', [GalleryController::class, 'getGallery']);
Route::get('/galleries/{slug}', [GalleryController::class, 'show']);

Route::post('/galleries', [GalleryController::class, 'store']);
Route::put('/galleries/{id}', [GalleryController::class, 'update']);
Route::delete('/galleries/{id}', [GalleryController::class, 'destroy']);

    // GALLERY IMAGES CRUD
    Route::post('/galleryImages', [GalleryController::class, 'storeImage']);
    Route::put('/galleryImages/{id}', [GalleryController::class, 'updateImage']);
    Route::delete('/galleryImages/{id}', [GalleryController::class, 'destroyImage']);

// MERGE CONFLICT DUPLICATE ROUTES
// Route::post('/api/contact', [ContactController::class, 'store']);
// Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

