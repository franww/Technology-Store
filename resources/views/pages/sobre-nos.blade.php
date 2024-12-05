@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<!-- Sobre Nós Start -->
<section id="sobre-nos">
    <div class="container">
        <div class="sobre-nos-header">
        <div class="row sobre-nos-container">
    <div class="col-md-6">
        <h1 class="sobre-nos-title">Sobre a Chichno Store</h1>
        <p class="sobre-nos-texto">
            A <strong>Chichno Store</strong> é muito mais do que uma simples loja online – somos uma plataforma dedicada a trazer as mais recentes inovações tecnológicas diretamente para as mãos dos nossos clientes. Fundada com a missão de transformar a maneira como as pessoas compram produtos eletrônicos, a Chichno Store oferece uma vasta gama de produtos de última geração, desde smartphones e laptops até gadgets inteligentes e acessórios inovadores. Acreditamos que a tecnologia deve ser acessível a todos, por isso trabalhamos incansavelmente para garantir que os nossos preços sejam justos e competitivos, sem nunca comprometer a qualidade.
        </p>
    </div>
    <div class="col-md-6">
        <img src="images/logo2.png" alt="Sobre a empresa" class="img-fluid sobre-nos-imagem">
    </div>
</div>

        </div>

        <div class="row">
            <div class="col-md-12">
                <h2>Nossa Missão</h2>
                <p>Oferecer produtos inovadores e de alta qualidade que atendam às necessidades e desejos dos nossos clientes. Com uma vasta gama de produtos de tecnologia, buscamos sempre estar à frente nas últimas tendências, oferecendo as melhores opções do mercado.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <h2>Nossos Valores</h2>
                <ul>
                    <li><b>Qualidade:</b> Garantimos que cada produto é rigorosamente testado para entregar o melhor desempenho.</li>
                    <li><b>Inovação:</b> Estamos sempre à procura de novidades e tecnologias de ponta para oferecer o melhor ao mercado.</li>
                    <li><b>Atendimento ao cliente:</b> Nosso suporte é dedicado e está sempre pronto para ajudar os nossos clientes com qualquer dúvida ou problema.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Sobre Nós End -->


@endsection
