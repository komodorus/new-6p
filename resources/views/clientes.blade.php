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
            <div class="col-md-2 col-sm-4 col-6 border p-4 d-flex">
                <img data-src="{{ asset('img/cliente-anglo.png') }}" src="{{ asset('img/ajax-loader.gif') }}" class="lozad img-fluid d-block mx-auto align-self-center" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-6 border p-4 d-flex">
                <img data-src="{{ asset('img/cliente-algar.png') }}" src="{{ asset('img/ajax-loader.gif') }}" class="lozad img-fluid d-block mx-auto align-self-center" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-6 border p-4 d-flex">
                <img data-src="{{ asset('img/cliente-barao.png') }}" src="{{ asset('img/ajax-loader.gif') }}" class="lozad img-fluid d-block mx-auto align-self-center" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-6 border p-4 d-flex">
                <img data-src="{{ asset('img/cliente-bom-jesus.png' ) }}" src="{{ asset('img/ajax-loader.gif') }}" class="lozad img-fluid d-block mx-auto align-self-center" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-6 border p-4 d-flex">
                <img data-src="{{ asset('img/cliente-iguatemi.png') }}" src="{{ asset('img/ajax-loader.gif') }}" class="lozad img-fluid d-block mx-auto align-self-center" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-6 border p-4 d-flex">
                <img data-src="{{ asset('img/cliente-somos.png') }}" src="{{ asset('img/ajax-loader.gif') }}" class="lozad img-fluid d-block mx-auto align-self-center" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-6 border p-4 d-flex">
                <img data-src="{{ asset('img/cliente-credicitrus.png') }}" src="{{ asset('img/ajax-loader.gif') }}" class="lozad img-fluid d-block mx-auto align-self-center" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-6 border p-4 d-flex">
                <img data-src="{{ asset('img/cliente-bee.png') }}" src="{{ asset('img/ajax-loader.gif') }}" class="lozad img-fluid d-block mx-auto align-self-center" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-6 border p-4 d-flex">
                <img data-src="{{ asset('img/cliente-anglo.png') }}" src="{{ asset('img/ajax-loader.gif') }}" class="lozad img-fluid d-block mx-auto align-self-center" alt="">
            </div>
            <div class="col-md-2 col-sm-4 col-6 border p-4 d-flex">
                <img data-src="{{ asset('img/cliente-algar.png') }}" src="{{ asset('img/ajax-loader.gif') }}" class="lozad img-fluid d-block mx-auto align-self-center" alt="">
            </div>
        </div>
    </div>
    
@endsection