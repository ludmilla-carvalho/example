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

                    <div class="col-span-6 lg:w-1/2">
                        <x-custom.label for="order" value="Ordem" required />
                        <x-custom.tooltip msg="Esta é a ordem que a página aparece no <strong>Menu</strong> do site.<br>Ex: ordem 1 aparece em primeiro lugar."/>
                        <x-custom.input id="order" type="number" class="" wire:model="page.order" min="0" step="1"/>
                        <x-custom.input-error for="page.order" class="mt-2" />
                    </div>
                
                    

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
                    <x-custom.secondary-button wire:click="showItem" wire:loading.attr="disabled">
                        Cancelar
                    </x-custom.secondary-button>

                    <x-custom.button class="ml-2">
                        {{ __('Save') }}
                    </x-custom.button>
                    
                </x-slot>
            </x-form-section>
        </div>

        {{-- Fazer as áreas quando tivermos o layout dos templates --}}
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