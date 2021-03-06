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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/play', 'PlayController@index');

Route::post('/job', 'JobsController@startJob');

Route::get('/tasks', 'JobsController@getTasks');

Route::get('/headers', function() {
    return view('headers');
});

Route::resource('/profile/image', 'ProfileImageController');