<div class="col-span-2 lg:w-1/2 mb-2">
    <x-custom.label for="area.icon" value="Ícone" required />
    @if ($icon)
        <p class="text-azul-900 dark:text-gray-400 font-semibold text-sm">Preview:</p>
        <img src="{{ $icon->temporaryUrl() }}" class="w-10 mb-2">
    @else
        @if (strlen($area->icon) > 3)
            <img src="{{ url('storage/areas/' . $area->icon) }}" class="w-10 mb-2">    
        @endif
    @endif
    <x-custom.input id="area.icon{{ $iteration }}" type="file" class="" wire:model="icon"/>
    <x-custom.input-error for="icon" class="mt-2" />
    <span class="text-xs text-gray-500 block">Tamanho máximo: 1MB</span>
    <span class="text-xs text-gray-500 block">Formato permitido: apenas svg</span>
    <div wire:loading wire:target="icon" class="mt-2 text-green-900 font-bold">Carregando...</div>
</div>

<div class=" mb-2">
    <x-custom.label for="title" value="Título" required />
    <x-custom.input id="title" type="text" class="" wire:model.deffer="area.title" />
    <x-custom.input-error for="area.title" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.area.title">
            (<span x-text="$wire.area.title.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class=" mb-2">
    <x-custom.label for="title_en" value="Título (en)" required />
    <x-custom.input id="title_en" type="text" class="" wire:model="area.title_en" />
    <x-custom.input-error for="area.title_en" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.area.title_en">
            (<span x-text="$wire.area.title_en.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>


<div class="col-span-2 lg:w-1/2 mb-2">
    <x-custom.label for="area.image" value="Imagem" required />
    @if ($image)
        <p class="text-azul-900 dark:text-gray-400 font-semibold text-sm">Preview:</p>
        <img src="{{ $image->temporaryUrl() }}" class="w-1/4 mb-2">
    @else
        @if (strlen($area->image) > 3)
            <img src="{{ url('storage/areas/' . $area->image) }}" class="w-6/3 mb-2">    
        @endif
    @endif
    <x-custom.input id="area.image{{ $iteration }}" type="file" class="" wire:model="image"/>
    <x-custom.input-error for="image" class="mt-2" />
    <span class="text-xs text-gray-500 block">Tamanho máximo: 2MB</span>
    <span class="text-xs text-gray-500 block">Formatos permitidos:png, jpg e gif</span>
    <span class="text-xs text-gray-500 block">Largura recomentada: 1920px</span>
    <div wire:loading wire:target="image" class="mt-2 text-green-900 font-bold">Carregando...</div>
</div>

<div class="col-span-2">
    <x-custom.label for="text" value="Texto" />
    <x-custom.editor-simple list="true" link="true" id='area.text{{ $area->id }}' wire:model="area.text"></x-custom.editor-simple>
    <x-custom.input-error for="area.text" class="mt-2" />
</div>

<div class="col-span-2">
    <x-custom.label for="text_en" value="Texto (en)" />
    <x-custom.editor-simple  list="true" link="true" id='area.text_en{{ $area->id }}' wire:model="area.text_en"></x-custom.editor-simple>
    <x-custom.input-error for="area.text_en" class="mt-2" />
</div>

<div class="col-span-2">
    <x-custom.label for="sel_related" value="Áreas Relacionadas" required />
    <div wire:ignore>
        <x-custom.select id="{{ $action }}_sel_related" class="" wire:model="sel_related" :options="$related" multiple />
    </div>
    <x-custom.input-error for="sel_related" class="mt-2" />
</div>

<div class="col-span-2 text-xs text-right text-azul-900 dark:text-gray-400">
    * preenchimento obrigatório
</div>

@push('scripts')

<script>
    $(document).ready(function () {
        // Area
        $('#{{ $action }}_sel_related').select2({
            placeholder: 'Selecione uma ou mais áreas relacionadas'
        });
        $('#{{ $action }}_sel_related').on('change', function (e) {
            let data = $(this).val();
                @this.set('sel_related', data);
        });
        window.livewire.on('clearRelated', () => {
            $('#{{ $action }}_sel_related').select2({
                placeholder: 'Selecione uma ou mais áreas relacionadas'
            });
        });
    });

</script>

@endpush

        