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
    return view('home');
});

Route::get('/services/branding', function () {
    return view('services.branding');
});

Route::get('/services/ui', function () {
    return view('services.ui');
});

Route::get('/services/packaging', function () {
    return view('services.packaging');
});

Route::get('/services/motion', function () {
    return view('services.motion');
});

Route::get('/services/web', function () {
    return view('services.web');
});