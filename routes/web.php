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
    return view('index');
});

Route::get('/curriculo', function () {
    return view('curriculo');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/hobbies', function () {
    return view('hobbies');
});

Route::get('/periodo/{num}', ['uses' => 'periodoController@getPeriodo']);