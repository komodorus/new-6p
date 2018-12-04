@extends('layout.master')

@section('content')
    <div class="w-100">
        <img src="{{ asset($project->banner) }}" alt="" class="img-fluid d-block mx-auto">
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-2">
                <img src="{{ asset($project->cliente->logo) }}" class="img-fluid d-block mx-auto">
            </div>
            <div class="col-md-10 d-flex justify-content-center flex-column">
                <p class="h4 text-uppercase text-secondary">
                    {{ $project->solucao }}
                </p>
                <span class="title text-uppercase text-secondary font-weight-normal h1">
                    <span class="d-inline font-weight-bold" style="color:rgb(130, 255, 158);">/</span>{{ $project->title }}</span>
                </span>
                <p class="h3 mt-2 text-uppercase">
                    {{ $project->cliente->title }}
                </p>
            </div>
        </div>
        <hr class="mt-5">
    </div>

    <section class="parser">
        @foreach ($project->conteudo as $item)
            @switch($item->type)
                @case('text')
                    <div class="container {!! $item->paddingY ? 'py-' . $item->paddingY : '' !!}">
                        <div class="row mt-3">
                            <div class="col">
                                {!! $item->text !!}
                            </div>
                        </div>
                    </div>
                    @break
                @case('image')
                <div class="{!! $item->paddingY ? 'py-' . $item->paddingY : '' !!}">
                    <div class="w-100">
                        <a data-fancybox="gallery" href="{{ asset($item->image) }}">
                            <img src="{{ asset($item->image) }}" alt="" class="img-fluid mx-auto d-block">
                        </a>
                    </div>
                    <div class="container">
                        @if ($item->showTitle)
                        <div class="row">
                            <div class="col text-center">
                                <p class="my-3">{{ $item->title }}</p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>

                    @break
                @case('video')
                    <div class="{!! $item->paddingY ? 'py-' . $item->paddingY : '' !!}">
                        <div class="d-block bg-black w-100">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/BK-i4FGAQUw" allowfullscreen></iframe>
                                        </div>                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            @if ($item->showTitle)
                            <div class="row">
                                <div class="col text-center">
                                    <p class="my-3">{{ $item->title }}</p>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                    @break
                @case('carousel')
                    <div class="container {!! $item->paddingY ? 'py-' . $item->paddingY : '' !!}">
                        <div class="row">
                            <div class="col">
                                <div class="portfolio-carousel">
                                    @foreach ($item->images as $img)
                                        <img src="{{ asset($img) }}" alt="">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        @if ($item->showTitle)
                        <div class="row">
                            <div class="col text-center">
                                <p class="my-3">{{ $item->title }}</p>
                            </div>
                        </div>
                        @endif
                    </div>
                    @break
                @case('resultados')
                    <div class="bg-primary">
                        <div class="container text-center py-4">
                            <span class="title text-uppercase text-white font-weight-normal h1">
                                <span class="d-inline font-weight-bold" style="color:rgb(130, 255, 158);">/</span>Resultados</span>
                            </span>
                            @foreach ($item->resultados as $resultado)
                            <p class="text-white h2 my-3">
                                <span class="font-weight-bold h1">
                                    {{ $resultado->valor }}
                                </span>
                                {{ $resultado->conteudo }}
                            </p>
                            @endforeach
                        </div>
                    </div>
                    @break
                @default
                    
            @endswitch
        @endforeach
    </section>
@endsection
@section('style')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.2/jquery.fancybox.min.css">
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.2/jquery.fancybox.min.js"></script>
    <script>
        $('.portfolio-carousel').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            autoplay: true,
            autoplaySpeed: 2500,
            slidesToScroll: 4,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true,
                        arrows: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        arrows: false

                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                }
            ]        
        });
    </script>
@endsection