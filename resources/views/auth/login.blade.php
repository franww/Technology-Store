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
                            @if (Route::has('login'))
                            <nav class="nav-item active">
                                @auth
                                <a
                                    href="{{ url('/dashboard') }}"
                                    class="nav-link">
                                    Dashboard
                                </a>
                                @else
                                <a
                                    href="{{ route('login') }}"
                                    class="nav-link">
                                    Log in
                                </a>


                                @endauth
                            </nav>
                            @endif
                        </li>
                        <li class="nav-item active">
                            <a
                                href="{{ route('register') }}"
                                class="nav-link">
                                Registar
                            </a>
                        </li>



                    </ul>
                </div>
            </nav>
        </header>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Login</h2>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-3">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="text-danger mt-2" />
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="form-control"
                                  type="password"
                                  name="password"
                                  required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="text-danger mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="mb-3 form-check">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label for="remember_me" class="form-check-label">
                        {{ __('Remember me') }}
                    </label>
                </div>

                <div class="d-flex justify-content-between align-items-center">
                    @if (Route::has('password.request'))
                        <a class="text-decoration-none" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-primary-button class="btn btn-primary" style="background-color:rgb(211, 190, 85)">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</div>
<footer>
            <div class="text-center">
                <strong>Francisco Pinto</strong> &copy; All Right reserved
            </div>
        </footer>