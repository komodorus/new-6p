@extends('dashboard.layout.master', ['title' => 'Dashboard'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                {{ Breadcrumbs::render('dashboard.home') }}
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card pb-0">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="h3 m-0">
                            Projetos
                        </h3>
                        <a href="{{ route('projeto.create') }}" class="btn btn-success">Add Projeto</a>
                    </div>
                    <div class="card-body p-0">
                        <table class="table-striped table mb-0">
                            {{-- <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                </tr>
                            </thead> --}}
                            <tbody>
                                @foreach ($projects as $project)
                                    <tr>
                                        <td class="border-right">
                                            {{ $project->id }}
                                        </td>
                                        <td class="d-flex justify-content-between align-items-center">
                                            <p class="mb-0">
                                                {{ $project->title }}
                                            </p>
                                            <div>
                                                <a href="{{ route('projeto.edit', $project->id) }}" class="btn btn-sm btn-warning">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar
                                                </a>
                                                <a href="#" class="btn btn-sm btn-danger">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Excluir
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
