@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Produtos</h1>  
    
    <a href="{{route('novoProduto')}}" class="btn btn-default">Novo Produto</a><br/><br/>
    
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Avaliações</th>
                <th>Tags</th>
                <th>Ações</th>                
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td>{{ count($produto->avaliacoes) }}</td>
                    <td>
                        @foreach($produto->tags as $tag)
                            {{$tag->name}}
                        @endforeach
                    </td>
                    <td>
                        <a href="{{route('editProduto', ['id' => $produto->id])}}" class="btn-sm btn-success">Editar</a>
                        <a href="{{route('excluirProduto', ['id' => $produto->id])}}" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach            
        </tbody>
    </table>    
</div>
@endsection
