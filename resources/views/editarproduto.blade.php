@extends('layouts.app', ['current' => 'produtos'])

@section('body')
    <div class="card border">
        <div class="card-body">
            <form action="/produtos/{{$prod->id}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produtos</label>
                    <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="Produto" value="{{$prod->nome}}"><br>
                    <label for="categoriaProduto">Categoria</label><br>
                    <select class="form-select" name="categoriaProduto" id="categoriaProduto">
                        <option value="{{$prod->categoria_id}}" selected>{{$prod->categoria->nome}}</option>
                        @foreach ($cats as $cat)
                            <option value="{{$cat->id}}">{{$cat->nome}}</option>
                        @endforeach
                    </select><br><br>
                    <label for="precoProduto">Preço do Produto</label><br>
                    <input type="number" class="form-control" name="precoProduto" id="precoProduto" value="{{$prod->preco}}"><br>
                    <label for="estoqueProduto">Quantidade em Estoque</label><br>
                    <input type="number" class="form-control" name="estoqueProduto" id="estoqueProduto" value="{{$prod->estoque}}">
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <a href="/produtos" class="btn btn-danger btn-sm" role="button">Cancelar</a>
            </form>
        </div>
    </div>
@endsection