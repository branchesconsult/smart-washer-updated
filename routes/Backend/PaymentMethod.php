<?php

/*
 * Faqs Management
 */
Route::group(['namespace' => 'PaymentMethod'], function () {
    Route::resource('paymentmethod', 'PaymentMethodController', ['except' => ['show']]);

    //For DataTables
    Route::post('paymentmethod/get', 'PaymentMethodTableController')->name('paymentmethod.get');

});
