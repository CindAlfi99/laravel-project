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
    return view('landing.index');
})->middleware('guest');
Route::get('/about', 'PagesController@index')->middleware('guest');

Auth::routes();

// Harus login dulu kalo mau akses halaman di bawah ini
Route::get('/dashboard', 'DashboardController@index')->middleware('auth');
Route::get('/laporan', 'LaporanConstumer@index')->middleware('auth');
Route::get('/transaksi', 'TransaksiController@show')->middleware('auth');