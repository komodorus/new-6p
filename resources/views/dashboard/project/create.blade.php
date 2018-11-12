@extends('dashboard.layout.master', ['title' => 'Add Projeto'])

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                {{ Breadcrumbs::render('projeto.create') }}
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{ route('projeto.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        
                        <div class="card-header d-flex justify-content-between">
                            <p class="h3 m-0">Adicionar novo projeto</p>
                        </div>

                        <div class="card-body">

                            <div class="form-group">
                                <label for="clientSelect">
                                    Cliente 
                                    <i class="fa fa-info-circle text-info" 
                                        data-toggle="tooltip" 
                                        data-placement="right" 
                                        title="Insira um novo cliente clicando no simbolo '+' ao lado do campo de texto" 
                                        aria-hidden="true">
                                    </i>
                                </label>
                                <div class="input-group">
                                    <select class="custom-select" id="clientSelect" name="client_id">
                                        <option selected disabled>Escolha um cliente...</option>
                                        @foreach ($clientes as $cliente)
                                            <option value="{{ $cliente->id }}">{{ $cliente->title }}</option>
                                        @endforeach
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-success" data-toggle="modal" data-target="#addClienteModal" type="button"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                                
                            <div class="form-group">
                                <label for="title">Titulo</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="tags">Tags</label>
                                <select name="tags[]" id="tags" class="select-tags form-control" multiple required>
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}">
                                            {{ $tag->title }}
                                        </option>
                                    @endforeach
                                    {{-- <option value="orange" selected disabled></option> --}}
                                </select>
                                {{-- <input type="text" name="tags" id="tags" class="form-control"> --}}
                            </div>
                            
                            <div class="form-group">
                                <label for="title">Capa</label>
                                <div class="custom-file">
                                    <input type="file" name="capa" class="custom-file-input" id="customFile" required multiple>
                                    <label class="custom-file-label" for="customFile">Escolher capa</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="title">Imagens</label>
                                <div class="custom-file">
                                    <input type="file" name="images[]" class="custom-file-input" id="customFile" required multiple>
                                    <label class="custom-file-label" for="customFile">Escolher imagens</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="conteudo">Conteúdo</label>
                                <textarea class="summernote" name="conteudo" id="conteudo" rows="13"></textarea>
                            </div>

                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-block">Salvar</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="addClienteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar cliente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="client_form" class="needs-validation" action="{{ url('dashboard/client/store') }}" method="POST" novalidate>
                        @csrf
                        <div class="form-group">
                            <label for="title">Nome</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button id="client_save" type="button" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- include codemirror (codemirror.css, codemirror.js, xml.js, formatting.js) -->
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.css">
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.js"></script>
    
    <!-- include summernote css/js -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {

            $('#client_save').on('click', function(e){

                //form selector
                var form = $('form#client_form');

                //serialize array
                var client = form.serializeArray();
                var postUrl = form.attr('action');

                //post data
                $.post(postUrl, client, function(data){
                    
                    $('#clientSelect').append(
                        '<option value="' + data.id +'" selected>'+ data.title + '</option>'
                    );

                    $('#addClienteModal').modal('toggle');

                    $.notify({
                        // options
                        title: data.title + ' criado com sucesso!'
                    },{
                        // settings
                        type: 'success',
                        allow_dismiss: true
                    });

                }).fail(function(data){
                    $.notify({
                        // options
                        message: data.responseJSON.errors.title[0]
                    },{
                        // settings
                        type: 'danger',
                        element: '#addClienteModal',
                        allow_dismiss: true
                    });
                });

                //validate response

                //close modal
    
                //update select with new client
                
            });

            $('.summernote').summernote({
                placeholder: 'Descreva o novo projeto',
                tabsize: 2,
                height: 300,
                codemirror: { // codemirror options
                    theme: 'monokai'
                }
            });
            
            $('.select-tags').select2({
                tags: true,
                language: "pt-BR",
                createTag: function (params) {
                    // Don't offset to create a tag if there is no # symbol
                    if (params.term.indexOf('#') === -1) {
                        // Return null to disable tag creation
                        return null;
                    }

                    return {
                        id: params.term,
                        text: params.term
                    }
                },
                insertTag: function (data, tag) {
                    // Insert the tag at the end of the results
                    data.push(tag);
                }
            });

        });
    </script>
@endsection