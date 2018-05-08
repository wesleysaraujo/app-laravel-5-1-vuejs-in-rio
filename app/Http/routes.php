<?php

Route::group(['as' => 'contacts::'], function () {
    Route::get('/', ['uses' => 'ContactsController@index', 'as' => 'index']);
    Route::post('/create', ['uses' => 'ContactsController@store', 'as' => 'create']);
    Route::post('/update/{id}', ['uses' => 'ContactsController@update', 'as' => 'update']);
    Route::post('/destroy/{id}', ['uses' => 'ContactsController@destroy', 'as' => 'destroy']);
});

