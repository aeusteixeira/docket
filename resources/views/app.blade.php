<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $full_description }}">
    <meta name="robots" content="noindex">
    <meta name="revisit-after" content="1 day">
    <meta name="language" content="Portuguese">
    <meta http-equiv="refresh" content="240">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style>
        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            transition: 0.3s;
        }

        .card:not(:hover) {
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.19);
            transition: 0.3s;
        }

        .card,
        .card-img-top,
        .carousel-inner {
            border-radius: 10px;
        }

    </style>
    <title>
        {{ $company_name }} - Docket
    </title>
</head>

<body class="pt-5 bg-light">
    <main class="container">
        <section id="main">
            <div class="row">
                <div class="mb-3 col-sm-12 col-md-12">
                    <!-- With Control -->
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @forelse($banners as $banner)
                                <div class="carousel-item active">
                                    <img src="{{ $banner->image }}" class="d-block w-100 h-25"
                                        alt="{{ $banner->name }}">
                                </div>
                            @empty
                                <div class="carousel-item active">
                                    <img src="https://via.placeholder.com/1920x1080" class="d-block w-100" alt="">
                                </div>
                            @endforelse
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5">

                </div>
            </div>
        </section>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        @forelse($menus as $menu)
                            <li class="nav-item">
                                <a class="btn text-light me-2" href="{{ $menu->action }}"
                                    style="background-color: {{ $menu->color }};" target="_blank">
                                    <i class="fas fa-{{ $menu->icon }}"></i>
                                    {{ $menu->name }}
                                </a>
                            </li>
                        @empty
                            <li class="nav-item">
                                <a class="nav-link" href="#" disabled>
                                    Não há menus cadastrados
                                </a>
                            </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </nav>


        @forelse($sections as $section)
            <hr>
            <h3 class="mb-3">
                {{ $section->name }}
            </h3>
            <section id="posts" class="mb-3">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @forelse($section->contents as $card)
                        <div class="col mb-4">
                            <div class="card h-100 border-0">
                                <img src="{{ $card->image }}" class="card-img-top" alt="{{ $card->name }}"
                                    loading="lazy">
                                <div class="card-body">
                                    <span class="mb-2 badge rounded-pill bg-info text-light">
                                        <i class="fas fa-sticky-note"></i>
                                        <span>
                                            {{ $card->type->name }}
                                        </span>
                                    </span>
                                    <h5 class="card-title">
                                        {{ $card->name }}
                                    </h5>
                                    <p class="card-text">
                                        {{ $card->content }}
                                    </p>
                                    @if(!empty($card->action))
                                        <a href="{{ $card->action }}" class="btn text-light"
                                            style="background-color: {{ $card->callToAction->color }}"
                                            target="_blank">
                                            {{ $card->callToAction->name }}
                                        </a>
                                    @endif
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">
                                        <i class="fas fa-calendar-alt"></i>
                                        Publicado em:
                                        {{ $card->created_at->format('d/m/Y') }}
                                    </small>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-sm-12">
                            <p class="text-center">
                                Nenhum conteúdo encontrado.
                            </p>
                        </div>
                    @endforelse

                </div>
            </section>
        @empty
            <div class="col-sm-12">
                <p class="text-center">
                    Nenhuma seção encontrada.
                </p>
            </div>
        @endforelse
    </main>
    <footer>
        <div class="container">
            <p class="text-center">
                Desenvolvido com ❤️ por <a href="http://matheusteixeira.com.br" target="_blank"
                    rel="noopener noreferrer">
                    Matheus Teixeira
                </a>
            </p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

    @if($popups)
    @foreach($popups as $popup)
        <!-- Modal -->
        <div class="modal fade" id="firstAccess{{ $popup->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="firstAccess{{ $popup->id }}Label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="firstAccess{{ $popup->id }}Label">
                            {{ $popup->name }}
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                {{ $popup->content }}
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    Fechar
                                </button>
                                @if (!empty($popup->action))
                                    <a href="{{ $popup->action }}" class="btn btn-primary" target="_blank">
                                        {{ $popup->callToAction->name }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var firstAccess{{ $popup->id }} = new bootstrap.Modal(document.getElementById('firstAccess{{ $popup->id }}'));
            firstAccess{{ $popup->id }}.show();

        </script>
    @endforeach
    @endif
</body>

</html>
