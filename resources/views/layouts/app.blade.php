<!doctype html>
<html lang="en">

<head>
    <!-- Meta tags obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Ícone -->
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/gif" sizes="16x16">
    <!-- Fontes do Google -->
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <!-- CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- CSS Principal -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>CHIQUINHO STORE</title>
</head>

<body>
    <main class="container">
        <!-- Cabeçalho -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light fill">
                <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Alternar navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Início</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/carrinho">Carrinho</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/sobre-nos">Sobre Nós</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/contactos">Contactos</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/addprodutos">Add_Produtos</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/contact-messages">adminMensages</a>
                        </li>
                        <li class="nav-item active">
                            @if (Route::has('login'))
                            <nav class="nav-item active">
                                @auth
                                    <a
                                        href="{{ url('/dashboard') }}"
                                        class="nav-link"
                                    >
                                        Dashboard
                                    </a>
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="nav-link"
                                    >
                                        Log in
                                    </a>

                                        
                                @endauth
                            </nav>
                        @endif
                        </li>
                        <li class="nav-item active">
                        <a
                                        href="{{ route('register') }}"
                                        class="nav-link"
                                    >
                                        Registar
                                    </a>
                        </li>
                        

                    </ul>
                </div>
            </nav>
        </header>
     
        <!-- Header end  -->
        @yield('content')

        <!-- Categories Start -->
        

       
        <footer>
            <div class="text-center">
                <strong>Francisco Pinto</strong> &copy; All Right reserved
            </div>
        </footer>