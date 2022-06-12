@extends('layouts.dashboard.app', ['title' => $title])

@push('styles')
    <style>
        .docket{
            font-size: 2rem;
        }

        .form-group{
            margin-bottom: 1rem;
        }
        @media (min-width: 576px){
        .modal-dialog {
            max-width: 100% !important;
            }
        }
    </style>
@endpush

@section('content')
<div class="container-fluid p-6">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12">
        <!-- Page header -->
          <div class="border-bottom pb-4 mb-4 ">
              <h3 class="mb-0 fw-bold">
                  {{ $title }}
              </h3>
        </div>
      </div>
    </div>
    <div class="row"> <!-- align-items-center -->

        <div class="col-xl-12 col-lg-12 col-md-12 col-12">

            <div class="card shadow">
                <x-alert />
                <div class="card-body">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h4>
                                Informações do grupo
                            </h4>
                        </div>
                        <form action="{{ route('dashboard.groups.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Clientes, Fornecedores, Colaboradores, etc."
                                    value="{{ old('name') }}" required>
                                    @error('name')
                                        <x-error-input :message="$message"/>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="description">Descrição</label>
                                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                    @error('description')
                                        <x-error-input :message="$message"/>
                                    @enderror
                                </div>
                        </div>
                        <div class="card-footer bg-white text-end">
                            <button type="submit" class="btn btn-primary">
                                <span>
                                    <i class="fas fa-save"></i>
                                    Salvar
                                </span>
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
  </div>
@endsection
