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

Route::resource('Supplier', 'SupplierController');

Route::get('/Admin/View/{view}', 'AdminController@index');

Route::get('/Admin/View/{view}/{id}', 'AdminController@view');

Route::put('/Admin/Edit/{id}', 'AdminController@edit');

Route::put('/Admin/Change/{status}', 'AdminController@change');

Route::delete('Admin/Delete', 'AdminController@delete');

Route::get('/Admin/Add', 'AdminController@add');