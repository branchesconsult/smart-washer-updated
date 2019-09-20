<?php

/*
 * Faqs Management
 */
Route::group(['namespace' => 'Locations'], function () {
    Route::resource('locations', 'LocationsController', ['except' => ['show']]);

    //For DataTables
    Route::post('locations/get', 'LocationsTableController')->name('locations.get');

});
