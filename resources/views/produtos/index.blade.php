@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row text-center">
        <div class="col-md-12">
            <h1>LISTA DE PRODUTOS</h1>
            <hr>
        </div>
    </div>

    <!-- Exibindo a mensagem de sucesso se existir -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="text-center">
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Adicionar Produto</a>
    </div>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Preço</th>
                <th scope="col">Stock</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}€</td>
                <td>{{ $product->stock }}</td>
                <td>
                    <div class="d-flex gap-2">
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Editar</a>

                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </div>
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection