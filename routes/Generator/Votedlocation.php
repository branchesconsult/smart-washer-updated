<?php
/**
 * Voted_Locations
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {

    Route::group(['namespace' => 'Voted_Location'], function () {
        Route::resource('votedlocations', 'VotedlocationsController');
        //For Datatable
        Route::post('votedlocations/get', 'VotedlocationsTableController')->name('votedlocations.get');
        Route::get('votedlocations-map', 'VotedlocationsController@votedLocationMap')
            ->name('votedlocations.map');
    });

});