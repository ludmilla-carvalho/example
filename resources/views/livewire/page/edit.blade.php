<div>
    <div class="px-6 mx-auto w-full">
        <x-custom.breadcrumb svg="{{ $svg }}">
            <x-slot name="title">
                {{ $title }}
            </x-slot>

            <x-slot name="sub_title">
                {{ $sub_title }}
            </x-slot>
        </x-custom.breadcrumb>

        {{-- Infos da pagina  --}}
        <div x-data>
            <x-form-section submit="save">
                <x-slot name="form">
                    <div class="col-span-6">
                        <x-custom.label for="url" value="URL" />
                        <x-custom.tooltip msg="Este é o link da página no site."/>
                        <?php $url = config('app.site_url') . '/' . $page->slug;?>
                        <a class="block font-semibold text-ruby-900 dark:text-ruby-700" href="{{ $url }}" target="_blank">{{ $url }}</a>
                    </div>

                    @if ($page->is_fixed == 1)
                        <div class="col-span-6 lg:col-span-3 ">
                            <x-custom.label for="name" value="Nome" required />
                            <x-custom.input id="name" type="text" class="" wire:model="page.name" />
                            <x-custom.input-error for="page.name" class="mt-2" />
                            <span class="text-xs text-gray-500 block">Recomenda-se até 100 caracteres
                            <template x-if="$wire.page.name">
                                (<span x-text="$wire.page.name.length"></span> caracteres digitados</span>)
                                </template>
                        </span>
                        </div>
                        <div class="col-span-6 lg:col-span-3 ">
                            <x-custom.label for="name_en" value="Nome (en)" required />
                            <x-custom.input id="name_en" type="text" class="" wire:model="page.name_en" />
                            <x-custom.input-error for="page.name_en" class="mt-2" />
                            <span class="text-xs text-gray-500 block">Recomenda-se até 100 caracteres
                            <template x-if="$wire.page.name_en">
                                (<span x-text="$wire.page.name_en.length"></span> caracteres digitados</span>)
                                </template>
                        </span>
                        </div>
                    @endif

                    <div class="col-span-6 lg:w-1/2">
                        <x-custom.label for="page.icon" value="Ícone" required />
                        <x-custom.tooltip msg="Este é o ícone da página que aparece no <strong>Menu</strong> do site."/>
                        @if ($icon)
                            <p class="text-azul-900 dark:text-gray-400 font-semibold text-sm">Preview:</p>
                            <img src="{{ $icon->temporaryUrl() }}" class="w-10 mb-2 dark:svg_fix">
                        @else
                            @if (strlen($page->icon) > 3)
                                <img src="{{ url('storage/pages/icons/' . $page->icon) }}" class="w-10 mb-2 dark:svg_fix">    
                            @endif
                        @endif
                        <x-custom.input id="page.icon{{ $iteration }}" type="file" class="" wire:model="icon" />
                        <x-custom.input-error for="icon" class="mt-2" />
                        <span class="text-xs text-gray-500 block">Tamanho máximo: 1MB</span>
                        <span class="text-xs text-gray-500 block">Formato permitido: apenas svg</span>
                        <div wire:loading wire:target="icon" class="mt-2 text-green-900 font-bold">Carregando...</div>
                    </div>

                    <div class="col-span-6 lg:col-span-3">
                        <x-custom.label for="tit_seo" value="Título SEO" />
                        <x-custom.input id="tit_seo" class="" wire:model.deffer="page.tit_seo" />
                        <x-custom.input-error for="page.tit_seo" class="mt-2" />
                        <span class="text-xs text-gray-500 block">Recomenda-se até 100 caracteres
                            <template x-if="$wire.page.tit_seo">
                                (<span x-text="$wire.page.tit_seo.length"></span> caracteres digitados</span>)
                                </template>
                        </span>
                    </div>
                    <div class="col-span-6 lg:col-span-3">
                        <x-custom.label for="tit_seo_en" value="Título SEO (en)" />
                        <x-custom.input id="tit_seo_en" type="text" class="" wire:model.deffer="page.tit_seo_en" />
                        <x-custom.input-error for="page.tit_seo_en" class="mt-2" />
                        <span class="text-xs text-gray-500 block">Recomenda-se até 100 caracteres
                            <template x-if="$wire.page.tit_seo_en">
                                (<span x-text="$wire.page.tit_seo_en.length"></span> caracteres digitados</span>)
                                </template>
                        </span>
                    </div>


                    <div class="col-span-6 lg:col-span-3">
                        <x-custom.label for="desc_seo" value="Descrição SEO" />
                        <x-custom.textarea id="desc_seo" rows="3" class="" wire:model.deffer="page.desc_seo" />
                        <x-custom.input-error for="page.desc_seo" class="mt-2" />
                    </div>
                    <div class="col-span-6 lg:col-span-3">
                        <x-custom.label for="desc_seo_en" value="Descrição SEO (en)" />
                        <x-custom.textarea id="desc_seo_en" rows="3" wire:model.deffer="page.desc_seo_en" />
                        <x-custom.input-error for="page.desc_seo_en" class="mt-2" />
                    </div>

                    @if ($page->id !=1)
                        <div class="col-span-6 lg:w-1/2">
                            <x-custom.label for="order" value="Ordem" required />
                            <x-custom.tooltip msg="Esta é a ordem que a página aparece no <strong>Menu</strong> do site.<br>Ex: ordem 1 aparece em primeiro lugar."/>
                            <x-custom.input id="order" type="number" class="" wire:model="page.order" min="0" step="1"/>
                            <x-custom.input-error for="page.order" class="mt-2" />
                        </div>
                    @endif
                    

                    <div class="col-span-6 lg:col-span-3">
                        <x-custom.checkbox id="publish" text="Publicado" tooltip="Indica se esta página deve ou não aparecer no <strong>Menu</strong> do site." wire:model.deffer="page.publish" />
                        <x-custom.input-error for="page.publish" class="mt-2" />
                    </div>

                    <div class="col-span-6 lg:col-span-3 text-right text-xs text-azul-900 dark:text-gray-400">
                        * preenchimento obrigatório
                    </div>

                    @if ($errors->any())
                        <div class="col-span-6 lg:col-span-3 m-0">
                            <p class="font-semibold text-sm text-ruby-800">Corrija os erros no formulário</p>
                        </div>
                    @endif
                    
                </x-slot>

                <x-slot name="actions">
                    <x-custom.secondary-button wire:click="showItem({{ $page->id }})" wire:loading.attr="disabled">
                        Cancelar
                    </x-custom.secondary-button>

                    <x-custom.button class="ml-2">
                        {{ __('Save') }}
                    </x-custom.button>
                    
                </x-slot>
            </x-form-section>
        </div>

        {{-- Contador utilizado para enumerar as seções da página --}}
        <?php $i = 1; ?>
        {{-- Array com o numeral das seções --}}
        <?php
            $num = [
                1 => 'primeira',
                2 => 'segunda',
                3 => 'terceira',
                4 => 'quarta',
                5 => 'quinta',
                6 => 'sexta',
                7 => 'sétima',
                8 => 'oitava',
                9 => 'nona',
                10 => 'décima',
                11 => 'décima primeira',
                12 => 'décima segunda',
                13 => 'décima terceira',
                14 => 'décima quarta',
                15 => 'décima quinta',
                16 => 'décima sexta',
                17 => 'décima sétima',
                18 => 'décima oitava',
                19 => 'décima nona',
                20 => 'vigésima',
            ];
        ?>

        {{-- Destaques --}}
        @if ($page->id == 1) {{-- somente na home --}}
            <div class="mx-auto w-full">       
                <x-custom.breadcrumb>
                    <x-slot name="sub_title">
                        Destaques
                    </x-slot>
                </x-custom.breadcrumb>

                <div class="text-azul-800 dark:text-ruby-100 mb-4">
                    Esta é a {{ $num[$i] }} seção da página {{ $page->name }}.<br>
                    Você pode criar novos destaques, editar os seus conteúdos e alterar as imagens.
                </div>

                <?php $i++; ?>

                <div class="mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <div class="overflow-hidden">
                            <div class="py-4"> 
                                <x-custom.add-button wire:click.prevent="$emitTo('highlight.create', 'open')" class="mt-5 mr-6 float-right" title="Novo Destaque" wire:loading.attr="disabled" />              
                                @if (count($page->highlights)>0)
                                    <table class="w-full xwhitespace-no-wrap table-auto">
                                        <thead>
                                            <tr class="text-xs font-semibold tracking-wide text-left text-azul-900 uppercase border-b dark:border-gray-700 bg-azul-100 dark:text-gray-400 dark:bg-gray-700">
                                                <th class="px-3 py-2">Ordem</th>
                                                <th class="px-3 py-2">Imagem</th>
                                                <th class="px-3 py-2">Título</th>
                                                <th class="px-3 py-2">Publicado</th>
                                                <th class="px-3 py-2">Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                            @foreach ($page->highlights as $item)
                                            <tr class="text-azul-900 dark:text-gray-400">
                                                <td class="px-4 py-3 text-sm">{{ $item->order }}</td>
                                                <td class="px-4 py-3 text-sm">
                                                    <a href="{{ url($item->image) }}" target="_blank">
                                                        <img src="{{ url('storage/highlights/' . $item->page_id . '/' . $item->image) }}" class="w-24">
                                                    </a>
                                                </td>
                                                <td class="px-4 py-3 text-sm">{!! $item->title !!}</td>
                                                <td class="px-4 py-3 text-sm">
                                                    <button wire:click.prevent="$emitTo('highlight.edit', 'tooglePublish', {{ $item->id }})" title="Publicar" wire:loading.attr="disabled" />
                                                    @if ($item->publish == 1)
                                                        <span class="text-green-900">
                                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                                        </span>
                                                    @else
                                                        <span class="text-ruby-800 dark:text-ruby-700">
                                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                                        </span>
                                                    
                                                    @endif
                                                    </button>
                                                </td>
                                                <td>
                                                    <x-custom.edit-button wire:click.prevent="$emitTo('highlight.edit', 'open', {{ $item->id }})" title="Editar" wire:loading.attr="disabled" />
                                                    <x-custom.delete-button wire:click.prevent="$emitTo('highlight.delete', 'open', {{ $item->id }})" title="Apagar" wire:loading.attr="disabled" />
                                                </td>
                                            @endforeach
                                        </tbody>
                                    </table>                   
                                @else
                                    <p class="font-semibold text-azul-900 dark:text-gray-400 px-6">
                                        Nenhum destaque cadastrado.
                                    </p>
                                @endif
                                
                                <livewire:highlight.create :page="$page">
                                
                                <livewire:highlight.edit>
                                
                                <livewire:highlight.delete>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        {{-- Banner --}}
        @if ($page->id != 1) {{-- exceto na home --}}
            <div class="mx-auto w-full">       
                <x-custom.breadcrumb>
                    <x-slot name="sub_title">
                        Banner
                    </x-slot>
                </x-custom.breadcrumb>

                <div class="text-azul-800 dark:text-ruby-100 mb-4">
                    Esta é a {{ $num[$i] }} seção da página {{ $page->name }}.<br>
                    Você pode editar o seu conteúdo e alterar a sua imagem.
                </div>

                <?php $i++; ?>

                @if($page->banner)
                    @livewire('banner.edit', ['banner' => $page->banner])
                @else
                    @livewire('banner.create', ['page' => $page])
                @endif
            </div>
        @endif

        {{-- Texto --}}
        @if ($page->id == 2 || $page->id == 3)
            <div class="mx-auto w-full">       
                <x-custom.breadcrumb>
                    <x-slot name="sub_title">
                        Texto
                    </x-slot>
                </x-custom.breadcrumb>

                <div class="text-azul-800 dark:text-ruby-100 mb-4">
                    Esta é a {{ $num[$i] }} seção da página {{ $page->name }}.<br>
                    Você pode editar o seu conteúdo.
                </div>

                <?php $i++; ?>

                @if($page->text)
                    @livewire('text.edit', ['text' => $page->text])
                @else
                    @livewire('text.create', ['page' => $page])
                @endif
            </div>
        @endif

        {{-- Chamadas --}}
        @foreach ($page->calls as $call)
            <div class="mx-auto w-full">       
                <x-custom.breadcrumb>
                    <x-slot name="sub_title">
                        {{ strip_tags($call->title) }}
                    </x-slot>
                </x-custom.breadcrumb>

                <div class="text-azul-800 dark:text-ruby-100 mb-4">
                    <p>Esta é a {{ $num[$i] }} seção da página {{ $page->name }} com o nome que você customizou no campo "Título".</p>
                    
                    @if ($call->id == 2)
                        <p class="mt-2">O conteúdo relacionado a essa seção é:</p>
                        <x-custom.component-button onclick="location.href='{{ route('graduations') }}'" class="mt-1 mr-5" title="Conhecimento Jurídico" wire:loading.attr="disabled" />
                    @endif
                    
                    @if ($call->id == 3)
                    <p class="mt-2">O conteúdo relacionado a essa seção é:</p>
                    <x-custom.component-button onclick="location.href='{{ route('graduations') }}'" class="mt-1 mr-5" title="Eventos" wire:loading.attr="disabled" />
                    @endif

                    @if ($call->id == 11)
                    <p class="mt-2">O conteúdo relacionado a essa seção é:</p>
                    <x-custom.component-button onclick="location.href='{{ route('offices') }}'" class="mt-1 mr-5" title="Escritórios" wire:loading.attr="disabled" />
                    @endif

                    @if ($call->id == 16)
                    <p class="mt-2">O conteúdo relacionado a essa seção é:</p>
                    <x-custom.component-button onclick="location.href='{{ route('offices') }}'" class="mt-1 mr-5" title="Reconhecimentos do Escritório" wire:loading.attr="disabled" />
                    @endif
                </div>
                
                <?php $i++; ?>

                @livewire('call.edit', ['callx' => $call], key($call->id))
            </div>
        @endforeach

        {{-- Advogados --}}
        @if ($page->id == 2) {{-- somente na pag advogados --}}
            <h3 class="my-6 text-2xl font-semibold text-azul-900 dark:text-ruby-600  transition-colors duration-150">
                Conteúdo
            </h3>
            <div class="text-azul-800 dark:text-ruby-100 mb-4">
                Acesse a lista de Profissionais desta página através do componente Advogados.
                <x-custom.component-button onclick="location.href='{{ route('advogados') }}'" class="mt-4" title="Advogados" wire:loading.attr="disabled" />
            </div>
        @endif

        {{-- Áreas de atuação --}}
        @if ($page->id == 3) {{-- somente na pag atuação --}}
            <h3 class="my-6 text-2xl font-semibold text-azul-900 dark:text-ruby-600  transition-colors duration-150">
                Conteúdo
            </h3>
            <div class="text-azul-800 dark:text-ruby-100 mb-4">
                Acesse a lista das áreas de atuação desta página através do componente Áreas de Atuação.
                <x-custom.component-button wire:click="" class="mt-4" title="Áreas de Atuação" wire:loading.attr="disabled" />
            </div>
        @endif
    </div>

</div>

@push('scripts')

<script>
    $(document).ready(function () {
        tippy('[data-tippy-content]',{
            allowHTML: true,
            placement: 'right',
        });
    });

</script>

@endpush


