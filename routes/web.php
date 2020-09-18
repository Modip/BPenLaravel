<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/clientphysique/add', 'ClientphysiqueController@add')->name('addclientphysique');
Route::get('/clientphysique/getAll', 'ClientphysiqueController@getAll')->name('getAllclienpPhysique');
Route::get('/clientphysique/edit/{id}', 'ClienthysiqueController@edit')->name('editclientphysique');
Route::post('/clientphysique/update', 'ClientphysiqueController@update')->name('updateclientphysique');
Route::get('/clientphysique/delete/{id}', 'ClientphysiqueController@delte')->name('deleteclientphysique');
Route::post('/clientphysique/persist', 'ClientphysiqueController@persist')->name('persistclientphysique');

Route::get('/clientmoral/add', 'ClientmoralController@add')->name('addclientmoral');
Route::get('/clientMoral/getAll', 'ClientmoralController@getAll')->name('getAllclientmoral');
Route::get('/clientMoral/edit/{id}', 'ClientmoralController@edit')->name('editclientmoral');
Route::post('/clientMoral/update', 'ClientmoralController@update')->name('updateclientmoral');
Route::get('/clientMoral/delete/{id}', 'ClientmoralController@delete')->name('deleteclientmoral');
Route::post('/clientmoral/persist', 'ClientmoralController@persist')->name('persistclientmoral');


Route::get('/ComptecltPhysique/add', 'ComptecltphysiqueController@add')->name('addcomptecltphysique');
Route::get('/comptecltPhysique/getAll', 'ComptecltphysiqueController@getAll')->name('getAllcomptecltphysique');
Route::get('/comptecltPhysique/edit/{id}', 'ComptecltphysiqueController@edit')->name('editcomptecltphysique');
Route::post('/comptecltPhysique/update', 'ComptecltphysiqueController@update')->name('updatecomptecltphysique');
Route::get('/comptecltPhysique/delete/{id}', 'ComptecltphysiqueController@delete')->name('deletecomptecltphysique');


Route::get('/comptecltMoral/add', 'ComptecltmoralController@add')->name('addcomptecltmoral');
Route::get('/comptecltMoral/getAll', 'ComptecltmoralController@getAll')->name('getAllcomptecltmoral');
Route::get('/comptecltMoral/edit/{id}', 'ComptecltmoralController@edit')->name('editcomptecltmoral');
Route::post('/comptecltMoral/update', 'ComptecltmoralController@update')->name('updatecomptecltmoral');
Route::get('/comptecltMoral/delete/{id}', 'ComptecltmoralController@delete')->name('deletecomptecltmoral');