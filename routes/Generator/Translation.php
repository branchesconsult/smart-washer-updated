<?php
/**
 * Translations
 *
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    
    Route::group( ['namespace' => 'Translation'], function () {
        Route::resource('translations', 'TranslationsController');
        //For Datatable
        Route::post('translations/get', 'TranslationsTableController')->name('translations.get');
    });
    
});