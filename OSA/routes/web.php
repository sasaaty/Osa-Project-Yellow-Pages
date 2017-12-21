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

Route::get('/', array('as'=>'search', 'uses' => 'HomeController@index'));


Route::get('/Suggestion', function () {
    return view('Suggestion');
});

Route::post('/Suggestion', 'FormsController@insert');

Route::get('/Admin/View/{view}', 'AdminController@index');

Route::get('/Admin/Add', 'AdminController@add');

Route::resource('Supplier', 'SupplierController');