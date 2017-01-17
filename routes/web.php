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


Route::get('backend/entidads', ['as'=> 'backend.entidads.index', 'uses' => 'Backend\EntidadController@index']);
Route::post('backend/entidads', ['as'=> 'backend.entidads.store', 'uses' => 'Backend\EntidadController@store']);
Route::get('backend/entidads/create', ['as'=> 'backend.entidads.create', 'uses' => 'Backend\EntidadController@create']);
Route::put('backend/entidads/{entidads}', ['as'=> 'backend.entidads.update', 'uses' => 'Backend\EntidadController@update']);
Route::patch('backend/entidads/{entidads}', ['as'=> 'backend.entidads.update', 'uses' => 'Backend\EntidadController@update']);
Route::delete('backend/entidads/{entidads}', ['as'=> 'backend.entidads.destroy', 'uses' => 'Backend\EntidadController@destroy']);
Route::get('backend/entidads/{entidads}', ['as'=> 'backend.entidads.show', 'uses' => 'Backend\EntidadController@show']);
Route::get('backend/entidads/{entidads}/edit', ['as'=> 'backend.entidads.edit', 'uses' => 'Backend\EntidadController@edit']);


Route::get('backend/personaFisicas', ['as'=> 'backend.personaFisicas.index', 'uses' => 'Backend\PersonaFisicaController@index']);
Route::post('backend/personaFisicas', ['as'=> 'backend.personaFisicas.store', 'uses' => 'Backend\PersonaFisicaController@store']);
Route::get('backend/personaFisicas/create', ['as'=> 'backend.personaFisicas.create', 'uses' => 'Backend\PersonaFisicaController@create']);
Route::put('backend/personaFisicas/{personaFisicas}', ['as'=> 'backend.personaFisicas.update', 'uses' => 'Backend\PersonaFisicaController@update']);
Route::patch('backend/personaFisicas/{personaFisicas}', ['as'=> 'backend.personaFisicas.update', 'uses' => 'Backend\PersonaFisicaController@update']);
Route::delete('backend/personaFisicas/{personaFisicas}', ['as'=> 'backend.personaFisicas.destroy', 'uses' => 'Backend\PersonaFisicaController@destroy']);
Route::get('backend/personaFisicas/{personaFisicas}', ['as'=> 'backend.personaFisicas.show', 'uses' => 'Backend\PersonaFisicaController@show']);
Route::get('backend/personaFisicas/{personaFisicas}/edit', ['as'=> 'backend.personaFisicas.edit', 'uses' => 'Backend\PersonaFisicaController@edit']);


Route::get('backend/medioRecursos', ['as'=> 'backend.medioRecursos.index', 'uses' => 'Backend\MedioRecursoController@index']);
Route::post('backend/medioRecursos', ['as'=> 'backend.medioRecursos.store', 'uses' => 'Backend\MedioRecursoController@store']);
Route::get('backend/medioRecursos/create', ['as'=> 'backend.medioRecursos.create', 'uses' => 'Backend\MedioRecursoController@create']);
Route::put('backend/medioRecursos/{medioRecursos}', ['as'=> 'backend.medioRecursos.update', 'uses' => 'Backend\MedioRecursoController@update']);
Route::patch('backend/medioRecursos/{medioRecursos}', ['as'=> 'backend.medioRecursos.update', 'uses' => 'Backend\MedioRecursoController@update']);
Route::delete('backend/medioRecursos/{medioRecursos}', ['as'=> 'backend.medioRecursos.destroy', 'uses' => 'Backend\MedioRecursoController@destroy']);
Route::get('backend/medioRecursos/{medioRecursos}', ['as'=> 'backend.medioRecursos.show', 'uses' => 'Backend\MedioRecursoController@show']);
Route::get('backend/medioRecursos/{medioRecursos}/edit', ['as'=> 'backend.medioRecursos.edit', 'uses' => 'Backend\MedioRecursoController@edit']);


Route::get('backend/catalogoMedios', ['as'=> 'backend.catalogoMedios.index', 'uses' => 'Backend\CatalogoMedioController@index']);
Route::post('backend/catalogoMedios', ['as'=> 'backend.catalogoMedios.store', 'uses' => 'Backend\CatalogoMedioController@store']);
Route::get('backend/catalogoMedios/create', ['as'=> 'backend.catalogoMedios.create', 'uses' => 'Backend\CatalogoMedioController@create']);
Route::put('backend/catalogoMedios/{catalogoMedios}', ['as'=> 'backend.catalogoMedios.update', 'uses' => 'Backend\CatalogoMedioController@update']);
Route::patch('backend/catalogoMedios/{catalogoMedios}', ['as'=> 'backend.catalogoMedios.update', 'uses' => 'Backend\CatalogoMedioController@update']);
Route::delete('backend/catalogoMedios/{catalogoMedios}', ['as'=> 'backend.catalogoMedios.destroy', 'uses' => 'Backend\CatalogoMedioController@destroy']);
Route::get('backend/catalogoMedios/{catalogoMedios}', ['as'=> 'backend.catalogoMedios.show', 'uses' => 'Backend\CatalogoMedioController@show']);
Route::get('backend/catalogoMedios/{catalogoMedios}/edit', ['as'=> 'backend.catalogoMedios.edit', 'uses' => 'Backend\CatalogoMedioController@edit']);
