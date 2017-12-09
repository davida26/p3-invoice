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

/**
 * Client Routes
 */
Route::resource('clients', 'ClientController');

/**
 * Service Routes
 */
Route::resource('service', 'ServiceController');

/**
 * Settings Routes
 */
Route::resource('settings', 'ConfigurationController' , ['except' => [
    'destroy', 'show']]);

Route::get('env', function () {
	dump(config('app.name'));
	dump(config('app.env'));
	dump(config('app.debug'));
	dump(config('app.url'));
});

Auth::routes();
