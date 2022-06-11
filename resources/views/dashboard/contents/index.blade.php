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
              <h3 class="mb-0 fw-bold">
                  {{ $title }}
              </h3>
              <a href="{{ route('dashboard.contents.create') }}" class="btn btn-primary btn-sm rounded mt-3">
                  <i class="fa fa-plus"></i>
                  Criar novo conteúdo
                </a>
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
                                    {{ $content->created_at->format('d/m/Y') }}
                                </td>
                                <td>
                                    <x-actions-buttons :id="$content->id" :route="route('dashboard.contents.destroy', $content->id)" :name="$content->name" :type="$content->type->name" :color="$content->type->color" :icon="'trash-alt'" :method="'DELETE'"></x-actions-buttons>
                                </td>
                            </tr>
                        @endforeach
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
