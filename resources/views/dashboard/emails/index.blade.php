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
                            'url' => route('dashboard.emails.create'),
                            'type' => 'success',
                            'icon' => 'fa fa-plus',
                            'label' => 'Novo comunicado'
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
                                Titulo
                            </th>
                            <th>
                                Para
                            </th>
                            <th>
                                Ações
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($emails as $email)
                            <tr>
                                <th scope="row px-0">
                                    {{ $email->id }}
                                </th>

                                <td>
                                    <a href="{{ route('dashboard.emails.show', $email->id) }}">
                                        <i class="fas fa-file-alt"></i> {{ $email->title }}
                                    </a>
                                </td>
                                <td>
                                    @foreach ($email->groups as $group)
                                        <span class="badge bg-success rounded-pill">
                                            {{ $group->name }}
                                        </span>
                                    @endforeach
                                </td>
                                <td>
                                    <x-actions-buttons :content="$email" :actions="[
                                        [
                                            'url' => route('dashboard.emails.show', $email->id),
                                            'type' => 'primary', 'label' => 'Visualizar',
                                            'icon' => 'fas fa-eye'
                                        ]
                                    ]" />
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">
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
                {{ $emails->links() }}
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
