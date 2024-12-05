@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Adicionar Produto</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>

        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea name="description" class="form-control" id="description"></textarea>
        </div>

        <div class="form-group">
            <label for="price">Preço</label>
            <input type="number" name="price" class="form-control" id="price" required>
        </div>

        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" name="stock" class="form-control" id="stock" required>
        </div>

        <div class="form-group">
            <label for="image_url">URL da Imagem</label>
            <input type="text" name="image_url" class="form-control" id="image_url">
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
</div>
@endsection
