<?php
/**
 * Push Notifiactions
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Notification'], function () {
        Route::resource('notifications', 'NotificationsController');
        //For Datatable
        Route::post('notifications/get', 'NotificationsTableController')->name('notifications.get');
    });
    
});