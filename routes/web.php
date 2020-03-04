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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', function() {return "Goodbye";});

Route::get('/rooms', 'ShowRoomsController');

Route::resource('bookings', 'BookingController');

// Route::get('/bookings','BookingController@Index');
// Route::get('/bookings/create', 'BookingController@create');
// Route::get('/bookings', 'BookingController@store');
// Router::get('bookings/{booking}', 'BookingController@show');
// Route::get('booking/{booking}/edit', 'BoolingController@edit');
// Route::put('/bookings/{booking}', 'BookingController@update');
// Route::delete('bookings{booking}', 'BookingController@destroy');