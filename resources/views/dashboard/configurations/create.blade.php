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

                    <x-header-buttons :context="$title" :actions="[
                        [
                            'label' => 'Voltar',
                            'url' => route('dashboard.configurations.index'),
                            'type' => 'secondary',
                            'icon' => 'fas fa-arrow-left'
                        ],
                    ]" />

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
                                Informações da configuração
                            </h4>
                        </div>
                        <form action="{{ route('dashboard.configurations.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="alert alert-warning">
                                        <i class="fas fa-info-circle"></i>
                                        <strong>Atenção:</strong> Para utilizar uma chave personalizada, pode ser necessário da ajuda de um desenvolvedor.
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="key">Chave</label>
                                    <input type="text" class="form-control" id="key" name="key" placeholder="company_telephone" value="{{ old('key') }}" required>
                                    @error('key')
                                        <x-error-input :message="$message"/>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="value">Descrição</label>
                                    <textarea class="form-control" id="value" name="value" rows="3"></textarea>
                                    @error('value')
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
