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
                            'url' => route('dashboard.configurations.create'),
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
                                Key
                            </th>
                            <th>
                                Valor
                            </th>
                            <th>
                                Ações
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($configurations as $configuration)
                            <tr>
                                <th scope="row px-0">
                                    {{ $configuration->id }}
                                </th>

                                <td>
                                    <a href="{{ route('dashboard.configurations.edit', $configuration->id) }}">
                                        <i class="fas fa-file-alt"></i> {{ $configuration->key }}
                                    </a>
                                </td>
                                <td>
                                    <p class="lh-base">
                                        {{ $configuration->value }}
                                    </p>
                                </td>
                                <td>
                                    <x-actions-buttons :content="$configuration" :actions="[
                                        [
                                            'url' => route('dashboard.configurations.edit', $configuration->id),
                                            'type' => 'primary', 'label' => 'Editar',
                                            'icon' => 'fas fa-edit'
                                        ],
                                    ]" />
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- card footer  -->
            <div class="card-footer bg-white text-center">
                {{ $configurations->links() }}
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
