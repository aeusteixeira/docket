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
                            'url' => route('dashboard.menus.create'),
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
                                Ação
                            </th>
                            <th>
                                Visualização
                            </th>
                            <th>
                                Ações
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($menus as $menu)
                            <tr>
                                <th scope="row px-0">
                                    {{ $menu->id }}
                                </th>

                                <td>
                                    <a href="{{ route('dashboard.menus.edit', $menu->id) }}">
                                        <i class="fas fa-file-alt"></i> {{ $menu->name }}
                                    </a>
                                </td>
                                <td>
                                    {{ $menu->action }}
                                </td>
                                <td>
                                    <button class="btn text-light" style="background-color: {{ $menu->color }}">
                                        <i class="fas fa-{{ $menu->icon }}"></i>
                                        {{ $menu->name }}
                                    </button>
                                <td>
                                    <x-actions-buttons :content="$menu" :actions="[
                                        [
                                            'url' => route('dashboard.menus.edit', $menu->id),
                                            'type' => 'primary', 'label' => 'Editar',
                                            'icon' => 'fas fa-edit'
                                        ],
                                        [
                                            'url' => route('dashboard.menus.destroy', $menu->id),
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
                {{ $menus->links() }}
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
