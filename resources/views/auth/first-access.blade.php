@extends('layouts.dashboard.login', ['title' => $title])

@push('styles')
    <style>
        .docket{
            font-size: 2rem;
        }
        .form-group{
            margin-bottom: 0.3rem;
        }
    </style>
@endpush
@section('content')
  <!-- container -->
  <div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0
        min-vh-100">
      <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
        <!-- Card -->
        <div class="card smooth-shadow-md">
          <!-- Card body -->
          <div class="card-body p-6">
            <div class="mb-4">
                <a href="/" class="mb-2 docket">
                    {{ env('APP_NAME') }}
                </a>
              <p class="mb-6">
                Olá, bem-vindo ao Docket. Um mini sistema de gestão de comunicação interna para o Microsoft Teams da sua empresa.
              </p>
            </div>
            <!-- Form -->
            <form method="POST" action="{{ route('auth.first-access-generate') }}">
                @csrf
                <div class="form-group">
                    <h4>
                        Informações de acesso
                    </h4>
                </div>
                <div class="form-group">
                    <label class="form-label" for="text">
                        Nome
                    </label>
                    <input type="text" class="form-control" placeholder="Nome" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <x-error-input :message="$message"/>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="email">
                        E-mail
                    </label>
                    <input type="email" class="form-control" placeholder="E-mail" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <x-error-input :message="$message"/>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">
                        Senha
                    </label>
                    <input type="password" class="form-control" placeholder="Senha" name="password" required>
                    @error('password')
                        <x-error-input :message="$message"/>
                    @enderror
                </div>
                <hr>
                <div class="form-group">
                    <h4>
                        Informações da empresa
                    </h4>
                </div>
                <div class="form-group">
                    <label class="form-label" for="company_name">
                        Nome da empresa
                    </label>
                    <input type="text" class="form-control" placeholder="Nome da empresa" name="company_name" value="{{ old('company_name') }}" required>
                    @error('company_name')
                        <x-error-input :message="$message"/>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="form-label" for="company_website">
                        Site
                    </label>
                    <input type="url" class="form-control" placeholder="Site" name="company_website" value="{{ old('company_website') }}" required>
                    @error('company_website')
                        <x-error-input :message="$message"/>
                    @enderror
                    <small class="form-text text-muted">
                        <strong>Observação:</strong> É obrigatório o uso de certificado SSL.
                    </small>
                </div>
                <hr>
                <strong>
                    Importante:
                </strong>
                o site deve ser o mesmo do dominio configurado no Microsoft Teams da sua empresa.

                <!-- Button -->
                <div class="my-3 d-grid">
                  <button type="submit" class="btn btn-primary">
                    Continuar
                    </button>
                </div>
                <span>
                    <a href="#" class="text-primary">
                        Ajuda?
                    </a>
                </span>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
