@extends('layouts.dashboard.app', ['title' => 'Dashboard'])
@push('styles')
    <style>
        .card-hover:hover{
            cursor: pointer !important;
            background-color: #f6f6f6 !important;
            transition: all .3s ease-in-out;
        }

        .card-hover:not(:hover){
            background-color: #fff !important;
            transition: all .3s ease-in-out;
        }
    </style>
@endpush
@section('content')
                <!-- Container fluid -->
                <div class="bg-primary pt-10 pb-21"></div>
                <div class="container-fluid mt-n22 px-6">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-12">
                            <!-- Page header -->
                            <div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="mb-2 mb-lg-0">
                                        <h3 class="mb-0  text-white">
                                            Olá, {{ Auth::user()->name }}
                                        </h3>
                                    </div>
                                    <div>
                                        <button type="button" class="btn btn-light " data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                            Meu docket
                                          </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-12 mt-3 mb-5">
                                                                <h2 class="text-center">
                                                                    O que você deseja fazer?
                                                                </h2>
                                                            </div>
                                                            <div class="col-md-6 mb-4">
                                                                <a href="" class="text-decoration-none">
                                                                    <div class="card card-hover shadow p-5">
                                                                        <div class="card-body text-center">
                                                                            <h3 class="m-0">
                                                                                Publicar comunicado
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-6 mb-4">
                                                                <a href="" class="text-decoration-none">
                                                                    <div class="card card-hover shadow p-5">
                                                                        <div class="card-body text-center">
                                                                            <h3 class="m-0">
                                                                                Publicar notícia
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <div class="col-md-12 mb-4">
                                                                <a href="" class="text-decoration-none">
                                                                    <div class="card card-hover shadow p-5">
                                                                        <div class="card-body text-center">
                                                                            <h3 class="m-0">
                                                                                Publicar banner
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- row  -->
                    <div class="row mt-6">
                        <div class="col-md-12 col-12">
                            <!-- card  -->
                            <div class="card">
                                <!-- card header  -->
                                <div class="card-header bg-white  py-4">
                                    <h4 class="mb-0">Active Projects</h4>
                                </div>
                                <!-- table  -->
                                <div class="table-responsive">
                                    <table class="table text-nowrap mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Project name</th>
                                                <th>Hours</th>
                                                <th>priority</th>
                                                <th>Members</th>
                                                <th>Progress</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="align-middle">
                                                    <div class="d-flex
                                align-items-center">
                                                        <div>
                                                            <div class="icon-shape icon-md border p-4
                                    rounded-1">
                                                                <img src="{{ asset('dashboard/images/brand/dropbox-logo.svg') }}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="ms-3 lh-1">
                                                            <h5 class=" mb-1"> <a href="#" class="text-inherit">Dropbox
                                                                    Design
                                                                    System</a></h5>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">34</td>
                                                <td class="align-middle"><span class="badge
                                bg-warning">Medium</span></td>
                                                <td class="align-middle">
                                                    <div class="avatar-group">
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="{{ asset('dashboard/images/avatar/avatar-1.jpg') }}"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="{{ asset('dashboard/images/avatar/avatar-2.jpg') }}"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="{{ asset('dashboard/images/avatar/avatar-3.jpg') }}"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-primary">
                                                            <span class="avatar-initials rounded-circle
                                    fs-6">+5</span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-dark">
                                                    <div class="float-start me-3">15%</div>
                                                    <div class="mt-2">
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar" role="progressbar" style="width:15%"
                                                                aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <div class="d-flex
                                align-items-center">
                                                        <div>
                                                            <div class="icon-shape icon-md border p-4
                                    rounded-1">
                                                                <img src="{{ asset('dashboard/images/brand/slack-logo.svg') }}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="ms-3 lh-1">
                                                            <h5 class=" mb-1"> <a href="#" class="text-inherit">Slack Team
                                                                    UI Design</a></h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">47</td>
                                                <td class="align-middle"><span class="badge
                                bg-danger">High</span></td>
                                                <td class="align-middle">
                                                    <div class="avatar-group">
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="{{ asset('dashboard/images/avatar/avatar-4.jpg') }}"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="{{ asset('dashboard/images/avatar/avatar-5.jpg') }}"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="{{ asset('dashboard/images/avatar/avatar-6.jpg') }}"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-primary">
                                                            <span class="avatar-initials rounded-circle
                                    fs-6">+5</span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-dark">
                                                    <div class="float-start me-3">35%</div>
                                                    <div class="mt-2">
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar" role="progressbar" style="width:35%"
                                                                aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <div class="d-flex
                                align-items-center">
                                                        <div>
                                                            <div class="icon-shape icon-md border p-4
                                    rounded-1">
                                                                <img src="{{ asset('dashboard/images/brand/github-logo.svg') }}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="ms-3 lh-1">
                                                            <h5 class=" mb-1"> <a href="#" class="text-inherit">GitHub
                                                                    Satellite</a></h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">120</td>
                                                <td class="align-middle"><span class="badge bg-info">Low</span></td>
                                                <td class="align-middle">
                                                    <div class="avatar-group">
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="{{ asset('dashboard/images/avatar/avatar-7.jpg') }}"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="{{ asset('dashboard/images/avatar/avatar-8.jpg') }}"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="{{ asset('dashboard/images/avatar/avatar-9.jpg') }}"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-primary">
                                                            <span class="avatar-initials rounded-circle
                                    fs-6">+1</span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-dark">
                                                    <div class="float-start me-3">75%</div>
                                                    <div class="mt-2">
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar" role="progressbar" style="width:75%"
                                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <div class="d-flex
                                align-items-center">
                                                        <div>
                                                            <div class="icon-shape icon-md border p-4
                                    rounded-1">
                                                                <img src="{{ asset('dashboard/images/brand/3dsmax-logo.svg') }}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="ms-3 lh-1">
                                                            <h5 class=" mb-1"> <a href="#" class="text-inherit">3D Character
                                                                    Modelling</a></h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">89</td>
                                                <td class="align-middle"><span class="badge
                                bg-warning">Medium</span></td>
                                                <td class="align-middle">
                                                    <div class="avatar-group">
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="{{ asset('dashboard/images/avatar/avatar-10.jpg') }}"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="{{ asset('dashboard/images/avatar/avatar-11.jpg') }}"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="{{ asset('dashboard/images/avatar/avatar-12.jpg') }}"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-primary">
                                                            <span class="avatar-initials rounded-circle
                                    fs-6">+5</span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-dark">
                                                    <div class="float-start me-3">63%</div>
                                                    <div class="mt-2">
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar" role="progressbar" style="width:63%"
                                                                aria-valuenow="63" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle">
                                                    <div class="d-flex
                                align-items-center">
                                                        <div>
                                                            <div class="icon-shape icon-md border p-4 rounded
                                    bg-primary">
                                                                <img src="{{ asset('dashboard/images/brand/layers-logo.svg') }}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="ms-3 lh-1">
                                                            <h5 class=" mb-1"> <a href="#" class="text-inherit">Webapp
                                                                    Design System</a>
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle">108</td>
                                                <td class="align-middle"><span class="badge
                                bg-success">Track</span></td>
                                                <td class="align-middle">
                                                    <div class="avatar-group">
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="{{ asset('dashboard/images/avatar/avatar-13.jpg') }}"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="{{ asset('dashboard/images/avatar/avatar-14.jpg') }}"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="{{ asset('dashboard/images/avatar/avatar-15.jpg') }}"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-primary">
                                                            <span class="avatar-initials rounded-circle
                                    fs-6">+5</span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-dark">
                                                    <div class="float-start me-3">100%</div>
                                                    <div class="mt-2">
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar bg-success" role="progressbar"
                                                                style="width:100%" aria-valuenow="100" aria-valuemin="0"
                                                                aria-valuemax="100"></div>
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="align-middle border-bottom-0">
                                                    <div class="d-flex
                                align-items-center">
                                                        <div>
                                                            <div class="icon-shape icon-md border p-4 rounded-1">
                                                                <img src="{{ asset('dashboard/images/brand/github-logo.svg') }}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="ms-3 lh-1">
                                                            <h5 class=" mb-1"> <a href="#" class="text-inherit">Github Event
                                                                    Design</a>
                                                            </h5>

                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle border-bottom-0">120</td>
                                                <td class="align-middle border-bottom-0"><span
                                                        class="badge bg-info">Low</span></td>
                                                <td class="align-middle border-bottom-0">
                                                    <div class="avatar-group">
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="{{ asset('dashboard/images/avatar/avatar-13.jpg') }}"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="{{ asset('dashboard/images/avatar/avatar-14.jpg') }}"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm">
                                                            <img alt="avatar" src="{{ asset('dashboard/images/avatar/avatar-15.jpg') }}"
                                                                class="rounded-circle">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-primary">
                                                            <span class="avatar-initials rounded-circle
                                    fs-6">+1</span>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-dark border-bottom-0">
                                                    <div class="float-start me-3">75%</div>
                                                    <div class="mt-2">
                                                        <div class="progress" style="height: 5px;">
                                                            <div class="progress-bar" role="progressbar" style="width:75%"
                                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- card footer  -->
                                <div class="card-footer bg-white text-center">
                                    <a href="#" class="link-primary">View All Projects</a>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
@endsection