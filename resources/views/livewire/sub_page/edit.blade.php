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
                        <x-custom.label for="tit_seo" value="URL" />
                        <x-custom.tooltip msg="Este é o link da sub página no site."/>
                        <?php $url = config('app.site_url') . '/' . $subPage->page->slug . '/' . $subPage->slug;?>
                        <a class="block font-semibold text-ruby-900 dark:text-ruby-700" href="{{ $url }}" target="_blank">{{ $url }}</a>
                    </div>

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
                            <x-custom.select id="edit_page_id" class="" wire:model="subPage.page_id" :options="$pages" action="edit"/>
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


        {{-- Banner --}}
        <div class="mx-auto w-full">       
            <x-custom.breadcrumb>
                <x-slot name="sub_title">
                    Banner
                </x-slot>
            </x-custom.breadcrumb>

            <div class="text-azul-800 dark:text-ruby-100 mb-4">
                Esta é a {{ $num[$i] }} seção da página {{ $subPage->name }}.<br>
                Você pode editar o seu conteúdo e alterar a sua imagem.
            </div>

            <?php $i++; ?>

            @if($subPage->banner)
                @livewire('banner.edit', ['banner' => $subPage->banner])
            @else
                @livewire('banner.create', ['page' => $subPage])
            @endif
        </div>

        {{-- Texto --}}
        <div class="mx-auto w-full">       
            <x-custom.breadcrumb>
                <x-slot name="sub_title">
                    Resumo
                </x-slot>
            </x-custom.breadcrumb>

            <div class="text-azul-800 dark:text-ruby-100 mb-4">
                {{-- Esta é a {{ $num[$i] }} seção da página {{ $subPage->name }}.<br>
                Você pode editar o seu conteúdo. --}}
                Este é o resumo da página {{ $subPage->name }}, que será exibido na seção "Veja também", quando o mesmo for relacionado.
            </div>

            <?php //$i++; ?>

            @if($subPage->text)
                @livewire('text.edit', ['text' => $subPage->text])
            @else
                @livewire('text.create', ['page' => $subPage])
            @endif
        </div>

        {{-- Chamadas --}}
        @foreach ($subPage->calls as $call)
            <div class="mx-auto w-full">       
                <x-custom.breadcrumb>
                    <x-slot name="sub_title">
                        {{ strip_tags($call->title) }}
                    </x-slot>
                </x-custom.breadcrumb>

                <div class="text-azul-800 dark:text-ruby-100 mb-4">
                    <p>Esta é a {{ $num[$i] }} seção da página {{ $subPage->name }} com o nome que você customizou no campo "Título".</p>

                    @if ($call->id == 42)
                        <p class="mt-2">O conteúdo relacionado a essa seção é:</p>
                        <x-custom.component-button onclick="location.href='{{ route('partners') }}'" class="mt-1 mr-5" title="Parceiros" wire:loading.attr="disabled" />
                    @endif
                    
                </div>
                
                <?php $i++; ?>

                @livewire('call.edit', ['callx' => $call], key($call->id))
            </div>
        @endforeach

        


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
        $('#edit_page_id').select2({
            placeholder: 'Selecione uma página'
        });
        $('#edit_page_id').on('change', function (e) {
            let data = $(this).val();
            @this.set('subPage.page_id', data);               
        });
        window.livewire.on('clearPageId', () => {
            $("#edit_page_id").select2({
                placeholder: 'Selecione uma página'
            });
        });

        
    });

</script>

@endpush
