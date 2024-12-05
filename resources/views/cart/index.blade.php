@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="text-center">Carrinho de Compras</h1>
    <hr>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($cartItems->isEmpty())
        <p class="text-center">Seu carrinho está vazio.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Total</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cartItems as $item)
                    <tr>
                        <td>{{ $item->product->name }}</td>
                        <td>€{{ number_format($item->product->price, 2, ',', '.') }}</td>
                        <td>
                            <!-- Formulário para editar quantidade -->
                            <form action="{{ route('cart.update', $item->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('PUT')
                                <input type="number" name="quantity" value="{{ $item->quantity }}" min="1" class="form-control" style="width: 70px; display: inline;">
                                <button type="submit" class="btn btn-sm btn-primary ms-2">Atualizar</button>
                            </form>
                        </td>
                        <td>€{{ number_format($item->product->price * $item->quantity, 2, ',', '.') }}</td>
                        <td>
                            <!-- Formulário para remover produto -->
                            <form action="{{ route('cart.remove', $item->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Remover</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-end">
            <h4>Total Geral: €{{ number_format($cartItems->sum(fn($item) => $item->product->price * $item->quantity), 2, ',', '.') }}</h4>
        </div>
    @endif
</div>
@endsection
