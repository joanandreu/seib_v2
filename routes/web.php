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
    includeRouteFiles(__DIR__.'/Frontend/');
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
    includeRouteFiles(__DIR__.'/Backend/');
});




Route::get('backend/tipoEntidads', ['as'=> 'backend.tipoEntidads.index', 'uses' => 'Backend\TipoEntidadController@index']);
Route::post('backend/tipoEntidads', ['as'=> 'backend.tipoEntidads.store', 'uses' => 'Backend\TipoEntidadController@store']);
Route::get('backend/tipoEntidads/create', ['as'=> 'backend.tipoEntidads.create', 'uses' => 'Backend\TipoEntidadController@create']);
Route::put('backend/tipoEntidads/{tipoEntidads}', ['as'=> 'backend.tipoEntidads.update', 'uses' => 'Backend\TipoEntidadController@update']);
Route::patch('backend/tipoEntidads/{tipoEntidads}', ['as'=> 'backend.tipoEntidads.update', 'uses' => 'Backend\TipoEntidadController@update']);
Route::delete('backend/tipoEntidads/{tipoEntidads}', ['as'=> 'backend.tipoEntidads.destroy', 'uses' => 'Backend\TipoEntidadController@destroy']);
Route::get('backend/tipoEntidads/{tipoEntidads}', ['as'=> 'backend.tipoEntidads.show', 'uses' => 'Backend\TipoEntidadController@show']);
Route::get('backend/tipoEntidads/{tipoEntidads}/edit', ['as'=> 'backend.tipoEntidads.edit', 'uses' => 'Backend\TipoEntidadController@edit']);


Route::get('backend/cargosEntidads', ['as'=> 'backend.cargosEntidads.index', 'uses' => 'Backend\CargosEntidadController@index']);
Route::post('backend/cargosEntidads', ['as'=> 'backend.cargosEntidads.store', 'uses' => 'Backend\CargosEntidadController@store']);
Route::get('backend/cargosEntidads/create', ['as'=> 'backend.cargosEntidads.create', 'uses' => 'Backend\CargosEntidadController@create']);
Route::put('backend/cargosEntidads/{cargosEntidads}', ['as'=> 'backend.cargosEntidads.update', 'uses' => 'Backend\CargosEntidadController@update']);
Route::patch('backend/cargosEntidads/{cargosEntidads}', ['as'=> 'backend.cargosEntidads.update', 'uses' => 'Backend\CargosEntidadController@update']);
Route::delete('backend/cargosEntidads/{cargosEntidads}', ['as'=> 'backend.cargosEntidads.destroy', 'uses' => 'Backend\CargosEntidadController@destroy']);
Route::get('backend/cargosEntidads/{cargosEntidads}', ['as'=> 'backend.cargosEntidads.show', 'uses' => 'Backend\CargosEntidadController@show']);
Route::get('backend/cargosEntidads/{cargosEntidads}/edit', ['as'=> 'backend.cargosEntidads.edit', 'uses' => 'Backend\CargosEntidadController@edit']);
