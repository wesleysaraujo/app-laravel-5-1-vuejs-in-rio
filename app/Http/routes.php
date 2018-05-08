<?php

Route::group(['as' => 'contacts::'], function () {
    Route::get('/', ['uses' => 'ContactsController@index', 'as' => 'index']);
    Route::post('/create', ['uses' => 'ContactsController@store', 'as' => 'create']);
    Route::post('/{id}/update', ['uses' => 'ContactsController@update', 'as' => 'update']);
    Route::post('/{id}/destroy', ['uses' => 'ContactsController@destroy', 'as' => 'destroy']);
});

