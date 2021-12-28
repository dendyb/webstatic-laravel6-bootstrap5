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

Route::get('/', function () {
    return view('welcome');
});

// otherPageOne
Route::get('/otherPageOne', function () {
    return view('otherPageOne');
});


// otherPageTwo
Route::get('/otherPageTwo', function () {
    return view('otherPageTwo');
});

// otherPageThree
Route::get('/otherPageThree', function () {
    return view('otherPageThree');
});

// otherPageFour
Route::get('/otherPageFour', function () {
    return view('otherPageFour');
});