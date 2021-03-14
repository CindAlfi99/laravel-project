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

use Illuminate\Support\Facades\Route;

// use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('landing.index');
});
// Route::get('/about', function () {
//     return view('about.about');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard.index');
// });

Route::get('/transaksi', 'TransaksiController@show');
Route::get('/signin', 'TransaksiController@show');

// Route::get('/', 'PagesController@landing');

Route::get('/about', 'PagesController@index');
//routes untuk register
Route::get('/register', 'Register@index');
Route::get('/laporan', 'LaporanConstumer@index');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->middleware('auth');;
