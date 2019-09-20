<?php
/**
 * Push Notifiactions
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Pushnotification'], function () {
        Route::resource('pushnotifications', 'PushnotificationsController');
        //For Datatable
        Route::post('pushnotifications/get', 'PushnotificationsTableController')->name('pushnotifications.get');
    });
    
});