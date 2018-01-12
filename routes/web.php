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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@absen');

Route::get('/admin/base', 'adminKontrol@index')->name('admin.base');
Route::get('/admin', 'Auth\adminAuthKontrol@index')->name('adminlogin');

Route::post('/admin', 'Auth\adminAuthKontrol@login')->name('admin.log');
Route::get('/admin/logout', 'adminKontrol@logout')->name('admin.logout');
Route::get('/admin/regkaryawan', 'adminKontrol@regkaryawan')->name('admin.regkaryawan');
Route::get('/admin/postnews', 'adminKontrol@postnews')->name('admin.postnews');
Route::get('/home/logout', 'HomeController@logout');



