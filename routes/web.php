<?php

//web.php

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

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ranking', 'PagesController@ranking')->name('ranking');
Route::get('/rankingg', 'PagesController@rankingg')->name('rankingg');
Route::get('/rankinggg', 'PagesController@rankinggg')->name('rankinggg');
Route::get('/privacy-policy', 'PagesController@privacyPolicy')->name('privacy.policy');
Route::get('/terms-and-conditions', 'PagesController@termsAndConditions')->name('terms.and.conditions');
Route::get('/lobby', 'PagesController@lobby')->name('lobby');
Route::get('/google/redirect', 'Auth\LoginController@googleRedirectToProvider')->name('google.redirect');
Route::get('/google/callback', 'Auth\LoginController@googleHandleProviderCallback')->name('google.callback');
Route::get('/bikes/serial', 'BikesController@index')->name('bike.serial');
Route::get('/facebook/redirect', 'Auth\LoginController@facebookRedirectToProvider')->name('facebook.redirect');

Route::get('/facebook/callback', 'Auth\LoginController@facebookHandleProviderCallback')->name('facebook.callback');
Route::get('/create', 'PagesController@create')->name('create');

Route::get('/facebook/callback', 'Auth\LoginController@facebookHandleProviderCallback')->name('facebook.callbac');

>>>>>>> cec45e05e96b61d12a1e4cc91862f2d1577b1cf2
