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
                <small class="text-muted">
                    <span class="text-primary">
                        <i class="fas fa-user-shield"></i>
                        <strong>BPO Innova</strong>
                    </span>
                </small>
              </p>
            </div>
            <!-- Form -->
            <form>
              <!-- Username -->
              <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" id="email" class="form-control" name="email"
                placeholder="Digite seu e-mail" required>
              </div>
              <!-- Password -->
              <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" id="password" class="form-control" name="password" placeholder="**************" required="">
              </div>
              <!-- Checkbox -->
              <div class="d-lg-flex justify-content-between align-items-center
                  mb-4">
                <div class="form-check custom-checkbox">
                  <input type="checkbox" class="form-check-input" id="rememberme">
                  <label class="form-check-label" for="rememberme">
                    <small>
                        <span class="text-muted">
                            <strong>
                                Mantenha-me conectado
                            </strong>
                        </span>
                    </small>
                  </label>
                </div>

              </div>
              <div>
                <!-- Button -->
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">
                    <i class="fas fa-sign-in-alt"></i>
                    <span>Entrar</span>
                  </button>
                </div>

                <div class="d-md-flex justify-content-between mt-4">

                    <div class="mb-2 mb-md-0">
                        <a href="{{ route('auth.forgot-password') }}" class="fs-5">
                            <span>Esqueceu sua senha?</span>
                        </a>
                    </div>

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
