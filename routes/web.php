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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

// Pets routes
Route::get('/pet', 'PetController@index');
Route::get('/pet/cadastro', 'PetController@formCadastro');
Route::post('/pet/cadastro', 'PetController@cadastro');
Route::get('/pet/edita/{id}', 'PetController@formEdita');
Route::post('/pet/edita/{id}', 'PetController@edita');
Route::post('/pet/editaImage/{id}', 'PetController@editaImage');
Route::get('/pet/deleta/{id}', 'PetController@deleta');


//Doaçoes routes
Route::get('doacoes', 'DoacaoController@index');
Route::get('doacoes/cadastro', 'DoacaoController@formCadastro');
Route::post('doacoes/cadastro', 'DoacaoController@cadastro');
Route::get('doacoes/deleta/{id}', 'DoacaoController@deleta');
Route::get('doacoes/edita/{id}', 'DoacaoController@formEdita');
Route::post('doacoes/edita/{id}', 'DoacaoController@edita');


//Veterinarios routes
Route::get('veterinarios', 'VeterinarioController@index');
Route::get('veterinarios/cadastro', 'VeterinarioController@formCadastro');
Route::post('veterinarios/cadastro', 'VeterinarioController@cadastro');
Route::get('veterinarios/edita/{id}', 'VeterinarioController@formEdita');
Route::post('veterinarios/edita/{id}', 'VeterinarioController@edita');
Route::get('veterinarios/deleta/{id}', 'VeterinarioController@deleta');


//Atendimento routes
Route::get('atendimentos', 'AtendimentoController@index');
Route::get('atendimentos/cadastro', 'AtendimentoController@formCadastro');
Route::post('atendimentos/cadastro', 'AtendimentoController@cadastro');
Auth::routes();

