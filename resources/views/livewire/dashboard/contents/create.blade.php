<div class="row"> <!-- align-items-center -->

    <div class="col-xl-6 col-lg-6 col-md-6 col-12">

        <div class="card shadow">
            <x-alert />
            <div class="card-body">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h4>
                            Informações do conteúdo
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nome do conteúdo" wire:model="name">
                        </div>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="content">Descrição</label>
                            <textarea class="form-control" id="content" name="content" rows="3" wire:model="content"></textarea>
                            @error('content')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="type_id">Tipo</label>
                            <select class="form-control" id="type_id" name="type_id" name="type_id" wire:model="type_id">
                                <option value="" selected>Selecione</option>
                                @foreach ($types as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">
                                Selecione o tipo do conteúdo. <a href="">Criar novo</a>
                            </small>
                            @error('type_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        @if($isCard OR $isBanner)
                            <div class="form-group">
                                <label for="image">Imagem de destaque</label>
                                <input type="file" class="form-control" id="image" name="image" wire:model="image">
                            </div>
                            @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        @endif
                    </div>
                </div>
                <div class="card mt-3">
                    <div class="card-header">
                        <h4>
                            Informações complementares
                        </h4>
                    </div>
                    <div class="card-body">
                        @if($isCard)
                            <div class="form-group">
                                <label for="section_id">Seção</label>
                                <select class="form-control" id="section_id" name="section_id" wire:model="section_id">
                                    <option value="" selected>Selecione</option>
                                    @foreach ($sections as $section)
                                        <option value="{{ $section->id }}">{{ $section->name }}</option>
                                    @endforeach
                                </select>
                                <small class="form-text text-muted">
                                    Selecione a seção do conteúdo. <a href="">Criar novo</a>
                                </small>
                                @error('section_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        @endif
                        @if($isCard OR $isPopUp)
                            <div class="form-group">
                                <label for="hasCTA">
                                    Adicionar botão de ação?
                                </label>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="hasCTA" checked wire:model="hasCTA">
                                    <label class="form-check-label" for="hasCTA">Sim</label>
                                  </div>
                                  @error('hasCTA')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        @endif
                        @if($hasCTA)
                        <div class="form-group">
                            <label for="call_to_action_id">
                                Chamada de atenção
                            </label>
                            <select class="form-control" id="call_to_action_id" name="call_to_action_id" wire:model="call_to_action_id">
                                <option value="" selected>Selecione</option>
                                @foreach ($call_to_actions as $call_to_action)
                                    <option value="{{ $call_to_action->id }}">{{ $call_to_action->name }}</option>
                                @endforeach
                            </select>
                            @error('call_to_action_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="action" class="form-label">
                                URL de ação
                            </label>
                            <div class="input-group">
                              <span class="input-group-text" id="inputGroupPrepend">
                                <i class="fas fa-link"></i>
                              </span>
                              <input type="text" class="form-control" id="action" placeholder="https://" wire:model="action">
                            </div>
                            @error('action')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                    @endif
                    </div>
                </div>
            </div>
            <!-- card footer  -->
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

        <div class="col-xl-6 col-lg-6 col-md-6 col-12">
            @if ($isCard)
                <div class="card shadow bg-light" style="max-width: 30rem;">
                    @if ($image)
                        <img src="{{ $image->temporaryUrl() }}" class="card-img-top" alt="{{ $name }}">
                    @endif
                    <div class="card-body">
                    <h5 class="card-title">
                        {{ $name }}
                    </h5>
                    <p class="card-text">
                        {{ $content }}
                    </p>
                    <a href="#" class="btn text-light" style="background-color: {{ $call_to_action_color }}">
                        {{ $call_to_action_name }}
                    </a>
                    </div>
                </div>
            @elseif($isBanner)
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                            @if ($image)
                                <img src="{{ $image->temporaryUrl() }}" class="d-block w-100" alt="{{ $name }}">
                            @endif
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"  data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"  data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>

            @elseif($isPopUp)

            <div class="tab-content" id="pills-tabContent-modal-example">
                <div class="tab-pane tab-example-design fade show active" id="pills-modal-example-design" role="tabpanel" aria-labelledby="pills-modal-example-design-tab">
                  <div class="modal gd-example-modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog m-0 w-100" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">
                            {{ $name }}
                          </h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">

                          </button>
                        </div>
                        <div class="modal-body">
                          <p>
                            {{ $content }}
                          </p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Fechar
                          </button>
                          @if($hasCTA)
                          <button type="button" class="btn text-light" style="background-color: {{ $call_to_action_color }}">
                            {{ $call_to_action_name }}
                            @endif
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            @endif
        </div>

</div>
