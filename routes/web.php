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
     return view('online.index');
 });

 Route::get('/list', function () {
    return view('online.reservar_cita.listadoc');
});

Route::get('/detalle', function () {
    return view('online.reservar_cita.detalle');
});

 Route::get('/paciente', function () {
    return view('online.registrar.paciente');
});

Route::get('/doctor', function () {
    return view('online.registrar.doctor');
});
 Route::get('/admine', function () {
     return view('admin.layout.index');
 })->name('adi');

  Route::get('/doc', function () {
     return view('online.log-pac.index');
 });

  Route::get('/pac', function () {
     return view('online.log-pac.index');
 });


Auth::routes();

 Route::get('/login', function () {
     return view('auth.login');
 })->name('login');

Route::get('/home', 'HomeController@index')->name('home');
