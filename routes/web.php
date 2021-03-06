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

Route::get('/', 'MoradorController@exibir');


Route::get('/Morador', 'MoradorController@index');
Route::get('/Veiculos', 'VeiculosController@exibir');
Route::get('/Visitante', 'VisitanteController@exibir');
Route::post('/Visitante', 'VisitanteController@exibir');
Route::post('/Visitante/Deletar', 'VisitanteController@delete');
Route::post('/Visitante/Saida', 'VisitanteController@saida');

Route::get('/Visitante/Cadastro', 'VisitanteController@cadastro');
Route::post('/Visitante/Save', 'VisitanteController@save');
Route::get('/Veiculos/Cadastrar', 'VeiculosController@cadastrar');
Route::post('/Veiculos/Salvar', 'VeiculosController@salvar');
Route::post('/Veiculos/Deletar', 'VeiculosController@delete');

Route::get('/Morador/Exibir', 'MoradorController@exibir');
Route::post('/Morador/Salvar', 'MoradorController@salvar');
Route::post('/Morador/Update', 'MoradorController@update');
Route::post('/Morador/Deletar', 'MoradorController@delete');


Route::post('/Morador', 'MoradorController@index');