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


Route::auth();
Route::get('/home', 'HomeController@index');
//************GUESTS*************/
Route::get('/guests', 'guestController@index')->name('guests.index');
Route::get('/guests/create', 'guestController@create')->name('guests.create');
Route::post('/guests/create','guestController@store');
Route::get('/guests/{guests}/edit', 'guestController@edit')->name('guests.edit');
Route::patch('/guests/{guests}/edit', 'guestController@update')->name('guests.update');
Route::delete('/guests/{guests}/delete', 'guestController@destroy')->name('guests.destroy');

//************ROOMS*************/
Route::get('/rooms', 'roomController@index')->name('rooms.index');
Route::get('/rooms/create', 'roomController@create')->name('rooms.create');
Route::post('/rooms/create','roomController@store');
Route::get('/rooms/{rooms}/edit', 'roomController@edit')->name('rooms.edit');
Route::patch('/rooms/{rooms}/edit', 'roomController@update')->name('rooms.update');
Route::delete('/rooms/{rooms}/delete', 'roomController@destroy')->name('rooms.destroy');

//************REGISTRATION*************/
Route::get('/registrations', 'RegistrationController@index')->name('registrations.index');
Route::get('/registrations/create', 'RegistrationController@create')->name('registrations.create');
Route::post('/registrations/create','RegistrationController@store');
Route::get('/registrations/{registrations}/edit', 'RegistrationController@edit')->name('registrations.edit');
Route::patch('/registrations/{registrations}/edit', 'RegistrationController@update')->name('RegistrationControllers.update');
Route::delete('/registrations/{registrations}/delete', 'RegistrationController@destroy')->name('registrations.destroy');