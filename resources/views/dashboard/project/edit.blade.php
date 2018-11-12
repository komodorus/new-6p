@extends('dashboard.layout.master', ['title' => 'Editar ' . $project->title ])

@section('content')

    <div class="container">
        <div class="row">
            <div class="col">
                {{ Breadcrumbs::render('projeto.edit', $project) }}
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <p class="h3 m-0">Editar projeto</p>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Titulo</label>
                            <input type="text" name="title" id="title" class="form-control rounded-0" value="{{ $project->title }}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success btn-block rounded-0">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection