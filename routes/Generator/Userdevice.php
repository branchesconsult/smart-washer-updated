<?php
/**
 * Routes for : User_Devices
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
	
	Route::group( ['namespace' => 'User_Device'], function () {
	    Route::get('userdevices', 'UserdevicesController@index')->name('userdevices.index');
	    Route::get('userdevices/create', 'UserdevicesController@create')->name('userdevices.create');
	    Route::post('userdevices', 'UserdevicesController@store')->name('userdevices.store');
	    
	    Route::delete('userdevices/{userdevice}', 'UserdevicesController@destroy')->name('userdevices.destroy');
	    //For Datatable
	    Route::post('userdevices/get', 'UserdevicesTableController')->name('userdevices.get');
	});
	
});