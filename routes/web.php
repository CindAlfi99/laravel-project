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
use Illuminate\Support\Facades\Auth;

// Ga perlu login dulu. Tapi kalo udah login, ga bisa akses halaman ini lagi
Route::get('/', function () {
    return view('landing');
})->name('landing')->middleware('guest');

Route::get('/about', function () {
    return view('about');
})->middleware('guest');

Auth::routes();

// Route Admin (Harus Login Sebagai Admin)
Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/detail', 'DashboardController@detailShow');
Route::get('/laporan', 'LaporanController@index');
Route::get('/transaksi', 'TransaksiController@index');

//Route Customer (Harus Login Sebagai Customer)
Route::get('/home', 'UserDashboardController@index');
Route::get('/order', 'UserOrderController@index');
Route::get('/profile', 'UserProfileController@index');