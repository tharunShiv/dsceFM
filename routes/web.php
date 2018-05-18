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

Route::get('/', 'PagesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('files', 'FilesController');

Route::get('/search', 'FilesController@search');

Route::get('/results', function(){
    return view('results');
});

Route::get('/about', function(){
    return view('about');
});