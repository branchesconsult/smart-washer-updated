<?php
/**
 * Laundries
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {

    Route::group(['namespace' => 'Laundry'], function () {
        Route::resource('laundries', 'LaundriesController');
        Route::post('add-laundry-users/{laundry_id}', 'LaundriesController@assignLaundryUser')->name('assign.laundry.user');
        //For Datatable
        Route::post('laundries/get', 'LaundriesTableController')->name('laundries.get');
    });

});