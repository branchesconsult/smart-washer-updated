<?php
/**
 * Address
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {

    Route::group(['namespace' => 'Address'], function () {
        Route::resource('addresses', 'AddressesController', ['except' => 'show']);
        //For Datatable
        Route::post('addresses/get', 'AddressesTableController')->name('addresses.get');

        Route::get('addresses/operational-areas', 'AddressesController@operationalAreas')->name('addresses.operationalAreas');
    });

});