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
                        <x-custom.input id="name" type="text" class="" wire:model="subPage.name" />
                        <x-custom.input-error for="subPage.name" class="mt-2" />
                        <span class="text-xs text-gray-500 block">Recomenda-se até 100 caracteres
                        <template x-if="$wire.subPage.name">
                            (<span x-text="$wire.subPage.name.length"></span> caracteres digitados</span>)
                            </template>
                        </span>
                    </div>
                    
                    <div class="col-span-6 lg:col-span-3 ">
                        <x-custom.label for="name_en" value="Nome (en)" required />
                        <x-custom.input id="name_en" type="text" class="" wire:model="subPage.name_en" />
                        <x-custom.input-error for="subPage.name_en" class="mt-2" />
                        <span class="text-xs text-gray-500 block">Recomenda-se até 100 caracteres
                        <template x-if="$wire.subPage.name_en">
                            (<span x-text="$wire.subPage.name_en.length"></span> caracteres digitados</span>)
                            </template>
                        </span>
                    </div>

                    <div class="col-span-6 lg:col-span-3">
                        <x-custom.label for="tit_seo" value="Título SEO" />
                        <x-custom.input id="tit_seo" class="" wire:model.deffer="subPage.tit_seo" />
                        <x-custom.input-error for="subPage.tit_seo" class="mt-2" />
                        <span class="text-xs text-gray-500 block">Recomenda-se até 100 caracteres
                            <template x-if="$wire.subPage.tit_seo">
                                (<span x-text="$wire.subPage.tit_seo.length"></span> caracteres digitados</span>)
                                </template>
                        </span>
                    </div>
                    <div class="col-span-6 lg:col-span-3">
                        <x-custom.label for="tit_seo_en" value="Título SEO (en)" />
                        <x-custom.input id="tit_seo_en" type="text" class="" wire:model.deffer="subPage.tit_seo_en" />
                        <x-custom.input-error for="subPage.tit_seo_en" class="mt-2" />
                        <span class="text-xs text-gray-500 block">Recomenda-se até 100 caracteres
                            <template x-if="$wire.subPage.tit_seo_en">
                                (<span x-text="$wire.subPage.tit_seo_en.length"></span> caracteres digitados</span>)
                                </template>
                        </span>
                    </div>


                    <div class="col-span-6 lg:col-span-3">
                        <x-custom.label for="desc_seo" value="Descrição SEO" />
                        <x-custom.textarea id="desc_seo" rows="3" class="" wire:model.deffer="subPage.desc_seo" />
                        <x-custom.input-error for="subPage.desc_seo" class="mt-2" />
                    </div>
                    <div class="col-span-6 lg:col-span-3">
                        <x-custom.label for="desc_seo_en" value="Descrição SEO (en)" />
                        <x-custom.textarea id="desc_seo_en" rows="3" wire:model.deffer="subPage.desc_seo_en" />
                        <x-custom.input-error for="subPage.desc_seo_en" class="mt-2" />
                    </div>

                    {{-- pag pai --}}
                    <div class="col-span-6 lg:col-span-3">
                        <x-custom.label for="page_id" value="Página Pai" required />
                        <x-custom.tooltip msg="Esta é a página que se relaciona com esta sub página (Seção veja também)."/>
                        <div wire:ignore>
                            <x-custom.select id="create_page_id" class="" wire:model="subPage.page_id" :options="$pages" action="create"/>
                        </div>
                        <x-custom.input-error for="subPage.page_id" class="mt-2" />
                    </div>

                    <div class="col-span-6 lg:col-span-3">
                        <x-custom.label for="order" value="Ordem" required />
                        <x-custom.tooltip msg="Esta é a ordem que a sub página aparece no site.<br>Ex: ordem 1 aparece em primeiro lugar."/>
                        <x-custom.input id="order" type="number" class="" wire:model="subPage.order" min="0" step="1"/>
                        <x-custom.input-error for="subPage.order" class="mt-2" />
                    </div>
                
                    

                    <div class="col-span-6 lg:col-span-3">
                        <x-custom.checkbox id="publish" text="Publicado" tooltip="Indica se esta sub página deve ou não aparecer no site." wire:model.deffer="subPage.publish" />
                        <x-custom.input-error for="subPage.publish" class="mt-2" />
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

        {{-- todo Fazer as áreas quando tivermos o layout dos templates --}}
</div>

@push('scripts')

<script>
    $(document).ready(function () {
        tippy('[data-tippy-content]',{
            allowHTML: true,
            placement: 'right',
        });
        
        //page_id
        $('#create_page_id').select2({
            placeholder: 'Selecione uma página'
        });
        $('#create_page_id').on('change', function (e) {
            let data = $(this).val();
            @this.set('subPage.page_id', data);               
        });
        window.livewire.on('clearPageId', () => {
            $("#create_page_id").select2({
                placeholder: 'Selecione uma página'
            });
        });

        
    });

</script>

@endpush
