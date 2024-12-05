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
     

        <!-- Mack book pro start -->

        <section id="mack-book">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6 mack">
                                <h1>MackBook Pro</h1>
                                <p>Qualidade de processamento incrivel, qualidade de som e acima de tudo a melhor estetica possivel!</p>
                                
                            </div>
                            <div class="col-md-6">
                                <img src="images/banner-products/product-1.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6 mack">
                                <h1>Alexa</h1>
                                <p>Com novas funcionalidades a Alexa, possiu grande compatibilidade com todos os sistemas e vai lhe retirar muito trabalho!</p>
                                
                            </div>
                            <div class="col-md-6">
                                <img src="images/banner-products/slider-1.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6 mack">
                                <h1>JBU</h1>
                                <p>JBU para quem procura a mais recente coluna do mercado, volume intenso com muita qualidade de som!</p>
                                
                            </div>
                            <div class="col-md-6">
                                <img src="images/banner-products/slider-3.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- End -->

        <!-- Smart Phone start  -->
        <section id="smartphone">
            <div class="container">
                <div class="smartphone-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h1>SmartPhones</h1>
                        </div>
                        <div class="col-md-6 text-right">
                        <a href="/produtosview" class="seeall-btn">Ver Mais </a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card text-center" style="width: 18rem;border:none;">
                            <img src="images/phone/phone-2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><b>IPhone 11 pro</b></h5>
                                <p class="card-text">O melhor para quem procura o melhor.</p>
                                <h5><b>9999€</b></h5>
                                <a href="/produtosview" class="btn smartphone-btn">Ver Mais
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center" style="width: 18rem;border:none;">
                            <img src="images/phone/phone-3.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><b>Samsung Galaxy Note10+</b></h5>
                                <p class="card-text">A melhor produtividade em apenas um lugar.</p>
                                <h5><b>9999€</b></h5>
                                <a href="/produtosview" class="btn smartphone-btn">Ver Mais
                                    
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center" style="width: 18rem;border:none;">
                            <img src="images/phone/phone-1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><b>Redmi Note 8</b></h5>
                                <p class="card-text">Preço qualidade imbativel, imparavel.</p>
                                <h5><b>9999€</b></h5>
                                <a href="/produtosview" class="btn smartphone-btn">Ver Mais
                                    
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End  -->

        <!-- Laptop start  -->

        <section id="laptop">
            <div class="container">
                <div class="laptop-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h1>Laptop</h1>
                        </div>
                        <div class="col-md-6 text-right">
                        <a href="/produtosview" class="seeall-btn">Ver Mais </a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card text-center" style="width: 18rem;border:none;">
                            <img src="images/laptop/product-1.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><b>Asus VivoBook</b></h5>
                                <p class="card-text">3070ti super, ryzen 9 7500x3d, alguém pode pedir melhor?</p>
                                <h5><b>9999€</b></h5>
                                <a href="/produtosview" class="btn laptop-btn">Ver Mais
                                    
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center" style="width: 18rem;border:none;">
                            <img src="images/laptop/product-2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><b>Razer Blade 15</b></h5>
                                <p class="card-text">Razer? é preciso dizer mais alguma coisa?.</p>
                                <h5><b>9999€</b></h5>
                                <a href="/produtosview" class="btn laptop-btn">Ver Mais
                                    
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center" style="width: 18rem;border:none;">
                            <img src="images/laptop/product-3.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><b>Xaiomi Mi Note Book pro</b></h5>
                                <p class="card-text">O melhor para quem busca performance a baixo custo.</p>
                                <h5><b>9999€</b></h5>
                                <a href="/produtosview" class="btn laptop-btn">Ver Mais
                                    
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End  -->

        <!-- Categories Start -->

        <section id="categories">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <h1>Categories</h1>
                        <hr>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-3 mt-5 mb-5">
                        <div class="categories-card">
                            <img src="images/Categories/bag.png" alt="" class="img-fluid">
                            <h2>Bag</h2>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="categories-card mb-5">
                            <img src="images/Categories/perfume.png" alt="" class="img-fluid">
                            <h2>Beauty</h2>
                        </div>
                        <div class="categories-card mb-5">
                            <img src="images/Categories/shoe.png" alt="" class="img-fluid">
                            <h2>Shoes</h2>
                        </div>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <img src="images/Categories/pale-order.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>

        <!-- End -->
        <footer>
            <div class="text-center">
                <strong>Francisco Pinto</strong> &copy; All Right reserved
            </div>
        </footer>

    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>

</html>