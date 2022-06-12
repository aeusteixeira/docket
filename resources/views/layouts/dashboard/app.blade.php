@include('layouts.dashboard.includes.head')

<body class="bg-light">
    <div id="db-wrapper">
        <!-- navbar vertical -->
        <!-- Sidebar -->

        <nav class="navbar-vertical navbar">
            <div class="nav-scroller">
                <!-- Brand logo -->
                <a class="navbar-brand" href="{{ route('dashboard.index') }}">
                    <h3>
                        <span class="text-primary docket">
                            {{ config('app.name') }}
                        </span>
                    </h3>
                </a>
                <!-- Navbar nav -->
                <ul class="navbar-nav flex-column" id="sideNavbar">
                    <li class="nav-item">
                        <a class="nav-link has-arrow  active " href="{{ route('dashboard.index') }}">
                            <i data-feather="home" class="nav-icon icon-xs me-2"></i> Dashboard
                        </a>

                    </li>


                    <!-- Nav item -->
                    <li class="nav-item">
                        <div class="navbar-heading">Conteúdos & Comunicados</div>
                    </li>


                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navPages" aria-expanded="false" aria-controls="navPages">
                            <i data-feather="package" class="nav-icon icon-xs me-2">
                            </i>
                            Conteúdos
                        </a>

                        <div id="navPages" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link has-arrow" href="{{ route('dashboard.contents.create') }}">
                                        <i data-feather="plus-circle" class="nav-icon icon-xs me-2">
                                        </i> Criar novo
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('dashboard.contents.index') }}">
                                        <i data-feather="list" class="nav-icon icon-xs me-2">
                                        </i> Visualizar todos
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </li>


                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navAuthentication" aria-expanded="false" aria-controls="navAuthentication">
                            <i data-feather="send" class="nav-icon icon-xs me-2">
                            </i> Comunicados
                        </a>
                        <div id="navAuthentication" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link " href="./pages/sign-in.html">
                                        <i data-feather="plus-circle" class="nav-icon icon-xs me-2">
                                        </i> Criar novo
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="./pages/sign-up.html">
                                        <i data-feather="list" class="nav-icon icon-xs me-2">
                                        </i> Visualizar todos
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <!-- Nav item -->
                    <li class="nav-item">
                        <div class="navbar-heading">
                            Minha empresa
                        </div>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navUsers" aria-expanded="false" aria-controls="navUsers">
                            <i data-feather="users" class="nav-icon icon-xs me-2">
                            </i> Usuários
                        </a>
                        <div id="navUsers" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('dashboard.users.create') }}">
                                        <i data-feather="plus-circle" class="nav-icon icon-xs me-2">
                                        </i> Criar novo
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="{{ route('dashboard.users.index') }}">
                                        <i data-feather="list" class="nav-icon icon-xs me-2">
                                        </i> Visualizar todos
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('dashboard.users.import') }}">
                                        <i data-feather="file-plus" class="nav-icon icon-xs me-2">
                                        </i> Importar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link has-arrow  collapsed " href="#!" data-bs-toggle="collapse"
                            data-bs-target="#navDepartaments" aria-expanded="false" aria-controls="navDepartaments">
                            <i data-feather="share-2" class="nav-icon icon-xs me-2">
                            </i> Grupos
                        </a>
                        <div id="navDepartaments" class="collapse " data-bs-parent="#sideNavbar">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('dashboard.groups.create') }}">
                                        <i data-feather="plus-circle" class="nav-icon icon-xs me-2">
                                        </i> Criar novo
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  " href="{{ route('dashboard.groups.index') }}">
                                        <i data-feather="list" class="nav-icon icon-xs me-2">
                                        </i> Visualizar todos
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Nav item -->
                    <li class="nav-item">
                        <div class="navbar-heading">
                            Configurações
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('dashboard.settings') }}">
                            <i data-feather="settings" class="nav-icon icon-xs me-2">
                            </i>
                            Configurações
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('auth.logout') }}">
                            <i data-feather="log-out" class="nav-icon icon-xs me-2">
                            </i>
                            Sair
                        </a>
                    </li>
                </ul>

            </div>
        </nav>
        <!-- Page content -->
        <div id="page-content">
            <div class="header @@classList">
                <!-- navbar -->
                <nav class="navbar-classic navbar navbar-expand-lg">
                    <a id="nav-toggle" href="#"><i data-feather="menu" class="nav-icon me-2 icon-xs"></i></a>
                    <div class="ms-lg-3 d-none d-md-none d-lg-block">
                        <!-- Form -->
                        <form class="d-flex align-items-center">
                            <input type="search" class="form-control" placeholder="Search" />
                        </form>
                    </div>
                    <!--Navbar nav -->
                    <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
                        <li class="dropdown stopevent">
                            <a class="btn btn-light btn-icon rounded-circle indicator indicator-primary text-muted" href="#" role="button" id="dropdownNotification" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="icon-xs" data-feather="bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"
                                aria-labelledby="dropdownNotification">
                                <div>
                                    <div class="border-bottom px-3 pt-2 pb-3 d-flex justify-content-between align-items-center">
                                        <p class="mb-0 text-dark fw-medium fs-4">Notifications</p>
                                        <a href="#" class="text-muted">
                                            <span>
                                                <i class="me-1 icon-xxs" data-feather="settings"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <!-- List group -->
                                    <ul class="list-group list-group-flush notification-list-scroll">
                                        <!-- List group item -->
                                        <li class="list-group-item bg-light">


                                            <a href="#" class="text-muted">
                                                <h5 class=" mb-1">Rishi Chopra</h5>
                                                <p class="mb-0">
                                                    Mauris blandit erat id nunc blandit, ac eleifend dolor pretium.
                                                </p>
                                            </a>



                                        </li>
                                        <!-- List group item -->
                                        <li class="list-group-item">


                                            <a href="#" class="text-muted">
                                                <h5 class=" mb-1">Neha Kannned</h5>
                                                <p class="mb-0">
                                                    Proin at elit vel est condimentum elementum id in ante. Maecenas et
                                                    sapien metus.
                                                </p>
                                            </a>



                                        </li>
                                        <!-- List group item -->
                                        <li class="list-group-item">


                                            <a href="#" class="text-muted">
                                                <h5 class=" mb-1">Nirmala Chauhan</h5>
                                                <p class="mb-0">
                                                    Morbi maximus urna lobortis elit sollicitudin sollicitudieget elit
                                                    vel pretium.
                                                </p>
                                            </a>



                                        </li>
                                        <!-- List group item -->
                                        <li class="list-group-item">


                                            <a href="#" class="text-muted">
                                                <h5 class=" mb-1">Sina Ray</h5>
                                                <p class="mb-0">
                                                    Sed aliquam augue sit amet mauris volutpat hendrerit sed nunc eu
                                                    diam.
                                                </p>
                                            </a>



                                        </li>
                                    </ul>
                                    <div class="border-top px-3 py-2 text-center">
                                        <a href="#" class="text-inherit fw-semi-bold">
                                            View all Notifications
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- List -->
                        <li class="dropdown ms-2">
                            <a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                    <img alt="avatar"
                                        src="{{ asset('dashboard/images/avatar/avatar-1.jpg') }}"
                                        class="rounded-circle" />
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                                <div class="px-4 pb-0 pt-2">


                                    <div class="lh-1 ">
                                        <h5 class="mb-1">
                                            {{ Auth::user()->name }}
                                        </h5>
                                    </div>
                                    <div class=" dropdown-divider mt-3 mb-2"></div>
                                </div>

                                <ul class="list-unstyled">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="me-2 icon-xxs dropdown-item-icon"
                                                data-feather="settings"></i>
                                                Configuações
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('auth.logout') }}">
                                            <i class="me-2 icon-xxs dropdown-item-icon" data-feather="power"></i>
                                            Sair
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            @yield('content')
        </div>
    </div>
    @include('layouts.dashboard.includes.footer')
</body>
</html>

