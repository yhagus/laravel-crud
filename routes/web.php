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

Route::get('/','ControllerSiswa@home');
Route::post('/login','ControllerSiswa@login');

Route::get('/siswa','ControllerSiswa@index');
Route::post('/siswa/create','ControllerSiswa@create');
Route::get('/siswa/{id}/edit','ControllerSiswa@edit');
Route::post('/siswa/{id}/update','ControllerSiswa@update');
Route::get('/siswa/{id}/delete','ControllerSiswa@delete');