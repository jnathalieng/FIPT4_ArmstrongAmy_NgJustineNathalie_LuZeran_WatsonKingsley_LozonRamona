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

Route::get('/', function () {
    return view('welcome');
});

//public api route
// Route::get('/contact', function () {
//     return file_get_contents(public_path('contact.html'));
// });

//base directory api route
Route::get('/contact', function () {
    return file_get_contents(base_path('contact.html'));
});
Route::get('/commemoration.html', function () {
    return response()->file(base_path('commemoration.html'));
});
Route::get('/commemoration', function () {
    return response()->file(base_path('commemoration.html'));
});