<!-- resources/views/contactmessages/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Mensagem de {{ $message->name }}</h1>
            <p><strong>Email:</strong> {{ $message->email }}</p>
            <p><strong>Mensagem:</strong></p>
            <p>{{ $message->message }}</p>
            <a href="{{ route('contactmessages.index') }}" class="btn btn-primary">Voltar</a>
        </div>
    </div>
</div>
@endsection
