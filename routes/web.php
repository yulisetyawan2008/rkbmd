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

Route::get('/program', 'ProgramController@index');
Route::get('/program/create', 'ProgramController@create');
Route::post('/program', 'ProgramController@store');
Route::get('/program/{id}/edit', 'ProgramController@edit');
Route::put('/program/{id}', 'ProgramController@update');
Route::delete('/program/{id}', 'ProgramController@destroy');

Route::get('/kegiatan', 'KegiatanController@index');
Route::get('/kegiatan/create', 'KegiatanController@create');
Route::post('/kegiatan', 'KegiatanController@store');
Route::get('/kegiatan/{id}/edit', 'KegiatanController@edit');
Route::put('/kegiatan/{id}', 'KegiatanController@update');
Route::delete('/kegiatan/{id}', 'KegiatanController@destroy');

Route::get('/output', 'OutputController@index');
Route::get('/output/create', 'OutputController@create');
Route::post('/output', 'OutputController@store');
Route::get('/output/{id}/edit', 'OutputController@edit');
Route::put('/output/{id}', 'OutputController@update');
Route::delete('/output/{id}', 'OutputController@destroy');

Route::get('/bmd', 'BmdController@index');
Route::get('/bmd/{id}/edit', 'BmdController@edit');
Route::put('/bmd/{id}', 'BmdController@update');

Route::get('/rkbmd', 'RkbmdController@index');
Route::get('/rkbmd/create', 'RkbmdController@create');
Route::post('/rkbmd', 'RkbmdController@store');
Route::get('/rkbmd/export', 'RkbmdController@export');
Route::get('/rkbmd/{id}/edit', 'RkbmdController@edit');
Route::put('/rkbmd/{id}', 'RkbmdController@update');
Route::delete('/rkbmd/{id}', 'RkbmdController@destroy');

Route::get('/pemeliharaan', 'PemeliharaanController@index');
Route::get('/pemeliharaan/create', 'PemeliharaanController@create');
Route::post('/pemeliharaan', 'PemeliharaanController@store');
Route::get('/pemeliharaan/export', 'PemeliharaanController@export');
Route::get('/pemeliharaan/{id}/edit', 'PemeliharaanController@edit');
Route::put('/pemeliharaan/{id}', 'PemeliharaanController@update');
Route::delete('/pemeliharaan/{id}', 'PemeliharaanController@destroy');
