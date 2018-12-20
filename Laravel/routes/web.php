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
    return view('homepage');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/registersuccess', function () {
    return view('registersuccess');
});

Route::get('/register', 'formController@formvalidator');
Route::post('/register', 'formController@formvalidate');

//Route::get('/contact', function (){
//    return 'contact';
//});
//
//Route::get('/agenda', function (){
//    return 'agenda';
//});
//
//Route::get('/test', 'TestController@test');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/photo-gallery', 'PhotoGalleryController@ListPhotos')
    ->name('gallery.index');

Route::get('/photo-gallery/add-photo', 'PhotoGalleryController@showPhotoForm')
    ->name('gallery.add_photo');
Route::post('/photo-gallery/add-photo', 'PhotoGalleryController@savePhotoForm')
    ->name('gallery.save_photo');

