<?php
    //pasta onde a imagem será gravada
    if(strlen($this->banner->page_id) > 0){
        $folder = $banner->page_id;
    }else{
        $folder = 'sub/' . $banner->sub_page_id;
    }
?>

<div class="col-span-6 lg:w-1/2 mb-2">
    <x-custom.label for="banner.image" value="Imagem" required />
    @if ($image)
        <p class="text-azul-900 dark:text-gray-400 font-semibold text-sm">Preview:</p>
        <img src="{{ $image->temporaryUrl() }}" class="w-1/3 mb-2">
    @else
        @if (strlen($banner->image) > 3)
            <img src="{{ asset('storage/banners/' . $folder . '/' . $banner->image) }}" class="w-1/3 mb-2">    
        @endif
    @endif
    <x-custom.input id="banner.image{{ $iteration }}" type="file" class="" wire:model="image"/>
    <x-custom.input-error for="image" class="mt-2" />
    <span class="text-xs text-gray-500 block">Tamanho máximo: 2MB</span>
    <span class="text-xs text-gray-500 block">Formatos permitidos:png, jpg e gif</span>
    <span class="text-xs text-gray-500 block">Tamanho recomendado: 1920x575 px</span>
    <div wire:loading wire:target="image" class="mt-2 text-green-900 font-bold">Carregando...</div>
</div>

<div class="col-span-6 lg:w-1/2 mb-2">
    <x-custom.label for="banner.image_mobile" value="Imagem Mobile" required />
    @if ($imageMobile)
        <p class="text-azul-900 dark:text-gray-400 font-semibold text-sm">Preview:</p>
        <img src="{{ $imageMobile->temporaryUrl() }}" class="w-1/3 mb-2">
    @else
        @if (strlen($banner->image_mobile) > 3)
            <img src="{{ asset('storage/banners/' . $folder .'/'. $banner->image_mobile) }}" class="w-1/3 mb-2">    
        @endif
    @endif
    <x-custom.input id="banner.image_mobile{{ $iteration }}" type="file" class="" wire:model="imageMobile"/>
    <x-custom.input-error for="imageMobile" class="mt-2" />
    <span class="text-xs text-gray-500 block">Tamanho máximo: 2MB</span>
    <span class="text-xs text-gray-500 block">Formatos permitidos:png, jpg e gif</span>
    <span class="text-xs text-gray-500 block">Tamanho recomendado: 375x700 px</span>
    <div wire:loading wire:target="imageMobile" class="mt-2 text-green-900 font-bold">Carregando...</div>
</div>


<div class="col-span-6 lg:col-span-3 mb-2">
    <x-custom.label for="title" value="Título" required />
    <x-custom.input id='banner.title' class=" disabled"  wire:model="banner.title"/>
    <x-custom.input-error for="banner.title" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.banner.title">
            (<span x-text="$wire.banner.title.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="col-span-6 lg:col-span-3 mb-2">
    <x-custom.label for="title_en" value="Título (en)" required />
    <x-custom.input id='banner.title_en' class="" wire:model="banner.title_en" />
    <x-custom.input-error for="banner.title_en" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.banner.title_en">
            (<span x-text="$wire.banner.title_en.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>


<div class="col-span-6 lg:col-span-3 mb-2">
    <x-custom.label for="sub_title" value="Sub título" />
    {{-- <x-custom.editor-simple id='banner.sub_title{{ $banner->id }}' wire:model="banner.sub_title"></x-custom.editor-simple> --}}
    <x-custom.textarea id="sub_title" rows="3" class="" wire:model.deffer="banner.sub_title" />
    <x-custom.input-error for="banner.sub_title" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 180 caracteres
        <template x-if="$wire.banner.sub_title">
            (<span x-text="$wire.banner.sub_title.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="col-span-6 lg:col-span-3 mb-2">
    <x-custom.label for="sub_title_en" value="Sub título (en)" />
    {{-- <x-custom.editor-simple id='banner.sub_title_en{{ $banner->id }}' wire:model="banner.sub_title_en"></x-custom.editor-simple> --}}
    <x-custom.textarea id="sub_title_en" rows="3" class="" wire:model.deffer="banner.sub_title_en" />
    <x-custom.input-error for="banner.sub_title_en" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 180 caracteres
        <template x-if="$wire.banner.sub_title_en">
            (<span x-text="$wire.banner.sub_title_en.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

 
<div class="col-span-6 lg:col-span-3 mb-2">
    <x-custom.checkbox id="publish" text="Publicado" tooltip="Indica o banner deve ou não aparecer na página." wire:model.deffer="banner.publish" />
    <x-custom.input-error for="banner.publish" class="mt-2" />
</div>

<div class="col-span-6 lg:col-span-3 text-right text-xs text-azul-900 dark:text-gray-400">
    * preenchimento obrigatório
</div>

@if ($errors->any())
    <div class="col-span-6 lg:col-span-3 m-0">
        <p class="font-semibold text-sm text-ruby-800">Corrija os erros no formulário</p>
    </div>
@endif


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