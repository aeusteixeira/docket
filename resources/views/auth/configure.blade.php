@extends('layouts.dashboard.login', ['title' => $title])

@push('styles')
    <style>
        .docket{
            font-size: 2rem;
        }
        .form-group{
            margin-bottom: 0.5rem;
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
                <strong>
                    {{ $user->name }}, estamos quase lá!
                </strong>
                <br>
                Agora você precisa preencher algumas informações para que possamos gerar o portal do Teams da {{ $company->value }}.
              </p>
            </div>
            <!-- Form -->
            <form method="POST" action="{{ route('auth.configure-save') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <h4>
                        Informações de identificação
                    </h4>
                </div>
                <div class="form-group">
                    <label for="short_name">
                        Nome curto
                    </label>
                    <input type="text" class="form-control" name="short_name" id="short_name" value="Portal {{ $company->value }}" required>
                    @error('short_name')
                        <x-error-input :message="$message"/>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="full_name">
                        Nome completo
                    </label>
                    <input type="text" class="form-control" name="full_name" id="full_name" value="Portal de Comunicação da {{ $company->value }}" required>
                    @error('full_name')
                        <x-error-input :message="$message"/>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="short_description">
                        Descrição curta
                    </label>
                    <input type="text" class="form-control" name="short_description" id="short_description" value="O hub de comunicação da {{ $company->value }}" required>
                    @error('short_description')
                        <x-error-input :message="$message"/>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="full_description">
                        Descrição completa
                    </label>
                    <textarea class="form-control" name="full_description" id="full_description" rows="4" required>O Canal do Teams da {{ $company->value }} é um hub de comunicação que permite a interação de forma rápida e eficiente entre os colaboradores da empresa.
                    </textarea>
                    @error('full_description')
                        <x-error-input :message="$message"/>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="image">
                        Ícone
                    </label>
                    <input type="file" class="form-control" name="image" id="image" required accept="image/png">
                    <small class="form-text text-muted">
                        O ícone deve ser uma imagem no formato PNG com no máximo 15KB e com 192x192 pixels.
                    </small>
                    @error('image')
                        <x-error-input :message="$message"/>
                    @enderror
                </div>
                <hr>
                <div class="form-group">
                    <h4>
                        Políticas
                    </h4>
                </div>
                <div class="form-group">
                    <label for="privacy_policy">
                        Política de privacidade
                    </label>
                    <input type="url" class="form-control" name="privacy_policy" id="privacy_policy" value="{{$company_website->value}}/privacy-policy" required  pattern="https://.*">
                    @error('privacy_policy')
                        <x-error-input :message="$message"/>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="terms_and_conditions">
                        Termos e condições
                    </label>
                    <input type="url" class="form-control" name="terms_and_conditions" id="terms_and_conditions" value="{{$company_website->value}}/terms-and-conditions" required  pattern="https://.*">
                    @error('terms_and_conditions')
                        <x-error-input :message="$message"/>
                    @enderror
                </div>
                <hr>
                <div class="form-group">
                    <h4>
                        Personalização e cores
                    </h4>
                    <div class="form-group">
                        <label for="primary_color">
                            Cor principal
                        </label>
                        <input type="color" class="form-control" name="primary_color" id="primary_color" value="#000b76" required>
                        @error('primary_color')
                            <x-error-input :message="$message"/>
                        @enderror
                        <small>
                            A cor principal é a cor que será utilizada no fundo dos e-mails de comunicados.
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="secondary_color">
                            Cor secundária
                        </label>
                        <input type="color" class="form-control" name="secondary_color" id="secondary_color" value="#e7008a" required>
                        @error('secondary_color')
                            <x-error-input :message="$message"/>
                        @enderror
                        <small>
                            A cor secundária é a cor que será nos botões de ação.
                        </small>
                    <div>
                </div>
                                <div class="my-3 d-grid">
                  <button type="submit" class="btn btn-primary">
                        <i class="fas fa-check"></i>
                        Finalizar configuração
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
