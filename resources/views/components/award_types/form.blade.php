<div class="">
    <x-custom.label for="title" value="Título" required />
    <x-custom.input id="title" type="text" class="" wire:model.deffer="awardType.title" />
    <x-custom.input-error for="awardType.title" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.awardType.title">
            (<span x-text="$wire.awardType.title.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="col-span-2 lg:w-1/2 mb-2">
    <x-custom.label for="awardType.image" value="Imagem" required />
    @if ($image)
        <p class="text-azul-900 dark:text-gray-400 font-semibold text-sm">Preview:</p>
        <img src="{{ $image->temporaryUrl() }}" class="w-1/4 mb-2">
    @else
        @if (strlen($awardType->image) > 3)
            <img src="{{ url('storage/award_types/' . $awardType->image) }}" class="w-6/3 mb-2">    
        @endif
    @endif
    <x-custom.input id="awardType.image{{ $iteration }}" type="file" class="" wire:model="image"/>
    <x-custom.input-error for="image" class="mt-2" />
    <span class="text-xs text-gray-500 block">Tamanho máximo: 2MB</span>
    <span class="text-xs text-gray-500 block">Formatos permitidos:png, jpg e gif</span>
    <span class="text-xs text-gray-500 block">Largura recomentada: 1920px</span>
    <div wire:loading wire:target="image" class="mt-2 text-green-900 font-bold">Carregando...</div>
</div>

<div class="col-span-2 text-xs text-right text-azul-900 dark:text-gray-400">
    * preenchimento obrigatório
</div>

        