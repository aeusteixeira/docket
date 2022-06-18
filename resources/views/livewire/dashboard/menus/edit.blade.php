<div class="row ">

    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
        <div class="card shadow">
            <x-alert />
            <div class="card-body">
                <form wire:submit.prevent="submit">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h4>
                                Informações do item
                            </h4>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" class="form-control" wire:model="name" id="name"
                                    placeholder="Suporte" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Ação</label>
                                <input type="text" class="form-control" wire:model="action" id="action"
                                    placeholder="{{ $company_website }}/suporte" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Cor</label>
                                <input type="color" class="form-control" wire:model="color" id="color"
                                    placeholder="#00ff00" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Ícone</label>
                                <select class="form-select" wire:model="icon" id="icon" required>
                                    <optgroup label="Comunicação">
                                        <option value="fas fa-envelope">Email</option>
                                        <option value="fas fa-phone">Telefone</option>
                                        <option value="fas fa-whatsapp">Whatsapp</option>
                                        <option value="fas fa-sms">SMS</option>
                                        <option value="fas fa-comment">Mensagem</option>
                                    </optgroup>
                                    <optgroup label="Suporte">
                                        <option value="fas fa-headset">Suporte</option>
                                        <option value="fas fa-ticket-alt">Ticket</option>
                                        <option value="fas fa-question-circle">Pergunta</option>
                                        <option value="fas fa-exclamation-triangle">Alerta</option>
                                        <option value="fas fa-exclamation-circle">Erro</option>
                                    </optgroup>
                                    <optgroup label="Utilidades">
                                        <option value="fas fa-cogs">Configurações</option>
                                    </optgroup>
                                    <optgroup label="Usuário">
                                        <option value="fas fa-user">Usuário</option>
                                        <option value="fas fa-user-plus">Novo usuário</option>
                                        <option value="fas fa-user-minus">Excluir usuário</option>
                                        <option value="fas fa-user-edit">Editar usuário</option>
                                        <option value="fas fa-user-shield">Permissões</option>
                                    </optgroup>
                                    <optgroup label="Grupos">
                                        <option value="fas fa-users">Grupos</option>
                                    </optgroup>
                                    <optgroup label="Empresa">
                                        <option value="fas fa-building">Empresa</option>
                                    </optgroup>
                                    <optgroup label="Produto">
                                        <option value="fas fa-box">Produto</option>
                                    </optgroup>
                                    <optgroup label="Serviço">
                                        <option value="fas fa-wrench">Serviço</option>
                                    </optgroup>
                                    <optgroup label="Orçamento">
                                        <option value="fas fa-file-invoice">Orçamento</option>
                                    </optgroup>
                                    <optgroup label="Venda">
                                        <option value="fas fa-shopping-cart">Venda</option>
                                    </optgroup>
                                    <optgroup label="Financeiro">
                                        <option value="fas fa-money-check-alt">Financeiro</option>
                                    </optgroup>
                                    <optgroup label="Relatórios">
                                        <option value="fas fa-chart-bar">Relatórios</option>
                                    </optgroup>
                                    <optgroup label="Ferramentas">
                                        <option value="fas fa-cogs">Ferramentas</option>
                                    </optgroup>
                                    <optgroup label="Outros">
                                        <option value="fas fa-question-circle">Outros</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="order">Ordem</label>
                                <input type="number" class="form-control" wire:model="order" id="order"
                                    placeholder="1" required>
                            </div>
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
                </form>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-lg-6 col-md-6 col-12 align-self-center text-center">
        <a class="btn btn-lg text-light" href="#" style="background-color: {{ $color }};" target="_blank">
            <i class="fas fa-{{ $icon }}"></i> {{ $name }}
        </a>
    </div>
</div>
