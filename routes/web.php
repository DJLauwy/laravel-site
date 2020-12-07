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

//Home
Route::get('/', function () {
    return view('home');
});

Route::get('/home', 'HomeController@homePage')->name('home');

//About me page
Route::get('/about-me', 'AboutController@aboutMe')->name('aboutme');

//Discography
Route::get('/discography', 'DiscographyController@discographyMusic')->name('discography');

//The Trance Event (Radioshow and musiclabel)
Route::get('/thetranceevent', 'TheTranceEventController@theTranceEvent')->name('tte');

//Contact page
Route::get('/contact', 'ContactController@contactMe')->name('contact');
Route::post('/contact', 'ContactController@handleForm')->name('contact.handle');



// -- VOORBEELDEN VAN ROUTES -- //

// Route::get('/hello-world', function () {
//     return 'Hello World!';
// });

// Route::get('/hello-world', 'TestController@helloWorld');

// Route::get('/test', function () {
//     return view('test');
// });

// Route::get('/over-mij', 'AboutController@aboutMe');