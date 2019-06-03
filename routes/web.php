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

use Illuminate\Http\Request;

Route::get('/listar', 'ObjectController@list');
Route::get('/', 'ObjectController@formRead');
Route::post('/ler', 'ObjectController@read');
Route::get('/form-cadastrar', 'ObjectController@formCreate');
Route::post('/cadastrar', 'ObjectController@create');
Route::get('/{id}/form-editar', 'ObjectController@formEdit');
Route::post('/{id}/editar', 'ObjectController@edit');
Route::get('/{id}/excluir', 'ObjectController@delete');
