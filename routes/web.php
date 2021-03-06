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

// Route::get('/', function () {
//     return view('welcome');
// });
 
Route::get('/', 'HomeController@index');

 // Route::resource('/admin', 'AdminController');
Route::get('admin','AdminController@index');
		Route::get('admin/create','AdminController@create');
        Route::post('admin/store','AdminController@store');
        Route::get('admin/{id}/edit','AdminController@edit');
        Route::post('admin/update','AdminController@update');
        Route::get('admin/{id}/delete','AdminController@destroy');