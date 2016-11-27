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


Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/parameters', 'ParametersController@index');
Route::post('/parameters/upload_picture', 'ParametersController@uploadPicture');
Route::get('/card', 'CardsController@getCardInformations');
Route::get('/print/navigo_card', 'PrintController@getNavigoCard');


Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index');
    Route::get('/cards', 'AdminController@getCards');
    Route::post('/cards/search', 'AdminController@searchForCards');
});
