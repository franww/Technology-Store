<!-- resources/views/contato.blade.php -->
@extends('layouts.app')

@section('content')
<div class="row contato-container">
    <div class="col-md-6">
        <h1 class="contato-title">Entre em Contacto</h1>
        <p class="contato-texto">
            Se tiver alguma dúvida ou precisar de assistência, estamos aqui para ajudar! A nossa equipa está disponível para esclarecer qualquer questão que tenha. Não hesite em entrar em contacto conosco. Preencha o formulário abaixo ou envie um e-mail diretamente para nós. Estamos ansiosos para ouvir a sua opinião!
        </p>
        <p><strong>Endereço:</strong> Rua Exemplo, 123, Cidade, País</p>
        <p><strong>Email:</strong> <a href="franww13@gmail.com">contato@chichnostore.com</a></p>
        <p><strong>Telefone:</strong> +123 456 7890</p>
    </div>
    <div class="col-md-6">
        <h2 class="form-title">Formulário de Contato</h2>
        <form action="{{ route('contato.submit') }}" method="POST" class="contato-form">
            @csrf <!-- Adiciona o token CSRF para proteção -->
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite seu nome" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Digite seu e-mail" required>
            </div>
            <div class="form-group">
                <label for="mensagem">Mensagem</label>
                <textarea id="mensagem" name="mensagem" class="form-control" placeholder="Digite sua mensagem" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn contato-btn">Enviar</button>
        </form>
    </div>
</div>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@endsection
