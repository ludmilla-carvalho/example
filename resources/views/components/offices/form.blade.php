<div class="">
    <x-custom.label for="title" value="Título" required />
    <x-custom.input id="title" type="text" class="" wire:model.deffer="office.title" />
    <x-custom.input-error for="office.title" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.office.title">
            (<span x-text="$wire.office.title.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="">
    <x-custom.label for="title_en" value="Título (en)" required />
    <x-custom.input id="title_en" type="text" class="" wire:model="office.title_en" />
    <x-custom.input-error for="office.title_en" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.office.title_en">
            (<span x-text="$wire.office.title_en.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>


<div class="col-span-2 lg:w-1/2 mb-2">
    <x-custom.label for="office.image" value="Imagem" required />
    @if ($image)
        <p class="text-azul-900 dark:text-gray-400 font-semibold text-sm">Preview:</p>
        <img src="{{ $image->temporaryUrl() }}" class="w-1/2 mb-2">
    @else
        @if (strlen($office->image) > 3)
            <img src="{{ url('storage/offices/' . $office->image) }}" class="w-1/2 mb-2">    
        @endif
    @endif
    <x-custom.input id="office.image{{ $iteration }}" type="file" class="" wire:model="image"/>
    <x-custom.input-error for="image" class="mt-2" />
    <span class="text-xs text-gray-500 block">Tamanho máximo: 2MB</span>
    <span class="text-xs text-gray-500 block">Formatos permitidos:png, jpg e gif</span>
    <span class="text-xs text-gray-500 block">Largura recomentada: 1920px</span>
    <div wire:loading wire:target="image" class="mt-2 text-green-900 font-bold">Carregando...</div>
</div>


<div class="col-span-2">
    <x-custom.label for="address" value="Endereço" required />
    <x-custom.editor-simple id='office.text{{ $office->id }}' wire:model="office.address"></x-custom.editor-simple>
    <x-custom.input-error for="office.address" class="mt-2" />
</div>

<div class="lg:col-span-2 lg:w-1/2 mb-2">
    <x-custom.label for="order" value="Ordem" required />
    <x-custom.tooltip msg="Esta é a ordem que este destaque aparece na página <strong> O Escritório</strong> e no <strong>Footer</strong>.<br>Ex: ordem 1 aparece em primeiro lugar."/>
    <x-custom.input id="order" type="number" class="" wire:model="office.order" min="0" step="1"/>
    <x-custom.input-error for="office.order" class="mt-2" />
</div>



<div class="lg:col-span-2 lg:w-1/2 mb-2">
    <x-custom.checkbox id="publish" text="Publicado" tooltip="Indica se este conteúdo deve ou não aparecer na página <strong> O Escritório</strong> e no <strong>Footer</strong>." wire:model.deffer="office.publish" />
    <x-custom.input-error for="office.publish" class="mt-2" />
</div>

<div class="col-span-2 text-xs text-right text-azul-900 dark:text-gray-400">
    * preenchimento obrigatório
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

        