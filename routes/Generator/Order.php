<?php
/**
 * Orders
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    Route::group(['namespace' => 'Order'], function () {
        Route::resource('orders', 'OrdersController');
        //For Datatable
        Route::post('orders/get', 'OrdersTableController')->name('orders.get');
        Route::post('order-detail/updte', 'OrdersController@updateOrderDetail')->name('orders.updateDetail');
        Route::delete('order-detail/delete', 'OrdersController@deleteOrderDetail')->name('orders.deleteDetail');
        Route::post('order/send-reciept', 'OrdersController@sendReciept')->name('orders.sendReciept');
        Route::get('order/showreciept', 'OrdersController@showReciept')->name('orders.showReciept');
        Route::post('order/send-notification', 'OrdersController@sendNotification')->name('orders.sendNotification');
        Route::post('order/remove-coupon', 'OrdersController@removeCoupon')->name('order.removeCoupon');
    });
});