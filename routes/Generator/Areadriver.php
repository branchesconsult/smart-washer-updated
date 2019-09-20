<?php
/**
 * Areadriver
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Areadriver'], function () {
        Route::resource('areadrivers', 'AreadriversController');
        //For Datatable
        Route::post('areadrivers/get', 'AreadriversTableController')->name('areadrivers.get');
    });
    
});