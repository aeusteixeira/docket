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
                <p class="">
                    <small class="text-muted">
                        <span class="text-primary">
                            <i class="fas fa-user-shield"></i>
                            <strong>{{ env('APP_NAME') }}</strong>
                        </span>
                    </small>
                  </p>
              <p class="mb-6">
                Não se preocupe, enviaremos um e-mail para redefinir sua senha.
              </p>
            </div>
            <!-- Form -->
            <form>
                <!-- Email -->
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" id="email" class="form-control" name="email" placeholder="Digite seu email">
                </div>
                <!-- Button -->
                <div class="mb-3 d-grid">
                  <button type="submit" class="btn btn-primary">
                      Redefinir senha
                    </button>
                </div>
                <span>
                    <a href="{{ route('auth.login') }}" class="text-primary">
                        <i class="fas fa-arrow-left"></i>
                        Voltar
                    </a>
                </span>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
