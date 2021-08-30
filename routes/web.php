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

Auth::routes();

Route::get('/', 'WebsiteController@index')->name('index');
Route::get('post/{slug}', 'WebsiteController@post')->name('post');
Route::get('table-of-contents', 'WebsiteController@list_content')->name('table-of-contents');
Route::get('page/{slug}', 'WebsiteController@page')->name('page');
Route::get('contact', 'WebsiteController@showContactForm')->name('contact.show');
Route::post('contact', 'WebsiteController@submitContactForm')->name('contact.submit');
Route::get('about', function(){
    return view('website.about');
})->name('about');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('posts', 'PostController');
    Route::resource('pages', 'PageController');
    Route::resource('galleries', 'GalleryController');
});


