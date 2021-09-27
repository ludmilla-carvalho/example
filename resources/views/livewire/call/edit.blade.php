<?php
    //pasta onde a imagem será gravada
    if(strlen($callx->page_id) > 0){
        $folder = $callx->page_id;
    }else{
        $folder = 'sub/' . $callx->sub_page_id;
    }
?>

<div x-data>
<x-form-section submit="save">
    <x-slot name="form">
        
        <div class="col-span-6 lg:col-span-3">
            <x-custom.label for="title" value="Título" required />
            <x-custom.input id='callx.title' class=" disabled"  wire:model="callx.title"/>
            <x-custom.input-error for="callx.title" class="mt-2" />
            <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
                <template x-if="$wire.callx.title">
                    (<span x-text="$wire.callx.title.length"></span> caracteres digitados</span>)
                    </template>
            </span>
        </div>
        
        <div class="col-span-6 lg:col-span-3">
            <x-custom.label for="title_en" value="Título (en)" required />
            <x-custom.input id='callx.title_en' class="" wire:model="callx.title_en" />
            <x-custom.input-error for="callx.title_en" class="mt-2" />
            <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
                <template x-if="$wire.callx.title_en">
                    (<span x-text="$wire.callx.title_en.length"></span> caracteres digitados</span>)
                    </template>
            </span>
        </div>

        @if ($callx->id != 2 && $callx->id != 4 && $callx->id != 6 && $callx->id != 11  && $callx->id != 12 && $callx->id != 16 && $callx->id != 42)
            <div class="col-span-6 lg:w-1/3">
                <x-custom.label for="callx.image" value="Imagem" required />
                @if ($image)
                    <p class="text-azul-900 dark:text-gray-400 font-semibold text-sm">Preview:</p>
                    <img src="{{ $image->temporaryUrl() }}" class="w-1/3 mb-2">
                @else
                    @if (strlen($callx->image) > 3)
                        <img src="{{ url('storage/calls/' . $folder . '/' . $callx->image) }}" class="w-1/3 mb-2">    
                    @endif
                @endif
                <x-custom.input id="callx.image{{ $iteration }}" type="file" class="" wire:model="image"/>
                <x-custom.input-error for="image" class="mt-2" />
                <span class="text-xs text-gray-500 block">Tamanho máximo: 2MB</span>
                <span class="text-xs text-gray-500 block">Formatos permitidos:png, jpg e gif</span>
                <span class="text-xs text-gray-500 block">Tamanho recomendado: <?php if($callx->id == 7) echo '942x946'; elseif($callx->id == 8) echo '1590x584'; else echo '1590x632';?>px</span>
                <div wire:loading wire:target="image" class="mt-2 text-green-900 font-bold">Carregando...</div>
            </div>
        @endif
            
        @if ($callx->id != 3 && $callx->id != 4  && $callx->id != 12 && $callx->id != 42)
            <div class="col-span-6 lg:col-span-3">
                <x-custom.label for="text" value="Texto" />
                <x-custom.editor-simple list="true" id='area.text{{ $callx->id }}' wire:model="callx.text"></x-custom.editor-simple>
                {{-- <x-custom.textarea id="text" rows="3" class="" wire:model.deffer="callx.text" /> --}}
                <x-custom.input-error for="callx.text" class="mt-2" />
                {{-- <span class="text-xs text-gray-500 block">Recomenda-se até 180 caracteres
                    <template x-if="$wire.callx.text">
                        (<span x-text="$wire.callx.text.length"></span> caracteres digitados</span>)
                    </template>
                </span> --}}
            </div>
            
            <div class="col-span-6 lg:col-span-3">
                <x-custom.label for="text_en" value="Texto (en)" />
                <x-custom.editor-simple list="true" id='area.text_en{{ $callx->id }}' wire:model="callx.text_en"></x-custom.editor-simple>
                {{-- <x-custom.textarea id="text_en" rows="3" class="" wire:model.deffer="callx.text_en" /> --}}
                <x-custom.input-error for="callx.text_en" class="mt-2" />
                {{-- <span class="text-xs text-gray-500 block">Recomenda-se até 180 caracteres
                    <template x-if="$wire.callx.text_en">
                        (<span x-text="$wire.callx.text_en.length"></span> caracteres digitados</span>)
                    </template>
                </span> --}}
            </div>
        @endif
            
            
        @if ($callx->id != 7 && $callx->id != 9 && $callx->id != 10 && $callx->id != 11  && $callx->id != 12 && $callx->id != 19 && $callx->id != 20 && $callx->id != 21 && $callx->id != 22 && $callx->id != 23 && $callx->id != 24 && $callx->id != 25 && $callx->id != 26 && $callx->id != 27 && $callx->id != 28 && $callx->id != 29 && $callx->id != 30 && $callx->id != 31 && $callx->id != 32 && $callx->id != 33 && $callx->id != 34 && $callx->id != 35 && $callx->id != 36 && $callx->id != 37 && $callx->id != 39 && $callx->id != 41 && $callx->id != 42 && $callx->id != 43 && $callx->id != 47 && $callx->id != 48 && $callx->id != 49 && $callx->id != 50 && $callx->id != 51 && $callx->id != 52 && $callx->id != 53 && $callx->id != 54 && $callx->id != 55 && $callx->id != 56 && $callx->id != 57 && $callx->id != 58 && $callx->id != 59 && $callx->id != 60 && $callx->id != 61)
            <div class="col-span-6 lg:col-span-6">
                <x-custom.label for="link" value="Link" />
                <x-custom.tooltip msg="Este é link da seção, seu preenchimento é opcional."/>
                <x-custom.input id="link" type="text" class="" wire:model="callx.link" />
                <x-custom.input-error for="callx.link" class="mt-2" />
            </div>
        @endif
        
        
        @if ($callx->id != 9 && $callx->id != 10 && $callx->id != 11  && $callx->id != 12 && $callx->id != 19 && $callx->id != 20 && $callx->id != 21 && $callx->id != 22 && $callx->id != 23 && $callx->id != 24 && $callx->id != 25 && $callx->id != 26 && $callx->id != 27 && $callx->id != 28 && $callx->id != 29 && $callx->id != 30 && $callx->id != 31 && $callx->id != 32 && $callx->id != 33 && $callx->id != 34 && $callx->id != 35 && $callx->id != 36 && $callx->id != 37 && $callx->id != 39 && $callx->id != 41 && $callx->id != 42 && $callx->id != 43 && $callx->id != 47 && $callx->id != 48 && $callx->id != 49 && $callx->id != 50 && $callx->id != 51 && $callx->id != 52 && $callx->id != 53 && $callx->id != 54 && $callx->id != 55 && $callx->id != 56 && $callx->id != 57 && $callx->id != 58 && $callx->id != 59 && $callx->id != 60 && $callx->id != 61)
            <div class="col-span-6 lg:col-span-3">
                <x-custom.label for="text_link" value="Texto do link" />
                <x-custom.tooltip msg="Este é texto do link da seção, seu preenchimento é opcional."/>
                <x-custom.input id="text_link" type="text" class="" wire:model="callx.text_link" />
                <x-custom.input-error for="callx.text_link" class="mt-2" />
                <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
                    <template x-if="$wire.callx.text_link">
                        (<span x-text="$wire.callx.text_link.length"></span> caracteres digitados</span>)
                        </template>
                </span>
            </div>
            
            <div class="col-span-6 lg:col-span-3">
                <x-custom.label for="text_link_en" value="Texto do link (en)" />
                <x-custom.input id="text_link_en" type="text" class="" wire:model="callx.text_link_en" />
                <x-custom.input-error for="callx.text_link_en" class="mt-2" />
                <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
                    <template x-if="$wire.callx.text_link_en">
                        (<span x-text="$wire.callx.text_link_en.length"></span> caracteres digitados</span>)
                        </template>
                </span>
            </div>
        @endif

        @if ($callx->id == 12)    
            <div class="col-span-6">
                <x-custom.label for="embed" value="Embed" />
                <x-custom.tooltip msg="Este é o código fornecido para a imagem 360."/>
                <x-custom.textarea id="embed" rows="3" class="" wire:model.deffer="callx.embed" />
                <x-custom.input-error for="callx.embed" class="mt-2" />
            </div>
        @endif
    
        <div class="col-span-6 lg:col-span-3">
            <x-custom.checkbox id="publish" text="Publicado" text="Publicado" tooltip="Indica se este conteúdo deve ou não aparecer no site." wire:model.deffer="callx.publish" />
            <x-custom.input-error for="callx.publish" class="mt-2" />
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
        <x-custom.secondary-button wire:click="showItem({{ $callx->id }})" wire:loading.attr="disabled">
            Cancelar
        </x-custom.secondary-button>

        <x-custom.button class="ml-2" wire:click="save" wire:loading.attr="disabled">
            Salvar
        </x-custom.button>
    </x-slot>
</x-form-section>
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