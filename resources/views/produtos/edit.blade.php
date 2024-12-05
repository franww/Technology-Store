@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Produto</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $product->name }}" required>
        </div>

        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea name="description" class="form-control" id="description">{{ $product->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="price">Preço</label>
            <input type="number" name="price" class="form-control" id="price" value="{{ $product->price }}" required>
        </div>

        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" name="stock" class="form-control" id="stock" value="{{ $product->stock }}" required>
        </div>

        <div class="form-group">
            <label for="image_url">URL da Imagem</label>
            <input type="text" name="image_url" class="form-control" id="image_url" value="{{ $product->image_url }}">
        </div>

        <button type="submit" class="btn btn-warning">Salvar Alterações</button>
    </form>
</div>
@endsection
