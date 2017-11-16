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

/**
 * Index Page When Users are Not Logged in (Guests)
 */
Route::view('/', 'welcome')->middleware('guest');

/**
 * Main Dashboard after Login
 */
Route::get('/dashboard', 'HomeController@index');

/**
 * Invoice Routes
 */
Route::resource('invoice', 'InvoiceController');

// Route::get('/clients', 'ClientController@index');

// Route::view('/clients/create', 'clients.create')->middleware('auth');
// To be tested

Route::resource('clients', 'ClientController');
Route::post('/clients/store', 'ClientController@store');
// Route::delete('/clients/{{ $id }}', 'ClientController@delete');



/**
 * Client Routes
 */
// Route::resource('client', 'ClientController');

Route::get('env', function () {
	dump(config('app.name'));
	dump(config('app.env'));
	dump(config('app.debug'));
	dump(config('app.url'));
});

Auth::routes();
