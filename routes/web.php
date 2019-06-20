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
    Route::get('/category/{id}', 'PagesController@category');
    Route::get('/photo/{categoryId}', 'PagesController@returnHome');
    Route::get('/photo/{categoryId}/{photoId}', 'PagesController@viewImage');
    Route::get('/next/{categoryId}/{photoId}', 'PagesController@nextImage');
    Route::get('/prev/{categoryId}/{photoId}', 'PagesController@prevImage');
    Route::get('/videos', 'PagesController@videos');
    Route::get('/contact', 'PagesController@contact');
    Route::post('/contact', 'MessagesController@store');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', 'AdminController@dash');
    Route::get('/admin/upload', 'AdminController@upload');
//    Route::get('/photos', 'PhotosController@index');
//    Route::get('/photos/create', 'PhotosController@create');
//    Route::post('/photo', 'PhotosController@store');
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
});



Route::group(['middleware' => 'auth'], function () {
//    Photos
    Route::get('/photos', 'PhotosController@index');
    Route::get('/photos/create', 'PhotosController@create');
    Route::post('/photos', 'PhotosController@store');
    Route::get('/edit/photos/{id}', 'PhotosController@edit');
    Route::patch('/photos/{id}', 'PhotosController@update');
    Route::delete('/photos/{id}', 'PhotosController@delete');
//    Videos
    Route::get('/admin/videos', 'VideosController@index');
    Route::get('/videos/create', 'VideosController@create');
    Route::post('/videos', 'VideosController@store');
    Route::get('/edit/videos/{id}', 'VideosController@edit');
    Route::patch('/videos/{id}', 'VideosController@update');
    Route::delete('/videos/{id}', 'VideosController@delete');
//    Tags/Categories
    Route::get('/tags', 'TagsController@index');
    Route::get('/tags/create', 'TagsController@create');
    Route::post('/tags', 'TagsController@store');
    Route::get('/edit/tags/{id}', 'TagsController@edit');
    Route::patch('/tags/{id}', 'TagsController@update');
    Route::delete('/tags/{id}', 'TagsController@delete');

    Route::resource('links', 'LinksController');
});


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
