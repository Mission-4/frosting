<?php

Route::group(['prefix' => '/api/frosting', 'middleware' => config('frosting.middleware')], function () {
    Route::get('/', 'Mission4\Frosting\Controllers\InvitesController@index');
    Route::post('/', 'Mission4\Frosting\Controllers\InvitesController@store');
    Route::delete('/', 'Mission4\Frosting\Controllers\InvitesController@delete');
});
