<?php

Route::get('/home', 'FrontController@monitorHome');
Route::get('/avaliacion', 'FrontController@monitorAvaliacion');
Route::get('/avaliacion/{id}', 'FrontController@monitorAvaliacionActividade');
Route::post('/avaliacion-monitor', 'FrontController@postMonitorAvaliacion');