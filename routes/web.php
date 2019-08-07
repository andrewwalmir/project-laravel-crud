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

Route::get('/imoveis', 'ImoveisController@index');

Route::get('/imoveis/novo', 'ImoveisController@create');
Route::post('/imoveis/cadastrar', 'ImoveisController@store');

Route::get('/imoveis/{url}', 'ImoveisController@show');

Route::get('/imoveis/editar/{url}', 'ImoveisController@edit');
Route::put('/imoveis/atualizar/{url}', 'ImoveisController@update');

Route::get('/imoveis/excluir/{url}', 'ImoveisController@destroy');