@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="d-block mw-100 py-5 mx-auto">
                <span class="title text-uppercase text-secondary font-weight-normal h1 line-height-short">
                    <span class="d-inline font-weight-bold" style="color:rgb(130, 255, 158);">/</span>Clientes 6P</span>
                </span>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light-gray py-3"></div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-2 border p-4">
                <img src="{{ asset('img/cliente-anglo.png') }}" class="img-fluid d-block mx-auto w-75" alt="">
            </div>
            <div class="col-2 border p-4">
                <img src="{{ asset('img/cliente-algar.png') }}" class="img-fluid d-block mx-auto w-75" alt="">
            </div>
            <div class="col-2 border p-4">
                <img src="{{ asset('img/cliente-barao.png') }}" class="img-fluid d-block mx-auto w-75" alt="">
            </div>
            <div class="col-2 border p-4">
                <img src="{{ asset('img/cliente-bom-jesus.png') }}" class="img-fluid d-block mx-auto w-75" alt="">
            </div>
            <div class="col-2 border p-4">
                <img src="{{ asset('img/cliente-iguatemi.png') }}" class="img-fluid d-block mx-auto w-75" alt="">
            </div>
            <div class="col-2 border p-4">
                <img src="{{ asset('img/cliente-somos.png') }}" class="img-fluid d-block mx-auto w-75" alt="">
            </div>
            <div class="col-2 border p-4">
                <img src="{{ asset('img/cliente-credicitrus.png') }}" class="img-fluid d-block mx-auto w-75" alt="">
            </div>
            <div class="col-2 border p-4">
                <img src="{{ asset('img/cliente-bee.png') }}" class="img-fluid d-block mx-auto w-75" alt="">
            </div>
            <div class="col-2 border p-4">
                <img src="{{ asset('img/cliente-anglo.png') }}" class="img-fluid d-block mx-auto w-75" alt="">
            </div>
            <div class="col-2 border p-4">
                <img src="{{ asset('img/cliente-algar.png') }}" class="img-fluid d-block mx-auto w-75" alt="">
            </div>
        </div>
    </div>
    
@endsection