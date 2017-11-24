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

Route::get('/{filter?}', "HomeController@index");


Route::get('/Suggestion', function () {
    return view('Form');
});

Route::resource('Supplier', 'SupplierController');

Route::get('/filter={filter}', function($filter) {
	return view('Suggestion');
	//return app()->make("\App\Http\Controllers\HomeController")::hotdog($filter);
});