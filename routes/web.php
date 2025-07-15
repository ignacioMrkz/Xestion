<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.welcome');
});

//Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset')->name('password.email');
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');

Route::get('/home', 'HomeController@index');
Route::group(['middleware' => 'auth'], function () {
    Route::resource('eventos', 'EventoController');
    Route::resource('espazos', 'EspazoController');
    Route::resource('actividades', 'ActividadeController');
    Route::resource('avaliacionmonitors', 'AvaliacionmonitorController');
    Route::resource('avaliacionsatisfacions', 'AvaliacionsatisfacionController');
    Route::resource('coordinadors', 'CoordinadorController');
    Route::post('cambiar-contrasinal-coordinador', 'CoordinadorController@cambiarContrasinal');
    Route::resource('monitors', 'MonitorController');
    Route::resource('administradors', 'AdministradorController');
    Route::post('cambiar-contrasinal-administrador', 'AdministradorController@cambiarContrasinal');
    Route::get('importar-excel', 'ExcelController@getTest');
    Route::post('importar-excel', 'ExcelController@postTest');
    Route::get('datos-actividades/{edicion}', 'FrontController@datosEdicionActividades');
    Route::get('datos-monitors/{edicion}', 'FrontController@datosEdicionMonitors');
    Route::get('datos-satisfaccion/{edicion}', 'FrontController@datosEdicionSatisfaccion');
    Route::get('datos-segmentados', 'FrontController@datosSegmentados');
    Route::post('datos-segmentados', 'FrontController@postDatosSegmentados');

    Route::get('cambiar-revisada/{id}', 'AvaliacionmonitorController@cambiarRevisada');
    Route::resource('socios', 'SocioController');
    Route::get('sorteo', 'SocioController@getSorteo');
    Route::post('sorteo', 'SocioController@postSorteo');
    Route::resource('incidencias', 'IncidenciaController');
});

Route::group(['prefix' => 'monitor'], function () {
    Route::get('/login', 'MonitorAuth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'MonitorAuth\LoginController@login');
    Route::post('/logout', 'MonitorAuth\LoginController@logout')->name('logout');
/*
    Route::get('/register', 'MonitorAuth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'MonitorAuth\RegisterController@register');
*/
    Route::post('/password/email', 'MonitorAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
    Route::post('/password/reset', 'MonitorAuth\ResetPasswordController@reset')->name('password.email');
    Route::get('/password/reset', 'MonitorAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::get('/password/reset/{token}', 'MonitorAuth\ResetPasswordController@showResetForm');
});

Route::group(['prefix' => 'coordinador'], function () {
    Route::get('/login', 'CoordinadorAuth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'CoordinadorAuth\LoginController@login');
    Route::post('/logout', 'CoordinadorAuth\LoginController@logout')->name('logout');
/*

    Route::get('/register', 'CoordinadorAuth\RegisterController@showRegistrationForm')->name('register');
    Route::post('/register', 'CoordinadorAuth\RegisterController@register');
*/

    Route::post('/password/email', 'CoordinadorAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
    Route::post('/password/reset', 'CoordinadorAuth\ResetPasswordController@reset')->name('password.email');
    Route::get('/password/reset', 'CoordinadorAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
    Route::get('/password/reset/{token}', 'CoordinadorAuth\ResetPasswordController@showResetForm');
});








