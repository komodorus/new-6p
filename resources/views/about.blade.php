@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="d-block mw-100 py-5 mx-auto">
                <span class="title text-uppercase text-secondary font-weight-normal h1 line-height-short">
                    <span class="d-inline font-weight-bold" style="color:rgb(108, 205, 222);">/</span>Prazer, <span class="d-block">somos a 6P.</span>
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 offset-md-3 offset- text-justify mx-auto w-75">
                <p class="text-dark">
                    Com o olhar aberto para o novo, a 6P foi criada com um foco muito claro: <span class="font-weight-bold">ser a extensão do marketing das empresas.</span> 
                </p>
                <p class="text-dark">
                    Assim, entender os hábitos e sentimentos dos consumidores e dar soluções fora do lugar comum sempre foram base para o desenvolvimento do trabalho da agência, que uniu o poder da criatividade e da estratégia, a potência da co-criação e dos novos meios de veiculação, o entendimento das tendências e a importância do foco no resultado.
                </p>
                <p class="text-dark">
                    A 6P está atenta à diversificação das rotas da comunicação diante da digitalização do mundo e trabalha para que as marcas conversem com as pessoas de um jeito moderno e diferente. Isso é um dos maiores ativos de uma nova era com infinitas possibilidades tecnológicas e interativas para a comunicação.
                </p>
                <p class="text-dark font-weight-bold">
                    Somos um hub de pensamentos, ideias e viabilização de projetos. Uma agência preparada para construir e desvendar todas as possibilidades de um briefing, pronta para traçar o presente e roteirizar o futuro das marcas que atende.
                </p>

                <hr class="mt-5">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="d-block mw-100 py-5 mx-auto">
                <span class="title text-uppercase text-secondary font-weight-normal h1 line-height-short">
                    <span class="d-inline font-weight-bold" style="color:rgb(233, 215, 88);">/</span>Sócios
                </span>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="d-flex w-100">
                <div class="about-bg about-item">
                    <div class="about-bg-inner" style="background-color: rgb(108, 205, 222); background-image: url('{{ asset('img/socio_daniel.jpg') }}');">
                        <div class="w-50 ml-auto inner-content">
                            <div class="container p-5">
                                <div class="row pt-4">
                                    <div class="col">
                                        <p class="h2 text-white font-weight-bold mb-0">
                                            Daniel Melusá
                                        </p>
                                        <p class="h2 text-white">
                                            CEO
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="text-white">
                                            Daniel enxerga na liderança uma forma de guiar sua equipe diante dos desafios da comunicação. Está sempre à disposição para uma boa conversa. É administrador de empresas e apaixonou-se pelo marketing logo no início de sua carreira. Entende que seu papel no mercado publicitário do interior de São Paulo é compreender a essência e as mudanças da área, trazendo soluções inovadoras para gerar resultados sólidos aos parceiros. 
                                        </p>
                                        <p class="text-white">
                                            É, antes de tudo, uma referência de profissionalismo e ética nos negócios e, para a sua equipe, exemplo de inspiração a ser seguido por manter sempre a chama da motivação acesa. Ocupa, ainda, os cargos de vice-presidente da APP Ribeirão Preto, vice-presidente da ONG de proteção às abelhas Bee or Not to Be e é Cônsul Honorário da Alemanha em Ribeirão Preto.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-bg about-item">
                    <div class="about-bg-inner" style="background-color: rgb(233, 215, 88); background-image: url('{{ asset('img/socio_karin.jpg') }}');">
                        <div class="w-50 ml-auto inner-content">
                            <div class="container p-5">
                                <div class="row pt-4">
                                    <div class="col">
                                        <p class="h2 text-white font-weight-bold mb-0">
                                            Karin Rossi
                                        </p>
                                        <p class="h2 text-white">
                                            CEO
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="text-white">
                                            Sempre aberta às novidades e cabeça ligada na criatividade. Karin absorve tudo o que acontece ao seu redor. Sua mente inquieta está o tempo todo criando. Seja uma solução inédita para um problema ou uma aquarela de um lugar especial. Para ela, importante mesmo é fazer acontecer.                                             </p>
                                        <p class="text-white">
                                            A paixão pelas cores fez o coração bater mais forte pela publicidade, profissão que chancelou seu amor pela direção de arte e abriu espaço para o espírito empreendedor que carregava desde pequena.                                             
                                        </p>
                                        <p class="text-white">
                                            A união de tudo isso fez de Karin uma mulher que sabe ouvir e orientar seus criativos com precisão e, como ela mesma diz, “dar força às pontas”, para que o resultado seja sempre uma campanha surpreendente. 
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="about-bg about-item">
                    <div class="about-bg-inner" style="background-color: rgb(124, 119, 185); background-image: url('{{ asset('img/socio_3.jpg') }}');">
                        <div class="w-50 ml-auto inner-content">
                            <div class="container p-5">
                                <div class="row pt-4">
                                    <div class="col">
                                        <p class="h2 text-white font-weight-bold mb-0">
                                            Silvia Bianchi
                                        </p>
                                        <p class="h2 text-white">
                                            Diretora de Planejamento
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="text-white">
                                            Curiosa e sensível. Silvia pensa a propaganda como uma maneira de as pessoas adquirirem novas experiências, e isso, ela diz, vai muito além de estimular o consumo.                                             </p>
                                        <p class="text-white">
                                            Defende a pausa. O parar para pensar. A essência. O entender como se comportar diante do mundo e mostrar o que realmente importa nas propostas por caminhos que comunicam, informam e convencem. Diante dessa premissa, mantém uma equipe afinada, com diversidade de ideias, que complementa seu modo de pensar para levar adiante sua busca pela excelência.                                             
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="w-75 d-block mx-auto">
            <hr class="mt-5">
        </div>
        <div class="row">
            <div class="d-block mw-100 py-5 mx-auto">
                <span class="title text-uppercase text-secondary font-weight-normal h1 line-height-short">
                    <span class="d-inline font-weight-bold" style="color: rgb(29, 138, 153)">/</span>Certificações
                </span>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col py-5">
                <div id="about-carousel" class="slick-carousel">
                    <div class="item">
                        <img src="{{ asset('img/logo_cenp.png') }}" class="img-fluid" alt="logo cenp">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/certificado-app.png') }}" class="img-fluid" alt="logo cenp">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/certificado-xtech.png') }}" class="img-fluid" alt="logo cenp">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/certificado-google-partner.png') }}" class="img-fluid" alt="logo cenp">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/certificado-rede-sp.png') }}" class="img-fluid" alt="logo cenp">
                    </div>
                    <div class="item">
                        <img src="{{ asset('img/certificado-silver-rd-station.png') }}" class="img-fluid" alt="logo cenp">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">   
            <div class="col">   
                <div class="slider-for">
                    <div class="text-center">
                        <p class="w-75 mx-auto">
                            1Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque libero error, voluptas quas dolorem sint illum enim laudantium eum accusamus aperiam ullam unde inventore, dolore ducimus temporibus saepe at nostrum.
                        </p>
                    </div>
                    <div class="text-center">
                        <p class="w-75 mx-auto">
                            2Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque libero error, voluptas quas dolorem sint illum enim laudantium eum accusamus aperiam ullam unde inventore, dolore ducimus temporibus saepe at nostrum.
                        </p>
                    </div>
                    <div class="text-center">
                        <p class="w-75 mx-auto">
                            3Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque libero error, voluptas quas dolorem sint illum enim laudantium eum accusamus aperiam ullam unde inventore, dolore ducimus temporibus saepe at nostrum.
                        </p>
                    </div>
                    <div class="text-center">
                        <p class="w-75 mx-auto">
                            4Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque libero error, voluptas quas dolorem sint illum enim laudantium eum accusamus aperiam ullam unde inventore, dolore ducimus temporibus saepe at nostrum.
                        </p>
                    </div>
                    <div class="text-center">
                        <p class="w-75 mx-auto">
                            5Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque libero error, voluptas quas dolorem sint illum enim laudantium eum accusamus aperiam ullam unde inventore, dolore ducimus temporibus saepe at nostrum.
                        </p>
                    </div>
                    <div class="text-center">
                        <p class="w-75 mx-auto">
                            6Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque libero error, voluptas quas dolorem sint illum enim laudantium eum accusamus aperiam ullam unde inventore, dolore ducimus temporibus saepe at nostrum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="w-75 d-block mx-auto">
            <hr class="mt-5">
        </div>
        <div class="row">
            <div class="d-block mw-100 py-5 mx-auto">
                <span class="title text-uppercase text-secondary font-weight-normal h1 line-height-short">
                    <span class="d-inline font-weight-bold" style="color: rgb(130, 255, 158)">/</span>Premiações
                </span>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 my-5">
                <div class="row">
                    <div class="col-md-6 d-flex">
                        <img src="{{ asset('img/trofeu-festgraf.png') }}" class="img-fluid w-50 mx-auto d-block align-self-center" alt="">
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-between">
                        <div class="row">
                            <div class="col mt-3">
                                <p class="h3 text-uppercase text-gray font-weight-light">
                                    festgraf 2018 app ribeirão preto
                                </p>
                                <p class="text-dark text-justify">
                                    Agências de Comunicação e Marketing sediadas nos principais polos regionais do Estado de SP reunidas e integrando o maior mercado brasileiro publicidade. 
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="#" class="btn btn-lg btn-block text-white text-uppercase font-weight-light text-center" style="white-space: normal; background-color: rgb(124, 119, 185)">
                                    Conheça os projetos vencedores <b>aqui</b>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 my-5">
                <div class="row">
                    <div class="col-md-6 d-flex">
                        <img src="{{ asset('img/trofeu-globo.png') }}" class="img-fluid w-50 mx-auto d-block align-self-center" alt="">
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-between">
                        <div class="row">
                            <div class="col mt-3">
                                <p class="h3 text-uppercase text-gray font-weight-light">
                                    festgraf 2018 app ribeirão preto
                                </p>
                                <p class="text-dark text-justify">
                                    Agências de Comunicação e Marketing sediadas nos principais polos regionais do Estado de SP reunidas e integrando o maior mercado brasileiro publicidade. 
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="#" class="btn btn-lg btn-block text-white text-uppercase font-weight-light text-center" style="white-space: normal; background-color: rgb(29, 138, 153)">
                                    Conheça os projetos vencedores <b>aqui</b>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 my-5">
                <div class="row">
                    <div class="col-md-6 d-flex">
                        <img src="{{ asset('img/trofeu-festgraf.png') }}" class="img-fluid w-50 mx-auto d-block align-self-center" alt="">
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-between">
                        <div class="row">
                            <div class="col mt-3">
                                <p class="h3 text-uppercase text-gray font-weight-light">
                                    festgraf 2018 app ribeirão preto
                                </p>
                                <p class="text-dark text-justify">
                                    Agências de Comunicação e Marketing sediadas nos principais polos regionais do Estado de SP reunidas e integrando o maior mercado brasileiro publicidade. 
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="#" class="btn btn-lg btn-block text-white text-uppercase font-weight-light text-center" style="white-space: normal; background-color: rgb(233, 215, 88)">
                                    Conheça os projetos vencedores <b>aqui</b>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 my-5">
                <div class="row">
                    <div class="col-md-6 d-flex">
                        <img src="{{ asset('img/trofeu-act.png') }}" class="img-fluid w-50 mx-auto d-block align-self-center" alt="">
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-between">
                        <div class="row">
                            <div class="col mt-3">
                                <p class="h3 text-uppercase text-gray font-weight-light">
                                    festgraf 2018 app ribeirão preto
                                </p>
                                <p class="text-dark text-justify">
                                    Agências de Comunicação e Marketing sediadas nos principais polos regionais do Estado de SP reunidas e integrando o maior mercado brasileiro publicidade. 
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="#" class="btn btn-lg btn-block text-white text-uppercase font-weight-light text-center" style="white-space: normal; background-color: rgb(130, 255, 158)">
                                    Conheça os projetos vencedores <b>aqui</b>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection

@section('style')
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
@endsection

@section('script')
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        
        function closeAll(){
            var items = $('.about-bg');
                
            $.each(items, function(index, value){
                $(value).removeClass('active')
            })
        }

        $(document).ready(function(){

            
            $('.about-item').on('click', function(){

                var item = $(this);

                closeAll();                

                item.addClass('active');

            });
            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                asNavFor: '.slick-carousel'
            });
            $('.slick-carousel').slick({
                centerMode: true,
                centerPadding: '60px',
                autoplay: true,
                slidesToShow: 3,
                asNavFor: '.slider-for',
                focusOnSelect: true,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>

@endsection
