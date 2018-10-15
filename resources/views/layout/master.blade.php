<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">        
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,900|Rubik:300,400,700" rel="stylesheet">
        <title>{{ env('APP_NAME') }}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdn.jsdelivr.net/npm/scrollreveal@4.0.4/dist/scrollreveal.min.js"></script>
        @yield('style')
    </head>
    <body>
        {{-- <div class="container mt-5">
            <div class="sk-folding-cube mt-5">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div> --}}

        <nav id="nav" class="fixed-top">
            <div class="w-100 bg-black py-2">
                <div class="container-fluid">
                    <div class="row text-white d-flex align-items-stretch">
                        <div class="col-6 d-flex align-items-center justify-content-start">
                            <img src="{{ asset('img/6p_marketing.svg') }}" style="height: 94px">
                        </div>
                        <div class="col-6 d-flex align-items-center justify-content-end text-right">
                            <a id="toggle-nav-open" class="p-2 cursor-pointer">
                                <img class="burger-icon" src="{{ asset('img/menu-button.svg') }}">
                            </a>
                            <a id="toggle-nav-close" class="p-2 cursor-pointer d-none">
                                <img class="burger-icon" src="{{ asset('img/close-button.svg') }}">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <nav class="position-fixed sidenav d-none">
            <div class="d-flex align-items-stretch justify-content-center flex-column mt-5 text-center">
                <a href="#" class="text-white h3 d-block text-uppercase py-3">Home</a>
                <a href="#" class="text-white h3 d-block text-uppercase py-3">Agência</a>
                <a href="#" class="text-white h3 d-block text-uppercase py-3">Clientes</a>
                <a href="#" class="text-white h3 d-block text-uppercase py-3">Serviços</a>
                <a href="#" class="text-white h3 d-block text-uppercase py-3">Portfólio</a>
                <a href="#" class="text-white h3 d-block text-uppercase py-3">Blog</a>
                <a href="#" class="text-white h3 d-block text-uppercase py-3">Contato</a>
            </div>
        </nav>
        <main id="content">
            @yield('content')
        </main>
        
        @yield('script')

    
    <script src="{{ asset('js/app.js') }}"></script>
    
    </body>
</html>