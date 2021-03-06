<?php

namespace EJS\Http\Controllers;

use EJS\Http\Requests\ProdutoRequest;
use EJS\Http\Requests;
use EJS\Produto;

class ProdutosController extends Controller
{
    public function __construct() 
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $produtos = Produto::all();
        return view('produtos.index', ['produtos' => $produtos]);
    }
    
    public function create()
    {
        return view('produtos.create');
    }
    
    public function store(ProdutoRequest $request)
    {
        $input = $request->all();
        Produto::create($input);
        return redirect()->route('indexProdutos');
    }
    
    public function destroy($id)
    {
        Produto::find($id)->delete();
        return redirect()->route('indexProdutos');
    }
    
    public function edit($id)
    {
        $produto = Produto::find($id);
        return view('produtos.edit', compact('produto'));
    }
    
    public function update(ProdutoRequest $request, $id)
    {
        Produto::find($id)->update($request->all());
        return redirect()->route('indexProdutos');
    }
}
