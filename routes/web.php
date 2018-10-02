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

Route::get('/', 'WelcomesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::post('/add-route','AddrouteController@add_journey');

Route::prefix('admin')
    ->middleware(['auth', 'role:admin'])
    ->namespace('Admin')
    ->group(function() {
    Route::resource('cities', 'CitiesController');
    Route::resource('trips', 'TripsController');
    Route::resource('buses', 'BusesController');
    Route::get('search', 'TripsController@search')->name('trips.search'); 
});


Route::get('booking/show', [
	'uses' => 'BookingController@index',
	'as' => 'booking.show'
	]);

Route::post('booking/store', [
	'uses' => 'BookingController@store',
	'as' => 'booking.store'
	]);
