<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'produtos', 'where' => ['id' => '[0-9]+']], function(){
    Route::get('', ['as' => 'indexProdutos', 'uses' => 'ProdutosController@index']);
    Route::get('create', ['as' => 'novoProduto', 'uses' => 'ProdutosController@create']);
    Route::post('store', ['as' => 'gravarProduto', 'uses' => 'ProdutosController@store']);
    Route::get('{id}/destroy', ['as' => 'excluirProduto', 'uses' => 'ProdutosController@destroy']);
    Route::get('{id}/edit', ['as' => 'editProduto', 'uses' => 'ProdutosController@edit']);
    Route::put('{id}/update', ['as' => 'alterarProduto', 'uses' => 'ProdutosController@update']);    
});

