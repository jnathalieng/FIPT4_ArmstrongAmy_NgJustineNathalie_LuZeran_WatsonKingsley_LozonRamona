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
Route::get('/blog-categories', [BlogController::class, 'getCategories']);
Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/blogs/latest', [BlogController::class, 'getLatest']);
Route::post('/blogs', [BlogController::class, 'store']);
Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit']);
Route::put('/blogs/{blog}', [BlogController::class, 'update']);
Route::delete('/blogs/{blog}', [BlogController::class, 'destroy']);
Route::get('/blogs/{blog}', [BlogController::class, 'show']);

// COMMEMORATION MANAGER ROUTES - ZERAN
Route::get('/comm', [CommController::class, 'index'])->name('comm');
Route::post('/comm', [CommController::class, 'storeComm']);
Route::put('/comm/{id}', [CommController::class, 'updateComm']);
Route::delete('/comm/{id}', [CommController::class, 'destroyComm']);

    // COMM - TRAINING 3 CRUD
    Route::post('/comm-three', [CommController::class, 'storeCommThree']);
    Route::put('/comm-three/{id}', [CommController::class, 'updateCommThree']);
    Route::delete('/comm-three/{id}', [CommController::class, 'destroyCommThree']);

    // COMM - TRAINING 4 CRUD
    Route::post('/comm-four', [CommController::class, 'storeCommFour']);
    Route::put('/comm-four/{id}', [CommController::class, 'updateCommFour']);
    Route::delete('/comm-four/{id}', [CommController::class, 'destroyCommFour']);

Route::post('/api/contact', [ContactController::class, 'store']);
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

