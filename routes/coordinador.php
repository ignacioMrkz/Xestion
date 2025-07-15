<?php

Route::get('/home', 'FrontController@coordinadorHome');
Route::get('/novo-socio', 'FrontController@novoSocio');
Route::post('/novo-socio', 'FrontController@postNovoSocio');
Route::get('/ver-socios', 'FrontController@verSocios');
Route::get('/editar-socio/{id}', 'FrontController@editarSocio');
Route::post('/editar-socio', 'FrontController@postEditarSocio');
Route::get('/eliminar-socio/{id}', 'FrontController@eliminarSocio');
Route::get('/incidencias', 'FrontController@incidencias');
Route::post('/incidencias', 'FrontController@postIncidencias');
Route::get('/sorteo-participantes', 'FrontController@sorteoParticipantes');
Route::post('/sorteo-participantes', 'FrontController@postSorteoParticipantes');

Route::get('/avaliacion', 'FrontController@coordinadorAvaliacion');
Route::get('/avaliacion-monitors/{id}', 'FrontController@coordinadorAvaliacionMonitors');
Route::get('/avaliacion-satisfaccion/{id}', 'FrontController@coordinadorAvaliacionSatisfaccion');
Route::post('/avaliacion-monitors', 'FrontController@postCoordinadorAvaliacionMonitors');
Route::post('/modificar-avaliacion-monitors', 'FrontController@postCoordinadorAvaliacionMonitorsModificar');
Route::post('/avaliacion-satisfaccion', 'FrontController@postCoordinadorAvaliacionSatisfaccion');
Route::get('revisar-avaliacions', 'FrontController@revisarAvaliacions');
Route::get('revisar-avaliacion/{id}', 'FrontController@revisarAvaliacion');
Route::get('validar-avaliacion/{id}', 'FrontController@validarAvaliacion');
Route::get('ver-enquisas', 'FrontController@verEnquisas');
Route::get('revisar-avaliacion-satisfacion/{id}', 'FrontController@revisarAvaliacionSatisfacion');
