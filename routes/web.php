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

Route::group(['middleware' => 'auth', 'prefix' => 'parameters'], function() {
    Route::get('/', 'ParametersController@index');
    Route::post('/upload_picture', 'ParametersController@uploadPicture');
    Route::put('/change_password', 'ParametersController@changePassword');
    Route::put('/change_email', 'ParametersController@changeEmailAdress');
});

Route::get('/renew/{card_id}', 'SubscriptionController@renewCardWithId');
Route::get('/card', 'CardsController@getCardInformations');
Route::get('/print/navigo_card', 'PrintController@getNavigoCard');


Route::get('/subscription', 'SubscriptionController@getPlanList');
Route::group(['middleware' => ['auth'], 'prefix' => 'subscription'], function () {
    Route::post('checkout', ['as'=>'checkout','uses'=>'PaypalController@getCheckout']);
    Route::get('done', ['as'=>'done','uses'=>'PaypalController@getDone']);
    Route::get('cancel', ['as'=>'cancel','uses'=>'SubscriptionController@getCancel']);
});

Route::group(['middleware' => ['web'], 'prefix' => 'billing'], function () {
    Route::get('/', 'BillController@getAllBillingForUser');
});

Route::group(['middleware' => 'admin', 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'ACardsController@index');
    Route::get('/cards', 'ACardsController@getCards');
    Route::post('/cards/search', 'ACardsController@searchForCards');
});
