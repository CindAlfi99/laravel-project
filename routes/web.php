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
    return view('landing.index');
});
<<<<<<< HEAD
// Route::get('/', function () {
//     return view('assets/img/');
// });
//root 

=======

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/transaksi', 'TransaksiController@show');
Route::get('/signin', 'TransaksiController@show');
>>>>>>> 7e24f44faa6e5ab1a2e487c3159fbae7f4aceaab
