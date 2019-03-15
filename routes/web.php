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

    Route::group(['prefix' => 'sizer'], function()
    {
       // Route::get('','SizersController@list');
        Route::get('/edit/{id}','SizersController@edit');
    });
    Route::group(['prefix' => 'flavor'], function()
    {
        Route::get('','FlavorsController@listFlavors');
    });
    Route::group(['prefix' => 'order'], function(){
        Route::post('save','OrdersController@store');
    }); 
