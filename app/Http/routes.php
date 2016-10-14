<?php
Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
Route::get('/', function () {
    return view('index');
});

//empresa Resources
/********************* empresa ***********************************************/
Route::resource('empresa','EmpresaController');
Route::post('empresa/{id}/update','EmpresaController@update');
Route::get('empresa/{id}/delete','EmpresaController@destroy');
Route::get('empresa/{id}/deleteMsg','EmpresaController@DeleteMsg');
/********************* empresa ***********************************************/
//Route::get('/api/v13/employees444/obtdepto','')
Route::post('/api/v13/employees/obtenerdepto',
'UsuarioController@showdepto');
Route::post('/api/v13/employees/obtenermunic',
'UsuarioController@showmunic');
/* Rutas Afiliaciones */
Route::resource('afiliaciones','AfiliacionController');
Route::post('afiliaciones/{id}/update','AfiliacionController@update');
Route::get('afiliaciones/{id}/delete','AfiliacionController@destroy');
Route::get('afiliaciones/{id}/delete', [ 'as' => 'afiliaciones.delete', 'uses' => 'AfiliacionController@destroy' ]);
/* Rutas Afiliaciones */

/* Rutas especialidades */
Route::resource('especialidades','EspecialidadController');
Route::post('especialidades/{id}/update','EspecialidadController@update');
Route::get('especialidades/{id}/delete','EspecialidadController@destroy');
Route::get('especialidades/{id}/delete', [ 'as' => 'especialidades.delete', 'uses' => 'EspecialidadController@destroy' ]);
/* Rutas especialidades  */

//medico Resources
/********************* medico ***********************************************/
Route::resource('medico','MedicoController');
Route::post('medico/{id}/update','MedicoController@update');
Route::get('medico/{id}/delete','MedicoController@destroy');
Route::get('medico/{id}/deleteMsg','MedicoController@DeleteMsg');
Route::post('/api/medico/obtenermunic',
'MedicoController@showmunic');

/********************* medico ***********************************************/




Route::group(['prefix' => 'admin'], function(){
Route::resource('/user', 'UserController');
Route::resource('/post', 'PostController');
   });

});

Route::group(['middleware' => 'web'], function () {
Route::auth();
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
Route::resource('users','UserController');
Route::resource('roles','RoleController');
Route::controller('permisos','PermissionController');
 });
  });
