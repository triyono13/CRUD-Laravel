<?php

use Illuminate\Support\Facades\Route;

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
    return view('templated.master');
});

Route::get('/item', function () {
    return view('items.index');
});

Route::get('/pertanyaan', 'PertanyaanController@index')->name('pertanyaan');
Route::get('/pertanyaan/create', 'PertanyaanController@create')->name('pertanyaan.create');
Route::post('/pertanyaan', 'PertanyaanController@store')->name('store');
Route::get('/jawaban/{id}', 'JawabanController@index')->name('jawaban');
Route::post('/jawaban/{id}', 'JawabanController@store')->name('jawaban.simpan');