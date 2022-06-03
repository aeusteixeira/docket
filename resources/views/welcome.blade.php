@extends('layouts.dashboard.login', ['title' => $title])

@push('styles')
    <style>
        .docket{
            font-size: 2rem;
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
                <a href="../index.html" class="mb-2 docket">
                    {{ env('APP_NAME') }}
                </a>
              <p class="mb-6">
                Olá, bem-vindo ao Docket. Um mini sistema de gestão de comunicação interna para o Microsoft Teams da sua empresa.
              </p>
            </div>
            <!-- Form -->
            <form>
                <div class="form-group">
                    <h4>
                        Informações de acesso
                    </h4>
                </div>
                <div class="form-group">
                    <label class="form-label" for="text">
                        Nome
                    </label>
                    <input type="text" class="form-control" id="text" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label class="form-label" for="email">
                        E-mail
                    </label>
                    <input type="email" class="form-control" id="email" placeholder="E-mail">
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">
                        Senha
                    </label>
                    <input type="password" class="form-control" id="password" placeholder="Senha">
                </div>
                <hr>
                <div class="form-group">
                    <h4>
                        Informações da empresa
                    </h4>
                </div>
                <div class="form-group">
                    <label class="form-label" for="text">
                        Nome da empresa
                    </label>
                    <input type="text" class="form-control" id="text" placeholder="Nome da empresa">
                </div>
                <div class="form-group">
                    <label class="form-label" for="site">
                        Site
                    </label>
                    <input type="text" class="form-control" id="site" placeholder="Site">
                </div>
                <div class="form-group">
                    <label class="form-label" for="logo">
                        Logo
                    </label>
                    <input type="file" class="form-control" id="logo" placeholder="Logo" aria-describedby="logoHelp">
                    <div id="logoHelp" class="form-text">
                        <small>
                            Tamanho recomendado: 200x200px <br> Formatos permitidos: .png, .jpg, .jpeg <br> Tamanho máximo: 2MB
                        </small>
                    </div>
                </div>

                <!-- Button -->
                <div class="my-3 d-grid">
                  <button type="submit" class="btn btn-primary">
                        <i class="fas fa-check"></i>
                        Iniciar configuração
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
