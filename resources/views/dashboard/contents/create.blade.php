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
    @livewire('dashboard.contents.create')
  </div>
@endsection
