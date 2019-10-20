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
Auth::routes();

Route::get('/','OnlineController@index')->name('inicio');
Route::get('login',[ 'as' => 'login','uses'=>'Online\LoginController@index']);
Route::post('login',['as' => 'login','uses'=>'Auth\LoginController@validateLogin']);
Route::post('logout',[ 'as' => 'logout','uses'=>'Online\LoginController@logout']);

Route::group(['prefix' => 'register'], function(){
    Route::get('patient',['as' => 'reg-pac', 'uses' => 'OnlineController@regpac']);
    Route::post('patient',['as' => 'reg-pac', 'uses' => 'Online\PacienteController@register']);
    Route::get('doctor',['as' => 'reg-doc', 'uses' => 'OnlineController@regdoc']);
    Route::post('doctor',['as' => 'reg-doc', 'uses' => 'Online\DoctorController@register']);
});


Route::get('/list','OnlineController@busqueda')->name('buscar');

Route::group(['middleware' => 'auth'],function(){
    Route::group(['prefix' => 'profile'],function(){
        Route::get('/',['as' =>'profile','uses'=>'Online\ProfileController@index']);
        Route::post('/{id}',['as' =>'paciente.edit','uses'=>'Online\PacienteController@edit']);
        Route::post('/doctor/{id}',['as' =>'doctor.edit','uses'=>'Online\DoctorController@edit']);
        Route::post('/horas/{id}',['as' =>'horarios','uses'=>'Online\ProfileController@guardar_horarios']);
        Route::post('/image/save-image',['as'=>'profile.image.store','uses'=>'Online\ProfileController@store_image']);
        Route::post('/image/delete-image',['as'=>'profile.image.delete','uses'=>'Online\ProfileController@delete_image']);
    });
    Route::get('/detalle/{id}','OnlineController@det_hora')->name('detalle');
    Route::post('/reservar/{id}','Online\CitaController@reservar')->name('reservar');
    Route::get('/eliminar/{id}','Online\DoctorController@dele_hora')->name('dispo.e');


});

Route::get('getspec','OnlineController@json_specialty');
Route::get('getcity','OnlineController@json_city');

// ADMIN
Route::group(['prefix' => 'admin'],function(){
    Route::get('/',['as' => 'admin', 'uses' => 'admin\LoginController@index']);
    Route::post('/',['as' => 'admin','uses'=>'admin\LoginController@login']);

    Route::group(['middleware'=>'auth.admin'],function(){

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

        Route::group(['prefix' => 'ciudad'],function(){
            Route::get('/',['as' => 'ciud.index', 'uses' => 'admin\CiudadController@index']);
            Route::get('/editar/{id}',['as' => 'ciud.editar', 'uses' => 'admin\CiudadController@editar']);
            Route::post('/editar/{id}',['as' => 'ciud.actualizar', 'uses' => 'admin\CiudadController@actualizar']);
            Route::get('/agregar',['as' => 'ciud.crear', 'uses' => 'admin\CiudadController@crear']);
            Route::post('/agregar',['as' => 'ciud.agregar', 'uses' => 'admin\CiudadController@agregar']);
            Route::get('/show',['as' => 'ciud.mostrar', 'uses' => 'admin\CiudadController@mostrar']);
        });

        Route::group(['prefix' => 'dashboard'],function(){
            Route::get('/',['as' => 'dash.index', 'uses' => 'admin\DashboardController@index']);

        });
    });


});
