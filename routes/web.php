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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD

Route::get('/google/redirect', 'Auth\LoginController@googleRedirectToProvider')->name('google.redirect');
Route::get('/google/callback', 'Auth\LoginController@googleHandleProviderCallback')->name('google.callback');
=======
Route::get('/privacy-policy', 'PagesController@privacyPolicy')->name('privacy.policy');
>>>>>>> 78f0a97c6ea6e27cf24643347ff3cb6ebc3fcf85
