<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('cors')->group(function() {
    Route::get('/', 'EntryController@index');
    Route::get('/{id}', 'EntryController@edit');
    Route::post('/', 'EntryController@create');
    Route::put('/{id}', 'EntryController@put');
});
