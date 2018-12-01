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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::post('/inserir', 'PessoaController@store');
Route::get('/index', 'PessoaController@index');
Route::delete('listar/delete/{id}', 'PessoaController@destroy');
Route::get('/editar/{id}' , 'PessoaController@edit');
Route::post('/editar/{id}' , 'PessoaController@edit');
Route::post('/editar/{id}' , 'PessoaController@update');
