@extends('layout.master')

@section('content')

    <div class="slider-1 w-100 d-block">
       
        <a href="#" class="text-dark d-flex align-items-center justify-content-center" style="background-color: #7c77b9; height: 200px; width: 300px;">
            <span class="d-flex flex-column align-items-center justify-content-center">
                <i class="hvr-pop fa fa-search fa-5x fa-fw" style="opacity: .6" aria-hidden="true"></i>
                <p class="text-uppercase" style="opacity: .6">
                    Consultoria
                </p>
            </span>
        </a>
        <a href="#" class="text-dark d-flex align-items-center justify-content-center" style="background-color: #1d8a99; height: 200px; width: 300px;">
            <span class="d-flex flex-column align-items-center justify-content-center">
                <i class="hvr-pop fa fa-bullhorn fa-5x fa-fw" style="opacity: .6" aria-hidden="true"></i>
                <p class="text-uppercase" style="opacity: .6">
                    Eventos
                </p>
            </span>
        </a>
        <a href="#" class="text-dark d-flex align-items-center justify-content-center" style="background-color: #e9d758; height: 200px; width: 300px;">
            <span class="d-flex flex-column align-items-center justify-content-center">
                <i class="hvr-pop fa fa-floppy-o fa-5x fa-fw" style="opacity: .6" aria-hidden="true"></i>
                <p class="text-uppercase" style="opacity: .6">
                    Mídia
                </p>
            </span>
        </a>
        <a href="#" class="text-dark d-flex align-items-center justify-content-center" style="background-color: #82ff9e; height: 200px; width: 300px;">
            <span class="d-flex flex-column align-items-center justify-content-center">
                <i class="hvr-pop fa fa-wifi fa-5x fa-fw" style="opacity: .6" aria-hidden="true"></i>
                <p class="text-uppercase" style="opacity: .6">
                    Digital
                </p>
            </span>
        </a>
        <a href="#" class="text-dark d-flex align-items-center justify-content-center" style="background-color: #7c77b9; height: 200px; width: 300px;">
            <span class="d-flex flex-column align-items-center justify-content-center">
                <i class="hvr-pop fa fa-camera-retro fa-5x fa-fw" style="opacity: .6" aria-hidden="true"></i>
                <p class="text-uppercase" style="opacity: .6">
                    Fotografia
                </p>
            </span>
        </a>
        <a href="#" class="text-dark d-flex align-items-center justify-content-center" style="background-color: #e9d758; height: 200px; width: 300px;">
            <span class="d-flex flex-column align-items-center justify-content-center">
                <i class="hvr-pop fa fa-pencil fa-5x fa-fw" style="opacity: .6" aria-hidden="true"></i>
                <p class="text-uppercase" style="opacity: .6">
                    Branding
                </p>
            </span>
        </a>

    </div>

    
    <div class="container-fluid bg-gray">
        <img src="{{ asset('img/solucoes-360.png') }}" class="img-fluid w-50 d-block mx-auto" alt="">
    </div>


    <div class="slider-2 w-100 d-block">
       
        <a href="#" class="text-dark d-flex align-items-center justify-content-center" style="background-color: #7c77b9; height: 200px; width: 300px;">
            <span class="d-flex flex-column align-items-center justify-content-center">
                <i class="hvr-pop fa fa-search fa-5x fa-fw" style="opacity: .6" aria-hidden="true"></i>
                <p class="text-uppercase" style="opacity: .6">
                    Consultoria
                </p>
            </span>
        </a>
        <a href="#" class="text-dark d-flex align-items-center justify-content-center" style="background-color: #1d8a99; height: 200px; width: 300px;">
            <span class="d-flex flex-column align-items-center justify-content-center">
                <i class="hvr-pop fa fa-bullhorn fa-5x fa-fw" style="opacity: .6" aria-hidden="true"></i>
                <p class="text-uppercase" style="opacity: .6">
                    Eventos
                </p>
            </span>
        </a>
        <a href="#" class="text-dark d-flex align-items-center justify-content-center" style="background-color: #e9d758; height: 200px; width: 300px;">
            <span class="d-flex flex-column align-items-center justify-content-center">
                <i class="hvr-pop fa fa-floppy-o fa-5x fa-fw" style="opacity: .6" aria-hidden="true"></i>
                <p class="text-uppercase" style="opacity: .6">
                    Mídia
                </p>
            </span>
        </a>
        <a href="#" class="text-dark d-flex align-items-center justify-content-center" style="background-color: #82ff9e; height: 200px; width: 300px;">
            <span class="d-flex flex-column align-items-center justify-content-center">
                <i class="hvr-pop fa fa-wifi fa-5x fa-fw" style="opacity: .6" aria-hidden="true"></i>
                <p class="text-uppercase" style="opacity: .6">
                    Digital
                </p>
            </span>
        </a>
        <a href="#" class="text-dark d-flex align-items-center justify-content-center" style="background-color: #7c77b9; height: 200px; width: 300px;">
            <span class="d-flex flex-column align-items-center justify-content-center">
                <i class="hvr-pop fa fa-camera-retro fa-5x fa-fw" style="opacity: .6" aria-hidden="true"></i>
                <p class="text-uppercase" style="opacity: .6">
                    Fotografia
                </p>
            </span>
        </a>
        <a href="#" class="text-dark d-flex align-items-center justify-content-center" style="background-color: #e9d758; height: 200px; width: 300px;">
            <span class="d-flex flex-column align-items-center justify-content-center">
                <i class="hvr-pop fa fa-pencil fa-5x fa-fw" style="opacity: .6" aria-hidden="true"></i>
                <p class="text-uppercase" style="opacity: .6">
                    Branding
                </p>
            </span>
        </a>

    </div>


    {{-- <div class="d-flex flex-row tiles">
        <div class="d-flex flex-column align-items-center justify-content-center" style="background-color: #7c77b9; width: 100%">
            <i class="fa fa-search fa-5x fa-fw" style="opacity: .6" aria-hidden="true"></i>
            <p class="text-uppercase" style="opacity: .6">
                Consultoria
            </p>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center" style="background-color: #1d8a99; width: 100%">
            <i class="fa fa-bullhorn fa-5x fa-fw" style="opacity: .6" aria-hidden="true"></i>
            <p class="text-uppercase" style="opacity: .6">
                Eventos
            </p>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center" style="background-color: #e9d758; width: 100%">
            <i class="fa fa-floppy-o fa-5x fa-fw" style="opacity: .6" aria-hidden="true"></i>
            <p class="text-uppercase" style="opacity: .6">
                Mídia
            </p>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center" style="background-color: #82ff9e; width: 100%">
            <i class="fa fa-wifi fa-5x fa-fw" style="opacity: .6" aria-hidden="true"></i>
            <p class="text-uppercase" style="opacity: .6">
                Digital
            </p>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center" style="background-color: #7c77b9; width: 100%">
            <i class="fa fa-camera-retro fa-5x fa-fw" style="opacity: .6" aria-hidden="true"></i>
            <p class="text-uppercase" style="opacity: .6">
                Fotografia
            </p>
        </div>
        <div class="d-flex flex-column align-items-center justify-content-center" style="background-color: #e9d758; width: 100%">
            <i class="fa fa-pencil fa-5x fa-fw" style="opacity: .6" aria-hidden="true"></i>
            <p class="text-uppercase" style="opacity: .6">
                Branding
            </p>
        </div>
    </div> --}}
@endsection

@section('style')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css">    
@endsection

@section('script')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        
        function fixHeight(){
            var tiles = $('.tiles');

            $.each(tiles, function(index, value){
                console.log($(value));
                var elem = $(value).children();
                elem.css('height', (elem.width() * 0.85))
            });

        }

        $('.slider-1').slick({
            speed: 10000,
            autoplay: true,
            autoplaySpeed: 0,
            centerMode: true,
            pauseOnHover: false,
            cssEase: 'linear',
            slidesToShow: 1,
            slidesToScroll: 1,
            variableWidth: true,
            infinite: true,
            initialSlide: 1,
            arrows: false,
            buttons: false
        });

        $('.slider-2').slick({
            speed: 10000,
            autoplay: true,
            autoplaySpeed: 0,
            centerMode: true,
            pauseOnHover: false,
            cssEase: 'linear',
            slidesToShow: 1,
            slidesToScroll: 1,
            variableWidth: true,
            infinite: true,
            initialSlide: 1,
            arrows: false,
            buttons: false
        });

        $(window).ready(function () {
            fixHeight();
            $(window).on('resize', function(){
                fixHeight();
            })
        });
    </script>
@endsection