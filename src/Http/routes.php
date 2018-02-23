<?php

Route::group(['middleware' => 'web', 'prefix' => 'netmk', 'namespace' => 'Modules\Netmk\Http\Controllers'], function()
{
    Route::get('/', 'NewsReaderController@index');
    Route::get('nrk', 'NewsReaderController@nrk');
    Route::get('vg', 'NewsReaderController@vg');

});
