<?php

/**
 * Global Routes
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages
Route::get('lang/{lang}', 'LanguageController@swap');

/* ----------------------------------------------------------------------- */

/*
 * Frontend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    includeRouteFiles(__DIR__ . '/Frontend/');
    Route::any('reset-password-success', function () {
        return view('frontend.auth.sucess-password-reset');
    })->name('password.reset.success');
});

/* ----------------------------------------------------------------------- */

/*
 * Backend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    /*
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     */
    includeRouteFiles(__DIR__ . '/Backend/');
});

Route::any('paytans-ipn', function () {
    \Log::useDailyFiles(storage_path() . '/logs/paytabs-ipn.log');
    \Log::info(print_r(request()->all()));
});

/*
* Routes From Module Generator
*/
includeRouteFiles(__DIR__ . '/Generator/');
/*
* Routes From Module Generator
*/
includeRouteFiles(__DIR__ . '/Generator/');