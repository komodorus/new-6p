@extends('layout.master')

@section('content')
    
    <div class="container-fluid">
        <div class="row">
            <div class="col my-5">
                <form action="{{ route('portfolio') }}" method="GET" autocomplete="off">
                    <div class="form-group">
                        <input type="text" name="query" id="q" class="border-0 py-3 d-block mx-auto text-dark text-center w-100 font-weight-light h1 mb-0" style="outline: none" placeholder="/ PESQUISAR" 
                            @if (request()->input('query'))
                                value="{{ request()->input('query') }}"
                            @endif
                        >
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="w-100 bg-dark">
        <div class="container-fluid py-3">
            <ul class="nav justify-content-start">
                {{-- <li class="nav-item">
                    <a href="#" class="mx-3 py-3 text-white dropdown-toggle" id="clientes_dropdown" data-toggle="dropdown">
                        Projetos
                    </a>
                    <div class="dropdown-menu rounded-0" aria-labelledby="clientes_dropdown">
                        @foreach ($clientes as $cliente)
                            <a class="dropdown-item" href="#">Segmento</a>
                            <a class="dropdown-item" href="#">Premiações</a>
                            <a class="dropdown-item" href="#">Clientes</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="mx-3 py-3 text-white dropdown-toggle" id="servicos_dropdown" data-toggle="dropdown">
                        Soluções
                    </a>
                    <div class="dropdown-menu rounded-0" aria-labelledby="servicos_dropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item disabled" href="#">Disabled action</a>
                    </div>
                </li> --}}
                {{-- <li class="nav-item">
                    <a href="#" class="mx-3 py-3 text-white dropdown-toggle" id="segmento_dropdown" data-toggle="dropdown">
                        Segmento
                    </a>
                    <div class="dropdown-menu rounded-0" aria-labelledby="segmento_dropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item disabled" href="#">Disabled action</a>
                    </div>
                </li> --}}
            </ul>
        </div>
    </div>

    {{-- @foreach ($projects as $project)
        <div class="col-2">
            <div class="card">
                <img class="card-img-top" src="holder.js/100px180/" alt="">
                <div class="card-body">
                    <h4 class="card-title">{{ $project->title }}</h4>
                </div>
            </div>
        </div>
    @endforeach --}}

    <div class="container-fluid p-0">
        <div class="row no-gutters projects">

        @empty($projects)
            <div class="col py-5 my-5">
                <p class="h1 text-center text-uppercase text-dark">
                    Nenhum projeto encontrado
                </p>
            </div>
        @endempty

        @foreach ($projects as $project)
            <div class="col-3">
                <div class="bg-dark p-3 d-flex flex-wrap" style="background-image: url('{{ $project->cover()->path }}'); height: 420px; background-blend-mode: multiply; background-position: center;">
                    <div class="d-block w-100">
                        <h4 class="text-uppercase text-white d-block w-100 font-weight-light">{{ $project->title }}</h4>
                        <h4 class="text-uppercase font-weight-bold text-white d-block w100 mb-3">
                            {{ $project->client->title }}
                        </h4>
                    </div>
                    <div class="d-block w-100 align-self-end">
                        <div>
                            @foreach ($project->tags as $tag)
                                <a href="{{ route('portfolio.search', str_slug($tag->title) ) }}" class="btn btn-outline-light badge badge-pill mr-2 mb-3 px-4 py-2 font-weight-light">
                                    {{ $tag->title }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>

@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.4/holder.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fuse.js/3.3.0/fuse.min.js"></script>
    <script src="{{ asset('js/search.js') }}"></script>
    <script>
        
        var projects;

        var options = {
            keys: ['title', 'cliente.title', 'tags', 'cliente.segmento', 'solucao', 'premios.title'],
            shouldSort: true,
            threshold: 0.3,
            location: 0,
            distance: 100,
            maxPatternLength: 32,
            minMatchCharLength: 3,
        };
        
        $(document).ready(function(){
            $.get(base_url + 'portfolio.json', function(data, status){}).done(function(data, status){
                projects = data;
                var fuse = new Fuse(projects, options)
    
                if($('#q').val() != ''){
                    renderProjects(fuse.search($('#q').val()));
                }else{
                    renderProjects(data);
                }
    
                $('#q').on('input', function(){
                    console.log('inputChanged');
                    var searchData = fuse.search($(this).val());
                    search(searchData);
                });
    
            });

        })

    </script>
@endsection