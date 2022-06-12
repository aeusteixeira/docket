<div>
    <h2 class="mb-0 fw-bold">
        {{ $context }}
    </h2>
    <div class="mt-2">
        @if (isset($actions))
            @foreach ($actions as $action)
            @if ($action['label'] == 'Importar Usuários')
                <button type="button" class="btn btn-{{ $action['type']}} btn-sm" data-bs-toggle="modal"
                    data-bs-target="#modal-import-">
                    <i class="fas fa-upload"></i>
                    {{ $action['label'] }}
                </button>
                <div class="modal fade" id="modal-import-" tabindex="-1" role="dialog"
                    aria-labelledby="modal-import-Title" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form action="{{ $action['url'] }}" method="POST">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modal-import-Title">
                                        {{ $action['label'] }}
                                    </h5>

                                </div>
                                <div class="modal-body">
                                    <p>
                                        Importe um arquivo Excel com os dados de usuários. Baixe o modelo de importação <a href="">aqui</a>.
                                    </p>
                                    <p>
                                        <input type="file" name="file" class="form-control-file" id="file">
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancelar</button>
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-upload"></i>
                                        Importar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @else
                <a href="{{ $action['url'] }}" class="btn btn-{{ $action['type'] }} btn-sm">
                    <i class="{{ $action['icon'] }}"></i>
                    {{ $action['label'] }}
                </a>
            @endif
            @endforeach
        @endif
    </div>
</div>
