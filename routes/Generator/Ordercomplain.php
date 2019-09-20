<?php
/**
 * Ordercomplains
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Ordercomplain'], function () {
        Route::resource('ordercomplains', 'OrdercomplainsController');
        //For Datatable
        Route::post('ordercomplains/get', 'OrdercomplainsTableController')->name('ordercomplains.get');
    });
    
});