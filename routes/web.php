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


Route::get('/', 'HomeController@index')->name('homepage');
Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/parameters', 'ParametersController@index');
Route::post('/parameters/upload_picture', 'ParametersController@uploadPicture');
Route::get('/card', 'CardsController@getCardInformations');
Route::get('/print/navigo_card', 'PrintController@getNavigoCard');

Route::group(['middleware' => ['web'], 'prefix' => 'subscription'], function () {
    Route::get('/', ['as'=>'payPremium','uses'=>'PaypalController@payPremium']);
    Route::post('getCheckout', ['as'=>'getCheckout','uses'=>'PaypalController@getCheckout']);
    Route::get('getDone', ['as'=>'getDone','uses'=>'PaypalController@getDone']);
    Route::get('getCancel', ['as'=>'getCancel','uses'=>'PaypalController@getCancel']);
});


Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index');
    Route::get('/cards', 'AdminController@getCards');
    Route::post('/cards/search', 'AdminController@searchForCards');
});
