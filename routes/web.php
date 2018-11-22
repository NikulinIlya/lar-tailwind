<?php

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

Route::get('/twitter', function () {
    return view('twitter');
});

Route::get('/youtube', function () {
    return view('youtube');
});

Route::get('/wp-pusher', function () {
    return view('wp-pusher');
});