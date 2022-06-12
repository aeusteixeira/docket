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
                            'url' => route('dashboard.groups.create'),
                            'type' => 'success',
                            'icon' => 'fa fa-plus',
                            'label' => 'Novo Grupo'
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
                                Ações
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($groups as $group)
                            <tr>
                                <th scope="row px-0">
                                    {{ $group->id }}
                                </th>

                                <td>
                                    <a href="{{ route('dashboard.groups.edit', $group->id) }}">
                                        <i class="fas fa-file-alt"></i> {{ $group->name }}
                                    </a>
                                </td>
                                <td>
                                    <x-actions-buttons :content="$group" :actions="[
                                        [
                                            'url' => route('dashboard.groups.edit', $group->id),
                                            'type' => 'primary', 'label' => 'Editar',
                                            'icon' => 'fas fa-edit'
                                        ],
                                        [
                                            'url' => route('dashboard.groups.destroy', $group->id),
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
            <!-- card footer  -->
            <div class="card-footer bg-white text-center">
                {{ $groups->links() }}
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
