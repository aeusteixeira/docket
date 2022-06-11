@extends('layouts.dashboard.app', ['title' => $title])

@push('styles')
    <style>
        .docket{
            font-size: 2rem;
        }

        .form-group{
            margin-bottom: 1rem;
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
    <div class="row align-items-center">
      <div class="col-xl-12 col-lg-12 col-md-12 col-12">
        <form action="{{ route('dashboard.contents.update', $content->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card shadow">
                <x-alert />
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nome do conteúdo" value="{{ old('name') ?? $content->name }}">
                    </div>
                    <div class="form-group">
                        <label for="type_id">Tipo</label>
                        <select class="form-control" id="type_id" name="type_id" name="type_id">
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}" {{ $type->id == $content->type_id ? 'selected' : '' }}>{{ $type->name }}</option>
                            @endforeach
                        </select>
                        <small class="form-text text-muted">
                            Selecione o tipo do conteúdo. <a href="">Criar novo</a>
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="call_to_action_id">
                            Chamada de atenção
                        </label>
                        <select class="form-control" id="call_to_action_id" name="call_to_action_id">
                            @foreach ($call_to_actions as $call_to_action)
                                <option value="{{ $call_to_action->id }}" {{ $call_to_action->id == $content->call_to_action_id ? 'selected' : '' }}>{{ $call_to_action->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="content">Descrição</label>
                        <textarea class="form-control" id="content" name="content" rows="3">{{ old('content') ?? $content->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Imagem de destaque</label>
                        <input type="file" class="form-control" id="image" name="image">
                        <small class="form-text text-muted">
                            Ao selecionar uma imagem, a imagem atual será substituída.
                        </small>
                    </div>
                    <div class="form-group">
                        <div class="card">
                            <div class="card-header">
                                Imagem de destaque atual
                            </div>
                            <div class="card-body text-center">
                                @if ($content->image)
                                    <img src="{{ $content->image }}" alt="{{ $content->name }}" class="img-fluid">
                                @else
                                    <p>Nenhuma imagem selecionada</p>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                <!-- card footer  -->
                <div class="card-footer bg-white text-end">
                    <button type="submit" class="btn btn-primary">
                        Atualizar
                    </button>
                </div>
            </div>
        </form>
      </div>
    </div>
  </div>
@endsection
