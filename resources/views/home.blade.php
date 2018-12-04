@extends('layout.master')

@section('content')
    <div class="tiles flex-column flex-md-row" style="display: flex; justify-content: center; flex-wrap: wrap;">
        <a class="tile overlay" href="{{ route('aboutus') }}" style="background-color: rgb(108, 205, 222); background-image: url({{ asset('img/sobre.jpg') }});">
            <div class="details w-75">
                <span class="title text-uppercase font-weight-bold text-white h1">
                    <span class="d-inline" style="color:rgb(29, 138, 153)">/</span>Sobre<br>nós
                </span>
                <span class="info text-white text-uppercase h3 font-weight-light">
                    Somos uma agência de publicidade situada em Ribeirão Preto.
                </span>
            </div>
        </a>
        <a class="tile overlay" href="{{ route('solucoes') }}" style="background-color: rgb(233, 215, 88); background-image: url({{ asset('img/solucoes.jpg') }});">
            <div class="details w-75 text-right" style="left: unset; right: 0">
                <span class="title text-uppercase font-weight-bold text-white h1">
                    <span class="d-inline" style="color:rgb(233, 215, 88)">/</span>Estrutura<br>e soluções
                </span>
                <span class="info text-white text-uppercase h3 font-weight-light">
                    Identificamos oportunidades para alavancar negócios. 
                </span>
            </div>
        </a>
    </div>

    <div class="tiles flex-column flex-md-row" style="display: flex; justify-content: center; flex-wrap: wrap;">
        <a class="tile overlay" href="{{ route('portfolio') . '/1' }}" style="background-color: rgb(29, 138, 153); background-image: url({{ asset('img/3.jpg') }});">
            <div class="details">
                <span class="title text-uppercase font-weight-bold text-white h1">
                    <span class="d-inline" style="color:rgb(29, 138, 153)">/</span>Portfólio
                </span>
                <span class="info text-white text-uppercase h3 font-weight-light">Seja Sua Melhor Versão. <br/> <span class="d-inline font-weight-bold">#vestibularbarao2019</span> </span>
            </div>
        </a>
    </div>

    <div class="tiles flex-column flex-md-row" style="display: flex; justify-content: center; flex-wrap: wrap;">
        <a class="tile overlay" href="{{ route('contato') }}" style="background-color: rgb(124, 119, 185); background-image: url({{ asset('img/5.jpg') }});">
            <div class="details w-75">
                <span class="title text-uppercase font-weight-bold text-white h1">
                    <span class="d-inline" style="color: rgb(124, 119, 185)">/</span>Contato
                </span>
                <span class="info text-white text-uppercase h3 font-weight-light">
                    Estamos de mente aberta para a sua empresa. 
                </span>
            </div>
        </a>
        <a class="tile overlay" href="#" style="background-color: rgb(130, 255, 158); background-position: left; background-image: url({{ asset('img/capsula.jpg') }});">
            <div class="details w-75 text-right" style="left: unset; right: 0">
                <span class="title text-uppercase font-weight-bold text-white h1">
                    <span class="d-inline" style="color:rgb(130, 255, 158)">/</span>Cápsula
                </span>
                <span class="info text-white text-uppercase h3 font-weight-light">
                    Nosso DNA de inovação nasce aqui. 
                </span>
            </div>
        </a>
    </div>

@endsection

@section('script')
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script>
        
    </script>
@endsection
