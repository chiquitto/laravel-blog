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

Route::prefix('admin')
    ->middleware('auth')
    // ->namespace('Admin')
    ->group(function(){

    Route::get('/categorias', [
        'as' => 'categoria-listar',
        'uses' => 'CategoriaController@listar'
    ]);

    Route::get('/categoria/novo-form', [
        'as' => 'categoria-novo-form',
        'uses' => 'CategoriaController@novoForm'
    ]);

    Route::get('/categoria/editar-form/{id}', [
        'as' => 'categoria-editar-form',
        'uses' => 'CategoriaController@editarForm'
    ]);

    Route::get('/categoria/apagar/{id}', [
        'as' => 'categoria-apagar',
        'uses' => 'CategoriaController@apagar'
    ]);

    Route::post('/categoria/novo', [
        'as' => 'categoria-novo',
        'uses' => 'CategoriaController@novo'
    ]);
    Route::post('/categoria/editar/{id}', [
        'as' => 'categoria-editar',
        'uses' => 'CategoriaController@editar'
    ]);

    Route::get('/postagens', [
        'as' => 'postagem-listar',
        'uses' => 'PostagemController@listar'
    ]);

    Route::get('/postagem/novo-form', [
        'as' => 'postagem-novo-form',
        'uses' => 'PostagemController@novoForm'
    ]);

    Route::post('/postagem/novo', [
        'as' => 'postagem-novo',
        'uses' => 'PostagemController@novo'
    ]);
    
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
