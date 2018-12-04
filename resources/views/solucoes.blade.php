@extends('layout.master')

@section('content')
    <div class="container-fluidp pl-0 pr-0">
        <div class="row no-gutters position-absolute py-3" style="left: 0; right: 0; margin: 0 auto;">
            <div class="d-block mw-100 py-5 mx-auto">
                <span class="title d-block text-uppercase text-secondary font-weight-normal h3 line-height-short">
                    <span class="d-inline font-weight-bold" style="color:rgb(108, 205, 222);">/</span>Transformamos pensamentos. Evoluímos ideias.
                </span>
                <span class="title d-block text-center text-uppercase text-secondary h1 line-height-short">
                    Entregamos resultado.
                </span>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col">
                <svg id="solucoes" class="img-fluid" data-name="solucoes" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1550 1570">
                    <defs>
                        <style>

                            .circle-5 {
                                fill: #7c77b9;
                            }
                            .circle-6p {
                                fill: #4f4f4f;
                            }
                            .circle-1 {
                                fill: #1d8a99;
                            }
                            .circle-2 {
                                fill: #6ccdde;
                            }
                            .circle-3 {
                                fill: #e9d758;
                            }
                            .circle-4 {
                                fill: #82ff9f;
                            }
                            .small-1{
                                fill: #7c77b9;
                            }
                            .small-2{
                                fill: #6ccdde;
                            }
                            .small-3{
                                fill: #82ff9f;
                            }
                            .small-4{
                                fill: #e9d758;
                            }
                        </style>
                    </defs>
                    <line data-depth="0.2" class="small dash dash-pulse" x1="733" y1="1800" x2="730" y2="1337" />
                    <line data-depth="0.2" class="dash dash-pulse" x1="1297" y1="293" x2="1347" y2="-70" />
                    <line data-depth="0.2" class="dash dash-pulse" x1="1661" y1="1118" x2="1322" y2="972" />
                    <line data-depth="0.2" class="dash dash-pulse" x1="1582" y1="202" x2="1320" y2="289" />
                    <line data-depth="0.2" class="dash dash-pulse" x1="273" y1="933" x2="-30" y2="1019" />
                    <line data-depth="0.2" class="dash dash-pulse" x1="500" y1="350" x2="160" y2="-70" />
                    <line data-depth="0.2" class="dash dash-pulse" x1="801" y1="855" x2="733" y2="1296" />
                    <line data-depth="0.2" class="dash dash-pulse" x1="962" y1="849" x2="1358" y2="998" />
                    <line data-depth="0.2" class="small dash dash-pulse" x1="300" y1="953" x2="771" y2="860" />
                    <line data-depth="0.2" class="dash dash-pulse" x1="741" y1="835" x2="589" y2="389" />
                    <line data-depth="0.2" class="dash dash-pulse" x1="811" y1="800" x2="1289" y2="301" />
                    <line data-depth="0.2" class="dash dash-pulse" x1="645" y1="401" x2="1252" y2="306" />
                    <line data-depth="0.2" class="dash dash-pulse" x1="320" y1="992" x2="722" y2="1301" />
                    <line data-depth="0.2" class="small dash dash-pulse" x1="775" y1="1283" x2="1222" y2="1049" />
                    <line data-depth="0.2" class="dash dash-pulse" x1="1346" y1="888" x2="1315" y2="348" />
                    <line data-depth="0.2" class="dash dash-pulse" x1="280" y1="900" x2="480" y2="450" />
                    
                    <g data-depth="0.5" class="circle">
                        <circle class="circle-5" cx="520" cy="360" r="185" />
                        <text font-size="100px" x="485" y="370" font-family="Rubik, sans-serif"; fill="white" dy=".3em">C</text>
                    </g>
                    <g data-depth="0.5" class="circle">
                        <circle class="circle-6p" cx="804" cy="825" r="219" />
                        <image x="680" y="685" width="280" height="300" xlink:href="{{ asset('img/6p.svg') }}" />
                        <text font-size="100px" x="1320" y="975" font-family="Rubik, sans-serif"; fill="white" dy=".3em">I</text>
                    </g>
                    <g data-depth="0.5" class="circle">
                        <circle class="circle-1" cx="1330" cy="967" r="189" />
                        <text font-size="100px" x="1320" y="975" font-family="Rubik, sans-serif"; fill="white" dy=".3em">I</text>
                    </g>
                    <g data-depth="0.5" class="circle">
                        <circle class="circle-2" cx="290" cy="927" r="166" />
                        <text font-size="100px" x="260" y="937" font-family="Rubik, sans-serif"; fill="white" dy=".3em">E</text>
                    </g>
                    <g data-depth="0.5" class="circle">
                        <circle class="circle-3" cx="731" cy="1291" r="134" />
                        <text font-size="100px" x="700" y="1305" font-family="Rubik, sans-serif"; fill="white" dy=".3em">P</text>
                    </g>
                    <g data-depth="0.5" class="circle">
                        <circle class="circle-4" cx="1297" cy="293" r="156" />
                        <text font-size="100px" x="1267" y="305" font-family="Rubik, sans-serif"; fill="white" dy=".3em">S</text>
                    </g>

                    <circle data-depth="0.3" class="small-1" cx="1330" cy="609" r="72" />
                    <circle data-depth="0.3" class="small-2" cx="996" cy="1167" r="63" />
                    <circle data-depth="0.3" class="small-3" cx="385" cy="676" r="58" />
                    <circle data-depth="0.3" class="small-4" cx="916" cy="354" r="49" />
                </svg>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta magni ratione repellat quae minus doloribus nostrum commodi natus cupiditate accusantium nihil officia soluta quos dolorem fugit, libero impedit quas esse. Id, reprehenderit officia. Maxime quod hic dolorum ut ad, sunt eos illo praesentium beatae enim adipisci architecto magni mollitia deserunt laborum voluptates optio delectus possimus quibusdam et! Nisi quia enim ipsum quasi ut perspiciatis. Voluptas reprehenderit ipsam ipsum ullam atque. Et aperiam non quae quo architecto unde, accusantium, dolorem dolor dolores incidunt excepturi! Enim suscipit consequuntur explicabo libero nihil velit quae, necessitatibus, cupiditate doloremque tenetur quisquam, distinctio eos ex facilis.
                </p>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('style')
    <style>
        #solucoes .circle:hover{
            cursor: pointer;
        }

        .dash {
            stroke: #a8a8a8;
            stroke-dasharray: 12 12;
            stroke-miterlimit: 10;
            stroke-dashoffset: 0;
            stroke-width: 0.3px;
            animation: example 60s linear, pulse 2.5s linear;
            animation-iteration-count: infinite;
        }

        @keyframes example {
            to {
                stroke-width: 1px;
                stroke-dashoffset: 1000;
            }
        }

        @keyframes pulse{
            0%{
                stroke-width: 0.5px;
            }
            25% {
                stroke-width: 0.75px;
            }
            50% {   
                stroke-width: 1.5px;
            }
            75% {
                stroke-width: 0.75px;
            }
            100%{
                stroke-width: 0.5px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.2/jquery.fancybox.min.css">
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.2/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
    <script src="{{ asset('js/morph.js') }}"></script>
    <script>
      var scene = document.getElementById('solucoes');
      var parallaxInstance = new Parallax(scene, {
          relativeInput: true,
          pointerEvents: true
        });

        // $('.circle').on('click', function(){
        //     $()
        //     alert('Click!');
        // });
    </script>
@endsection