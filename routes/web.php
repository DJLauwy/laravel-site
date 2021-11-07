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

Route::get('/', 'HomeController@homePage')->name('home');
Route::get('/home', 'HomeController@homePage')->name('home');

Route::get('/about-me', 'AboutController@aboutMe')->name('aboutMe');

Route::get('/discography', 'DiscographyController@discographyMusic')->name('discography');

Route::get('/thetranceevent', 'TheTranceEventController@theTranceEvent')->name('theTranceEvent');

Route::get('/contact', 'ContactController@contactMe')->name('contact');
Route::post('/contact', 'ContactController@handleForm')->name('contact.handle');

Route::get('/news', 'NewsController@newsPage')->name('news');
Route::get('/news/{id}', 'NewsController@newsPost')->where('id', '[0-9]+');

Route::get('/productshop', 'ProductshopController@productShop')->name('productShop');

Route::get('/account', 'AccountController@accountLogin')->name('account');

Route::middleware(['auth', 'is.admin'])->prefix('/admin')->group(function () {
    Route::get('/', 'AdminController@adminSection')->name('admin');
    Route::get('/adminnews', 'AdminController@adminNews')->name('admin.news');
    Route::get('/adminmusic', 'AdminController@adminMusic')->name('admin.music');
});

Auth::routes();

