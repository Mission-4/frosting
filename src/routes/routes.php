<?php

Route::get('/api/frosting', 'Mission4\Frosting\Controllers\InvitesController@index');
Route::post('/api/frosting', 'Mission4\Frosting\Controllers\InvitesController@store');
Route::delete('/api/frosting', 'Mission4\Frosting\Controllers\InvitesController@delete');
