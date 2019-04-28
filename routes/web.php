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

Route::get('/', 'PagesController@home');
Route::get('/about_us', function () {
    return view('about_us');
});
Route::get('/contact_us', function () {
    return view('contact_us');
});
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();


Route::prefix('admin')->group(function()
{

Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'AdminController@index')->name('admin.dashboard');


});
Route::group(['middleware'=>'auth:admin'], function() {
	Route::resource('flightcompany','Admin\FlightCompanyController');
Route::resource('reserveflight','Admin\ReserveFlightController');
Route::resource('hotelcompany','Admin\HotelCompanyController');
Route::resource('reservehotel','Admin\ReserveHotelController');
Route::resource('contact','Admin\ContactController');
});


Route::resource('/flight','flightController');
Route::resource('/hotel','HotelController');
Route::resource('/profile','ProfileController');
Route::POST('/payment','PaymentController@store');
Route::POST('/search/flight','SearchController@flight');
Route::POST('/search/hotel','SearchController@hotel');
Route::POST('/search/bus','SearchController@bus');
Route::POST('/search/car','SearchController@car');
Route::get('/upcomingflight','ProfilePagesController@flight');