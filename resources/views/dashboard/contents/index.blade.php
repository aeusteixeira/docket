@extends('layouts.dashboard.app', ['title' => $title])

@push('styles')
    <style>
        .docket{
            font-size: 2rem;
        }
    </style>
@endpush
@section('content')
<div class="container-fluid p-6">
    <x-alert />
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->
              <div class="border-bottom pb-4 mb-4 ">

                    <x-header-buttons :context="$title" :actions="[
                        [
                            'url' => route('dashboard.contents.create'),
                            'type' => 'success',
                            'icon' => 'fa fa-plus',
                            'label' => 'Criar'
                        ]
                    ]" />

            </div>
          </div>
    </div>
    <div class="row align-items-center">
      <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <div class="card shadow">
            <!-- table  -->
            <div class="table-responsive">
                <table class="table shadow text-nowrap mb-0 table-hover table-striped table-borderless">
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
                                Publicado em:
                            </th>
                            <th>
                                Ações
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($contents as $content)
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
                                    {{ $content->created_at->format('d/m/Y') }}
                                </td>
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
                            @empty
                            <tr>
                                <td colspan="6">
                                    <div class="alert alert-info">
                                        Nenhum registro encontrado.
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <!-- card footer  -->
            <div class="card-footer bg-white text-center">
                {{ $contents->links() }}
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
