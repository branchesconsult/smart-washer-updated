<?php
/**
 * ShopContacts
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {

    Route::group( ['namespace' => 'ShopContact'], function () {
        Route::resource('shopcontacts', 'ShopContactsController');
        //For Datatable
        Route::post('shopcontacts/get', 'ShopContactsTableController')->name('shopcontacts.get');
    });

});