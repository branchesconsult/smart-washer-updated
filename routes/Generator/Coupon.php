<?php
/**
 * Coupon
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Coupon'], function () {
        Route::resource('coupons', 'CouponsController');
        //For Datatable
        Route::post('coupons/get', 'CouponsTableController')->name('coupons.get');
    });
    
});