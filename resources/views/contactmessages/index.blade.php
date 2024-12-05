<!-- resources/views/contactmessages/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row text-center">
        <div class="col-md-12">
            <h1>LISTA DE MENSAGENS DE CONTATO</h1>
            <hr>
        </div>
    </div>

    <!-- Exibindo a mensagem de sucesso se existir -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Mensagem</th>
                <th scope="col">Data de Envio</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $message)
            <tr>
                <td>{{ $message->name }}</td>
                <td>{{ $message->email }}</td>
                <td>{{ \Illuminate\Support\Str::limit($message->message, 50) }}</td>
                <td>{{ $message->created_at->format('d/m/Y H:i') }}</td>
                <td>
                    <div class="d-flex gap-2">
                        <a href="{{ route('contactmessages.show', $message->id) }}" class="btn btn-info">Ver</a>

                        <!-- Formulário para excluir a mensagem -->
                        <form action="{{ route('contactmessages.destroy', $message->id) }}" method="POST" style="display:inline;">
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
    