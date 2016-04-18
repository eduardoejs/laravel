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

Route::group(['prefix' => 'produtos'], function(){
    Route::get('', ['as' => 'indexProdutos', 'uses' => 'ProdutosController@index']);
    Route::get('create', ['as' => 'formProdutos', 'uses' => 'ProdutosController@create']);
    Route::post('store', ['as' => 'gravarProdutos', 'uses' => 'ProdutosController@store']);
    Route::get('{id}/destroy', ['as' => 'excluirProdutos', 'uses' => 'ProdutosController@destroy']);
    Route::get('{id}/edit', ['as' => 'formEditProdutos', 'uses' => 'ProdutosController@edit']);
    Route::put('{id}/update', ['as' => 'alterarProdutos', 'uses' => 'ProdutosController@update']);    
});

