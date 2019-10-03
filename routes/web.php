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


Route::get('/','OnlineController@index');
    /*RUTAS GET*/
Route::group(['prefix' => 'register'], function(){
    Route::get('/paciente',['as' => 'reg-pac', 'uses' => 'OnlineController@regpac']);
    Route::get('/doctor',['as' => 'reg-doc', 'uses' => 'OnlineController@regdoc']);
});

Route::get('/list','OnlineController@busqueda');
Route::get('/detalle','OnlineController@det_hora');

    /*RUTAS POST*/
Route::group(['prefix' => 'register'], function(){
    Route::post('/paciente',['as' => 'reg-pac', 'uses' => 'Online\PacienteController@register']);
    Route::post('/doctor',['as' => 'reg-doc', 'uses' => 'Online\DoctorController@register']);
});        
      
Route::get('/doc', function () {
    return view('online.log-doc.index');
});

 Route::get('/pac', function () {
    return view('online.log-pac.index');
});



Auth::routes();


Route::post('/logout','Online\LoginController@logout')->name('logout');

Route::post('/login','Auth\LoginController@validateLogin');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logeado', function () {
    return view('online.logeado.index');
});

Route::get('/logeadolista', function () {
    return view('online.logeado.listadoc');
});

Route::get('/logeadodetalle', function () {
    return view('online.logeado.detalle');
});

Route::group(['prefix' => 'ladmin'],function(){
    Route::get('/',['as' => 'admin.index', 'uses' => 'admin\LoginController@login']);
    Route::get('/repo', 'admin\UserController@listado');
    Route::get('/prueba', "OnlineController@prueba");

    Route::group(['prefix' => 'paciente'],function(){
        Route::get('/',['as' => 'pac.index', 'uses' => 'admin\PacientesController@index']);
        Route::get('/editar/{id}',['as' => 'pac.editar', 'uses' => 'admin\PacientesController@editar']);
        Route::post('/editar/{id}',['as' => 'pac.actualizar', 'uses' => 'admin\PacientesController@actualizar']);
        Route::get('/agregar',['as' => 'pac.crear', 'uses' => 'admin\PacientesController@crear']);
        Route::post('/agregar',['as' => 'pac.agregar', 'uses' => 'admin\PacientesController@agregar']);
        Route::get('/delete/{id}',['as' => 'pac.eliminar', 'uses' => 'admin\PacientesController@eliminar']);
        Route::get('/show',['as' => 'pac.mostrar', 'uses' => 'admin\PacientesController@mostrar']);
    });
    
    Route::group(['prefix' => 'doctor'],function(){
        Route::get('/',['as' => 'doc.index', 'uses' => 'admin\DoctoresController@index']);
        Route::get('/editar/{id}',['as' => 'doc.editar', 'uses' => 'admin\DoctoresController@editar']);
        Route::post('/editar/{id}',['as' => 'doc.actualizar', 'uses' => 'admin\DoctoresController@actualizar']);
        Route::get('/agregar',['as' => 'doc.crear', 'uses' => 'admin\DoctoresController@crear']);
        Route::post('/agregar',['as' => 'doc.agregar', 'uses' => 'admin\DoctoresController@agregar']);
        Route::get('/delete/{id}',['as' => 'doc.eliminar', 'uses' => 'admin\DoctoresController@eliminar']);
        Route::get('/show',['as' => 'doc.mostrar', 'uses' => 'admin\DoctoresController@mostrar']);
    });
    Route::group(['prefix' => 'especialidad'],function(){
        Route::get('/',['as' => 'espec.index', 'uses' => 'admin\EspecialidadesController@index']);
        Route::get('/editar/{id}',['as' => 'espec.editar', 'uses' => 'admin\EspecialidadesController@editar']);
        Route::post('/editar/{id}',['as' => 'espec.actualizar', 'uses' => 'admin\EspecialidadesController@actualizar']);
        Route::get('/agregar',['as' => 'espec.crear', 'uses' => 'admin\EspecialidadesController@crear']);
        Route::post('/agregar',['as' => 'espec.agregar', 'uses' => 'admin\EspecialidadesController@agregar']);
        Route::get('/show',['as' => 'espec.mostrar', 'uses' => 'admin\EspecialidadesController@mostrar']);
    });
});
