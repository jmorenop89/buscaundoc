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
     return view('online.layout.index');
<<<<<<< HEAD
 });
=======
});
>>>>>>> 9fb23766134508a4b7283149457ba150f556afaf

// Route::get('/', function () {
//     return view('welcome');
// });

<<<<<<< HEAD
//Route::get('/', function () {
//    return view('admin.layout.index');
//});
=======
/* Route::get('/', function () {
    return view('admin.layout.index');
}); */
>>>>>>> 9fb23766134508a4b7283149457ba150f556afaf

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
