<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', function () {
    return view('home');
});

// Route::get('/work/branding', function () {
//     return view('work.branding');
// });

// Route::get('/work/ui', function () {
//     return view('work.ui');
// });

// Route::get('/work/packaging', function () {
//     return view('work.packaging');
// });

// Route::get('/work/motion', function () {
//     return view('work.motion');
// });

// Route::get('/work/web', function () {
//     return view('work.web');
// });

Route::get('/about', function () {
    return view('pages.about');
});


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

Route::get('/contact-us', function () {
    return view('pages.contact');
});

Route::get('/services/motion', function () {
    return view('services.motion');
});

Route::get('/services/web', function () {
    return view('services.web');
});

Route::get('/services/content-creation', function () {
    return view('services.content');
});
