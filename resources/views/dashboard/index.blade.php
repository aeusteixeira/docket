@extends('layouts.dashboard.app', ['title' => 'Dashboard'])
@push('styles')
    <style>
        .card-hover:hover{
            cursor: pointer !important;
            background-color: #f6f6f6 !important;
            transition: all .3s ease-in-out;
        }

        .card-hover:not(:hover){
            background-color: #fff !important;
            transition: all .3s ease-in-out;
        }
    </style>
@endpush
@section('content')
    <!-- Container fluid -->
    <div class="bg-primary pt-10 pb-21"></div>
    <div class="container-fluid mt-n22 px-6">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page header -->
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mb-2 mb-lg-0">
                            <h3 class="mb-0  text-white">
                                Olá, {{ Auth::user()->name }}
                            </h3>
                        </div>
                        <div>
                            <button type="button" class="btn btn-light " data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                Criar
                                </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-12 mt-3 mb-5">
                                                    <h2 class="text-center">
                                                        O que você deseja fazer?
                                                    </h2>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <a href="" class="text-decoration-none">
                                                        <div class="card card-hover shadow p-5">
                                                            <div class="card-body text-center">
                                                                <h3 class="m-0">
                                                                    Novo comunicado
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col-md-6 mb-4">
                                                    <a href="" class="text-decoration-none">
                                                        <div class="card card-hover shadow p-5">
                                                            <div class="card-body text-center">
                                                                <h3 class="m-0">
                                                                    Novo conteúdo
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- row  -->
        <div class="row mt-6">
            <div class="col-md-6 col-6">
                <div class="card">

                    <div class="card-header bg-white  py-4">
                        <h4 class="mb-0">
                            Últimos conteúdos publicados
                        </h4>
                    </div>

                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">#</th>
                                    <th>
                                        Nome
                                    </th>
                                    <th>
                                        Tipo
                                    </th>
                                    <th>
                                        Seção
                                    </th>
                                    <th>
                                        Ações
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contents as $content)
                                <tr>
                                    <th scope="row px-0">
                                        {{ $content->id }}
                                    </th>

                                    <td>
                                        <a href="{{ route('dashboard.contents.edit', $content->id) }}">
                                            <i class="fas fa-file-alt"></i> {{ $content->name }}
                                        </a>
                                    </td>
                                    <td>
                                        <span class="badge" style="background-color: {{ $content->type->color }}">
                                            {{ $content->type->name }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge bg-secondary">
                                            @if (!empty($content->section))
                                                {{ $content->section->name }}
                                            @else
                                                Sem seção
                                            @endif
                                        </span>
                                        <td>
                                            <x-actions-buttons :content="$content" :actions="[
                                                [
                                                    'url' => route('dashboard.contents.edit', $content->id),
                                                    'type' => 'primary', 'label' => 'Editar',
                                                    'icon' => 'fas fa-edit'
                                                ],
                                                [
                                                    'url' => route('dashboard.contents.destroy', $content->id),
                                                    'type' => 'danger', 'label' => 'Excluir',
                                                    'icon' => 'fas fa-trash-alt'
                                                ]
                                            ]" />
                                        </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-6">
                <div class="card">

                    <div class="card-header bg-white  py-4">
                        <h4 class="mb-0">
                            Últimos comunicados enviados
                        </h4>
                    </div>

                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>Project name</th>
                                    <th>Hours</th>
                                    <th>priority</th>
                                    <th>Members</th>
                                    <th>Progress</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
            @if (session('first_access'))

                <!-- Modal -->
                <div class="modal fade" id="firstAccess" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="firstAccessLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="firstAccessLabel">
                                Olá, {{ Auth::user()->name }}
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="text-center">
                                            Bem-vindo ao seu Docket!
                                        </h2>
                                        <p class="text-center text-lead">
                                            Este é o primeiro acesso ao sistema! <br> Para começar, você precisa realizar o download dos arquivos de importação e configuração do Microsoft Teams. Após o download, acompanhe o passo a passo para configurar o sistema no vídeo a seguir. <br>
                                        </p>
                                        <p class="text-center">
                                            <a href="{{ route('dashboard.download-teams-app') }}" class="btn btn-primary btn-sm" target="_blank">
                                                <i class="fas fa-download"></i> Download
                                            </a>
                                        </p>

                                        <iframe width="100%" height="400" src="https://www.youtube.com/embed/q-_X-_X-_X-A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Fechar
                            </button>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                @push('scripts')
        <script>
            var firstAccess = new bootstrap.Modal(document.getElementById('firstAccess'));
            firstAccess.show();
        </script>
@endpush
            @endif
@endsection


