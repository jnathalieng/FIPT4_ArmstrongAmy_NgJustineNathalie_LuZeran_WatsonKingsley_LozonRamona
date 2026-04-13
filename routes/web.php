<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CommController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\EventsController;
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

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/api/contact', [ContactController::class, 'store']);

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

Route::get('/BOB', function () {
    return view('BOB');
})->name('BOB');

Route::get('/canteen', function () {
    return view('canteen');
})->name('canteen');

Route::get('/comm', [CommController::class, 'index'])->name('comm');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/timeline', function () {
    return view('timeline');
})->name('timeline');

Route::get('/TL-RECON', function () {
    return view('TL-RECON');
})->name('TL-RECON');

Route::get('/training_bases', function () {
    return view('training_bases');
})->name('training_bases');

Route::get('/wartime_experience', function () {
    return view('wartime_experience');
})->name('wartime_experience');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/blogs/{slug}', [BlogController::class, 'show']);

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/events-manager', function () {
    return view('events-manager');
})->name('events-manager');

Route::get('/blog-manager', function () {
    return view('blog-manager');
})->name('blog-manager');

Route::get('/comm-manager', function () {
    return view('comm-manager');
})->name('comm-manager');

Route::get('/gallery-manager', function () {
    return view('gallery-manager');
})->name('gallery-manager');

Route::get('/social-media-manager', function () {
    return view('social-media-manager');
})->name('social-media-manager');

Route::get('/logout', function () {
    return view('logout');
})->name('logout');

Route::get('/clear-config', function () {
    \Artisan::call('config:cache');
    \Artisan::call('cache:clear');
    return 'Config cleared!';
});

Route::get('/test-db', function () {
    try {
        $test = DB::connection()->getPdo();
        return 'Database connection successful!';
    } catch (\Exception $e) {
        return 'Database connection failed: ' . $e->getMessage();
    }
});