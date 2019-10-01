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

Route::get('/admine',
function(){
	return view('admin.paciente.index');

});

Auth::routes();


Route::post('/logout','Online\LoginController@logout')->name('logout');

Route::post('/login','Auth\LoginController@validateLogin');


Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admine', 'admin\PacientesController@index');



Route::get('/logeado', function () {
    return view('online.logeado.index');
});

Route::get('/logeadolista', function () {
    return view('online.logeado.listadoc');
});

Route::get('/logeadodetalle', function () {
    return view('online.logeado.detalle');
});
Route::get('/repo', 'admin\UserController@listado');
Route::get('/prueba', "OnlineController@prueba");

Route::get('/admindoc', 'admin\DoctoresController@index');

Route::get('/admine_edit/{id}', ['as'=>'pac.edit','uses'=> 'admin\PacientesController@edit']);

Route::group(['prefix' => 'ladmin'],function(){
    Route::get('/',['as' => 'admin.index', 'uses' => 'admin\LoginController@login']);
});
