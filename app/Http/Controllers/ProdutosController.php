<?php

namespace EJS\Http\Controllers;

use EJS\Http\Requests\ProdutoRequest;
use EJS\Http\Requests;
use EJS\Produto;

class ProdutosController extends Controller
{
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
        return redirect('produtos');
    }
    
    public function destroy($id)
    {
        Produto::find($id)->delete();
        return redirect('produtos');
    }
    
    public function edit($id)
    {
        $produto = Produto::find($id);
        return view('produtos.edit', compact('produto'));
    }
    
    public function update(ProdutoRequest $request, $id)
    {
        Produto::find($id)->update($request->all());
        return redirect('produtos');
    }
}
