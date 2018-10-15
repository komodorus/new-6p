@extends('layout.master')

@section('content')

    <div class="tiles flex-column flex-md-row" style="display: flex; justify-content: center; flex-wrap: wrap;">
        <a class="tile overlay" href="#" style="background-color: rgb(108, 205, 222); background-image: url({{ asset('img/1.jpg') }});">
            <div class="details w-75">
                <span class="title text-uppercase font-weight-bold text-white h1">
                    <span class="d-inline" style="color:rgb(29, 138, 153)">/</span>Sobre<br>nós
                </span>
                <span class="info text-white text-uppercase h3 font-weight-light">
                    Somos uma agência de publicidade situada em Ribeirão Preto.
                </span>
            </div>
        </a>
        <a class="tile overlay" href="#" style="background-color: rgba(233, 215, 88, .7); background-image: url({{ asset('img/2.jpg') }});">
            <div class="details w-75 text-right" style="left: unset; right: 0">
                <span class="title text-uppercase font-weight-bold text-white h1">
                    <span class="d-inline" style="color:rgb(233, 215, 88)">/</span>Cápsula
                </span>
                <span class="info text-white text-uppercase h3 font-weight-light">
                    Nosso DNA de inovação nasce aqui. 
                </span>
            </div>
        </a>
    </div>

    <div class="tiles flex-column flex-md-row" style="display: flex; justify-content: center; flex-wrap: wrap;">
        <a class="tile" href="#" style="background-color: orange;">
            <div class="details">
                {{-- <span class="title">Lorem Ipsum Dolor</span> --}}
                <span class="info">Quisque vel felis lectus donec vitae dapibus magna</span>
            </div>
        </a>
    </div>

@endsection
