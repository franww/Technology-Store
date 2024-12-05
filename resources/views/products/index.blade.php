@extends('layouts.app')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container mt-4">
        <div class="row text-center">
            <div class="col-md-12">
                <h1>Produtos Disponíveis</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            @foreach ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $product->image_url ?? 'default.jpg' }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <h6><strong>Preço:</strong> €{{ number_format($product->price, 2, ',', '.') }}</h6>
                        <p><strong>Quantidade Disponivel:</strong> {{ $product->stock }}</p>
                        <form action="{{ route('cart.add', $product->id) }}" method="POST" style="display: inline;">
                            @csrf
                            <button type="submit" class="btn btn-primary">Comprar</button>
                        </form>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>

@endsection