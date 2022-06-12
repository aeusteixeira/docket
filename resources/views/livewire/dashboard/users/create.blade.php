<div class="row"> <!-- align-items-center -->

    <div class="col-xl-12 col-lg-12 col-md-12 col-12">

        <div class="card shadow">
            <x-alert />
            <div class="card-body">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h4>
                            Informações do Usuário
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nome do usuário" wire:model="name">
                        </div>
                        @error('name')
                            <x-error-input :message="$message"/>
                        @enderror
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail do usuário" wire:model="email">
                        </div>
                        @error('email')
                            <x-error-input :message="$message"/>
                        @enderror
                        <div class="form-group">
                            <label for="group_id">Grupo</label>
                            <select class="form-control" id="group_id" name="group_id" wire:model="group_id">
                                <option value="">Selecione um grupo</option>
                                @foreach ($groups as $group)
                                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('group_id')
                            <x-error-input :message="$message"/>
                        @enderror
                        <div class="form-group">
                            <label for="isAdmin">
                                Usuário administrador?
                            </label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="isAdmin" checked wire:model="isAdmin">
                                <label class="form-check-label" for="isAdmin">Sim</label>
                              </div>
                              @error('isAdmin')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        @if ($isAdmin)
                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Senha do usuário" wire:model="password">
                            </div>
                            @error('password')
                                <x-error-input :message="$message"/>
                            @enderror
                        @endif
                    </div>

                    <div class="card-footer bg-white text-end">
                        <button type="submit" class="btn btn-primary" wire:click="submit">
                            <span wire:loading.remove wire:target="submit">
                                <i class="fas fa-save"></i>
                                Salvar
                            </span>
                            <span wire:loading wire:target="submit">
                                <i class="fas fa-spinner fa-spin"></i>
                                Salvando...
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
