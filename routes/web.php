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

Route::group(['middleware' => ['auth']], function () {
  Route::get('/profile', 'UsersController@profile')->name('user.profile');
});
	
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/lobby', 'PagesController@lobby')->name('lobby');

Route::get('/privacy-policy', 'PagesController@privacyPolicy')->name('privacy.policy');
Route::get('/terms-and-conditions', 'PagesController@termsAndConditions')->name('terms.and.conditions');

Route::get('/ranking/{distance?}', 'PagesController@ranking')->name('ranking');

Route::get('/google/redirect', 'Auth\LoginController@googleRedirectToProvider')->name('google.redirect');
Route::get('/google/callback', 'Auth\LoginController@googleHandleProviderCallback')->name('google.callback');

Route::get('/facebook/redirect', 'Auth\LoginController@facebookRedirectToProvider')->name('facebook.redirect');
Route::get('/facebook/callback', 'Auth\LoginController@facebookHandleProviderCallback')->name('facebook.callback');

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');

Route::get('/bikes/serial', 'BikesController@getSerial')->name('bike.serial');
Route::get('/bikegames/create', 'BikeGamesController@create')->name('bikegames.create');

Route::post('/bikegame/store', 'BikeGamesController@store')->name('bikegame.store');
Route::get('/bikegames/index', 'BikeGamesController@index')->name('bikegames.index');
Route::get('/bikegames/match', 'BikeGamesController@bikeGamesMatch')->name('bikegames.match');


Route::get('/bikes', 'BikesController@index')->name('bikes.index');


Route::get('/distances', 'DistancesController@index')->name('distances.index');



