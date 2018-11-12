@extends('layout.master')

@section('content')

    <div id="tiles" class="d-flex flex-row">
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
        {{-- <div style="background-color: red; width: 100%">
            
        </div>
        <div style="background-color: blue; width: 100%">
            
        </div> --}}
    </div>
    <div class="container-fluid bg-gray">
        <img src="{{ asset('img/solucoes-360.png') }}" class="img-fluid w-50 d-block mx-auto" alt="">
    </div>

@endsection

@section('script')
    <script>
        
        function fixHeight(){
            var tiles = $('#tiles').children();
            var elem = $(tiles[0]);
            
            elem.css('height', (elem.width() * 0.85))

            // $.each(tiles, function(index, value){
                // elem = $(value);
            // });
        }

        $(window).ready(function () {
            fixHeight();
            $(window).on('resize', function(){
                fixHeight();
            })
        });
    </script>
@endsection