<div class="row">
    <!-- align-items-center -->

    <div class="col-xl-6 col-lg-6 col-md-6 col-12">

        <div class="card shadow">
            <x-alert />
            <div class="card-body">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h4>
                            Informações do comunicado
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" class="form-control" id="title" name="title"
                                placeholder="Título do comunicado" wire:model="title">
                        </div>
                        <div class="form-group">
                            <label for="body">
                                Conteúdo
                            </label>
                            <textarea class="form-control" id="body" name="body" rows="6" wire:model="body"></textarea>
                        </div>
                            <div class="form-group">
                                <label for="image">
                                    Selecionar imagem de capa
                                </label>
                                <input type="file" class="form-control" id="image" name="image" wire:model="image">
                            </div>
                            <hr>
                            {{--
                        <div class="form-group">
                            <label for="hasAttachment">
                                Adicionar anexo?
                            </label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="hasAttachment" checked wire:model="hasAttachment">
                                <label class="form-check-label" for="hasAttachment">Sim</label>
                              </div>
                              @error('hasAttachment')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        @if ($hasAttachment)
                            <div class="form-group">
                                <label for="attachment">
                                    Adicionar anexo
                                </label>
                                <input type="file" class="form-control" id="attachment" name="attachment" wire:model="attachment">
                            </div>
                            @error('attachment')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        @endif
                        --}}
                        <hr>
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
                        @if ($hasCTA)
                            <div class="form-group">
                                <label for="callToAction">
                                    Texto do botão de ação
                                </label>
                                <input type="text" class="form-control" id="callToAction" name="callToAction" wire:model="callToAction" placeholder="Exemplo: Convidar amigos">
                            </div>
                            @error('callToAction')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="ctaURL">
                                    Link do botão de ação
                                </label>
                                <input type="text" class="form-control" id="ctaURL" name="ctaURL" wire:model="ctaURL" placeholder="Exemplo: {{ global_config('company_website') }}/invite">
                            </div>
                            @error('ctaURL')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        @endif
                        <hr>
                        <div class="form-group">
                            <label for="groups">
                                Selecione os grupos que receberão o comunicado
                            </label>

                            @forelse($groups as $group)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{ $group->id }}" id="group_{{ $group->id }}"
                                        wire:model="groupsSelected">
                                    <label class="form-check-label" for="groups">
                                        {{ $group->name }}
                                    </label>
                                </div>
                            @empty
                                <p>Nenhum grupo encontrado</p>
                            @endforelse

                        </div>
                        <div class="form-group">
                            <strong>
                                <p>
                                    Helpers
                                </p>
                            </strong>
                            <!-- Accordion flush -->
                            <!-- Accordion Example -->

                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Como utilizar variáveis?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                                <p>
                                                    Para utilizar variáveis, você deve inserir o seguinte código:
                                                </p>
                                                <p>
                                                    <strong>
                                                        {name}
                                                    </strong>
                                                    - Nome do usuário
                                                </p>
                                                <p>
                                                    <strong>
                                                        {email}
                                                    </strong>
                                                    - Email do usuário
                                                </p>
                                                <p>
                                                    <strong>
                                                        {date_actual}
                                                    </strong>
                                                    - Data atual
                                                </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseTwo" aria-expanded="true"
                                            aria-controls="collapseTwo">
                                            Títulos, links e cores
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                                <p>
                                                    Para utilizar títulos, você deve inserir o seguinte código:
                                                </p>
                                                <p>
                                                    <strong>
                                                        {{ '<h1>Título 1</h1>' }}
                                                    </strong> - Título princial
                                                </p>
                                                <p>
                                                    <strong>
                                                        {{ '<h2>Título 2</h2>' }}
                                                    </strong> - Título secundário
                                                </p>
                                                <p>
                                                    <strong>
                                                        {{ '<h3>Título 3</h3>' }}
                                                    </strong> - Título terciário
                                                </p>
                                                <p>
                                                    <strong>
                                                        {{ '<h4>Título 4</h4>' }}
                                                    </strong> - Título quartário
                                                </p>
                                                <hr>
                                                <p>
                                                    Para utilizar links, você deve inserir o seguinte código:
                                                </p>
                                                <p>
                                                    <strong>
                                                        {{ '<a href="https://www.google.com">Google</a>' }}
                                                    </strong> - Link para Google
                                                </p>
                                                <hr>
                                                <p>
                                                    Para utilizar cores, você deve inserir o seguinte código:
                                                </p>
                                                <p>
                                                    <strong>
                                                        {{ '<span style="color: red;">Texto vermelho</span>' }}
                                                    </strong> - Texto vermelho
                                                </p>
                                                <p>
                                                    <strong>
                                                        {{ '<span style="color: green;">Texto verde</span>' }}
                                                    </strong> - Texto verde
                                                </p>
                                                <p>
                                                    <strong>
                                                        {{ '<span style="color: #0000ff;">Texto azul</span>' }}
                                                    </strong> - Texto azul

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- card footer  -->
            <div class="card-footer bg-white text-end">
                <button type="submit" class="btn btn-primary" wire:click="submit">
                    <span wire:loading.remove wire:target="submit">
                        <i class="fas fa-paper-plane"></i>
                        Enviar
                    </span>
                    <span wire:loading wire:target="submit">
                        <i class="fas fa-spinner fa-spin"></i>
                        Enviando...
                    </span>
                </button>
            </div>
        </div>

    </div>

    <div class="col-xl-6 col-lg-6 col-md-6 col-12">
        <div class="card shadow">
            <div class="card-header">
                <strong>
                    De:
                </strong>
                <span class="text-muted">
                    {{ env('MAIL_FROM_ADDRESS') }}
                </span>
                <br>
                <strong>
                    Para:
                </strong>
                <span class="text-muted">
                    @if ($groupsNames)
                        @foreach ($groupsNames as $groupName)
                            <div class="badge badge-pill bg-info me-1">
                                {{ $groupName }}
                            </div>
                        @endforeach
                    @else
                        Nenhum grupo selecionado
                    @endif
                </span>
                <br>
                <strong>
                    Assunto:
                </strong>
                <span class="text-muted">
                    {{ $title }}
                </span>
                @if ($hasAttachment && $attachment)
                <hr>
                    <div class="card" style="max-width: {{ $attachment->getClientOriginalName() > 100 ? '15rem' : 'auto' }}">
                        <div class="card-body">
                            <i class="fas fa-paperclip"></i>
                            <span class="text-muted">
                                {{ $attachment->getClientOriginalName() }}
                            </span>
                        </div>
                    </div>
                @endif
            </div>
            <div class="card-body"  style="background-color: {{ global_config('primary_color') }}">
                <div class="card shadow-sm">
                    <div class="card-header text-center">
                        <img src="{{ global_config('company_logo') }}" alt="{{ $title }} logo" style="max-width: 180px">
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ $image ? $image->temporaryUrl() : $imagePreview }}" alt="{{ $title }}"  alt="{{ $title }}" class="img-fluid">
                        </div>
                        <div class="text-lead">
                            {!! $body !!}
                            @if ($hasCTA && $callToAction)
                                <div class="form-group text-center">
                                    <a href="#" class="btn text-light" style="background-color: {{ global_config('secondary_color') }}">
                                        {{ $callToAction }}
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
