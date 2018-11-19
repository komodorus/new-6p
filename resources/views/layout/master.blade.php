<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">        
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,900|Rubik:300,400,700" rel="stylesheet">
        <title>{{ env('APP_NAME') }}</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        @yield('style')
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">    
    </head>
    <body>

        <nav id="nav" class="fixed-top">
            <div class="w-100 bg-black py-2">
                <div class="container-fluid">
                    <div class="row text-white d-flex align-items-stretch">
                        <div class="col-6 d-flex align-items-center justify-content-start">
                            <a href={{ route('home') }}>
                                <img src="{{ asset('img/6p.svg') }}" style="height: 80px">
                            </a>
                        </div>
                        <div class="col-6 d-flex align-items-center justify-content-end text-right">
                            <a id="toggle-nav-open" class="p-2 cursor-pointer d-flex align-items-center">
                                <p id="icon-menu-text" class="text-uppercase mr-3 mb-0 mt-0 font-weight-bold">Menu</p>
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

        <nav class="position-fixed sidenav">
            <div class="d-flex align-items-stretch justify-content-center flex-column text-right">
                
                <div class="menu-item position-relative">
                    <a href="{{ route('home') }}" class="font-weight-bold h2 d-block text-uppercase py-3 px-5">Home</a>
                </div> 
                <div class="menu-item position-relative">
                    <a href="{{ route('aboutus') }}" class="font-weight-bold h2 d-block text-uppercase py-3 px-5">Agência</a>
                </div>
                <div class="menu-item position-relative">
                    <a href="{{ route('clientes') }}" class="font-weight-bold h2 d-block text-uppercase py-3 px-5">Clientes</a>
                </div>
                <div class="menu-item position-relative">
                    <a href="{{ route('solucoes') }}" class="font-weight-bold h2 d-block text-uppercase py-3 px-5">Soluções</a>
                </div>  
                <div class="menu-item position-relative">
                    <a href="{{ route('contato') }}" class="font-weight-bold h2 d-block text-uppercase py-3 px-5">Contato</a>
                </div>
                <div class="menu-item position-relative"> 
                    <a href="{{ route('portfolio') }}" class="font-weight-bold h2 d-block text-uppercase py-3 px-5">Portfólio</a>
                </div>

            </div>
        </nav>

        <div class="container mt-5 loader">
            <div class="sk-folding-cube mt-5">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>

        <main id="content" style="display: none">
            
            @yield('content')
            
        </main>
        
        <footer class="d-flex align-items-end footer">
            <div id="footer" class="w-100 bg-black">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col d-flex align-items-center justify-content-between flex-md-row flex-column text-white">
                            <p class="text-uppercase m-0 py-3">
                                © {{ date('Y') }} | 6P Marketing e Propaganda
                            </p>
                            {{-- <a href="#" class="btn btn-info text-white text-uppercase m-0">
                                certificações
                            </a> --}}
                            <p class="text-uppercase m-0 py-3">
                                <a href="#">
                                    <img src="{{ asset('img/icon-facebook.svg') }}" class="img-fluid ml-4 mr-2" width="30px">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('img/icon-linkedin.svg') }}" class="img-fluid ml-4 mr-2" width="30px">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('img/icon-youtube.svg') }}" class="img-fluid ml-4 mr-2" width="30px">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('img/icon-instagram.svg') }}" class="img-fluid ml-4 mr-2" width="30px">
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script>
            var base_url = "{{ $app->make('url')->to('/') . '/' }}";
        </script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('script')
    </body>
</html>