<?php
/**
 * Orderdetails
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Orderdetail'], function () {
        Route::resource('orderdetails', 'OrderdetailsController');
        //For Datatable
        Route::post('orderdetails/get', 'OrderdetailsTableController')->name('orderdetails.get');
    });
    
});