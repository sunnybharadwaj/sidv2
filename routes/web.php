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

Route::group([], function() {
    Route::get('/', 'PagesController@landing');
    Route::get('/browse', 'PagesController@browse');
    Route::get('/category', 'PagesController@category');
    Route::get('/photo', 'PagesController@photo');
});

Route::group(['middleware' => 'auth'], function () {
//Route::group([], function() {
    Route::get('/admin', 'AdminController@dash');
    Route::get('/admin/upload', 'AdminController@upload');
//    Route::get('/photos', 'PhotosController@index');
//    Route::get('/photos/create', 'PhotosController@create');
//    Route::post('/photo', 'PhotosController@store');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('photos', 'PhotosController@index');
    Route::get('photos/{id}', 'PhotosController@show');
    Route::post('photos', 'PhotosController@store');
    Route::get('edit/photos/{id}', 'PhotosController@edit');
    Route::patch('photos/{id}', 'PhotosController@update');
    Route::delete('photos/{id}', 'PhotosController@delete');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
