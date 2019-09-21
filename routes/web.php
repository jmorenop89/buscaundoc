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
 Route::get('/paciente', function () {
    return view('online.registrar.paciente');
});

Route::get('/doctor', function () {
    return view('online.registrar.doctor');
});
 Route::get('/admine', function () {
     return view('admin.layout.index');
 });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
