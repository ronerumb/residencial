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
    return view('welcome');
});


Route::get('/Morador', 'MoradorController@index');
Route::get('/Veiculos', 'VeiculosController@exibir');
Route::get('/Veiculos/Cadastrar', 'VeiculosController@cadastrar');
Route::post('/Veiculos/Salvar', 'VeiculosController@salvar');
Route::post('/Veiculos/Deletar', 'VeiculosController@delete');

Route::get('/Morador/Exibir', 'MoradorController@exibir');
Route::post('/Morador/Salvar', 'MoradorController@salvar');
Route::post('/Morador/Update', 'MoradorController@update');
Route::post('/Morador/Deletar', 'MoradorController@delete');


Route::post('/Morador', 'MoradorController@index');