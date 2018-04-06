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

Route::get('/admin/categorias', [
    'as' => 'categoria-listar',
    'uses' => 'CategoriaController@listar'
]);

Route::get('/admin/categoria/novo-form', [
    'as' => 'categoria-novo-form',
    'uses' => 'CategoriaController@novoForm'
]);

Route::get('/admin/categoria/editar-form/{id}', [
    'as' => 'categoria-editar-form',
    'uses' => 'CategoriaController@editarForm'
]);

Route::get('/admin/categoria/apagar/{id}', [
    'as' => 'categoria-apagar',
    'uses' => 'CategoriaController@apagar'
]);

Route::post('/admin/categoria/novo', [
    'as' => 'categoria-novo',
    'uses' => 'CategoriaController@novo'
]);
Route::post('/admin/categoria/editar/{id}', [
    'as' => 'categoria-editar',
    'uses' => 'CategoriaController@editar'
]);

Route::get('/admin/postagens', [
    'as' => 'postagem-listar',
    'uses' => 'PostagemController@listar'
]);
