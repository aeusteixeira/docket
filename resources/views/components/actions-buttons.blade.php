<div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $id }}">
    <i class="fas fa-trash-alt"></i>
    Excluir
  </button>

  <!-- Modal -->
  <div class="modal fade" id="modal-delete-{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="modal-delete-{{ $id }}Title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form action="{{ $route }}" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-header">
                <h5 class="modal-title" id="modal-delete-{{ $id }}Title">
                    Excluir {{ $name }}?
                </h5>

            </div>
            <div class="modal-body">
                <p>
                    Tem certeza que deseja excluir <strong>{{ $name }}</strong>?
                </p>
                <p>
                    Esta ação não poderá ser desfeita.
                </p>
              </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger">
                    <i class="fas fa-trash-alt"></i>
                    Sim, excluir
                </button>
            </div>
        </form>
      </div>
    </div>
  </div>

</div>
