<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('/leadlist', 'LeadListController');

Route::resource('/lead', 'LeadController');

Route::post('uploadleadlist/{id}', 'LeadListController@storeLeadList')->name('uploadLeadList.store');
Route::get('uploadleadlist/{id}', 'LeadListController@uploadLeadList')->name('uploadLeadList.show');

Route::get('leadlist/{id}/download', 'LeadListController@downloadLeadList')->name('leadlist.download');