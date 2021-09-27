<div class="">
    <x-custom.label for="title" value="Título" required />
    <x-custom.input id="title" type="text" class="" wire:model.deffer="timeline.title" />
    <x-custom.input-error for="timeline.title" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.timeline.title">
            (<span x-text="$wire.timeline.title.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="">
    <x-custom.label for="title_en" value="Título (en)" required />
    <x-custom.input id="title_en" type="text" class="" wire:model.deffer="timeline.title_en" />
    <x-custom.input-error for="timeline.title_en" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.timeline.title_en">
            (<span x-text="$wire.timeline.title_en.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="col-span-2 lg:w-1/2 mb-2">
    <x-custom.label for="year" value="Ano" required />
    <x-custom.input id="year" type="number" class="" wire:model.deffer="timeline.year" />
    <x-custom.input-error for="timeline.year" class="mt-2" />
    {{-- <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.timeline.year">
            (<span x-text="$wire.timeline.year.length"></span> caracteres digitados</span>)
            </template>
    </span> --}}
</div>

<div class="col-span-2 lg:w-1/2 mb-2">
    <x-custom.label for="timeline.image" value="Imagem" required />
    @if ($image)
        <p class="text-azul-900 dark:text-gray-400 font-semibold text-sm">Preview:</p>
        <img src="{{ $image->temporaryUrl() }}" class="w-1/3 mb-2">
    @else
        @if (strlen($timeline->image) > 3)
            <img src="{{ asset('storage/timelines/' . $timeline->image) }}" class="w-1/3 mb-2">    
        @endif
    @endif
    <x-custom.input id="timeline.image{{ $iteration }}" type="file" class="" wire:model="image"/>
    <x-custom.input-error for="image" class="mt-2" />
    <span class="text-xs text-gray-500 block">Tamanho máximo: 2MB</span>
    <span class="text-xs text-gray-500 block">Formatos permitidos:png, jpg e gif</span>
    {{-- <span class="text-xs text-gray-500 block">Largura recomentada: 1920x575 px</span> --}}
    <div wire:loading wire:target="image" class="mt-2 text-green-900 font-bold">Carregando...</div>
</div>

<div class="col-span-2">
    <x-custom.label for="text" value="Texto" required/>
    <x-custom.editor-simple list="true" link="true" id='timeline.text{{ $timeline->id }}' wire:model="timeline.text"></x-custom.editor-simple>
    <x-custom.input-error for="timeline.text" class="mt-2" />
</div>


<div class="col-span-2">
    <x-custom.label for="text_en" value="Texto (en)" required/>
    <x-custom.editor-simple list="true" link="true" id='timeline.text_en{{ $timeline->id }}' wire:model="timeline.text_en"></x-custom.editor-simple>
    <x-custom.input-error for="timeline.text_en" class="mt-2" />
</div>

<div class="">
    <x-custom.checkbox id="publish" text="Publicado" tooltip="Indica se este conteúdo deve ou não aparecer na página <strong>O Escritório</strong>." wire:model.deffer="timeline.publish" />
    <x-custom.input-error for="timeline.publish" class="mt-2" />
</div>

<div class="text-xs text-right text-azul-900 dark:text-gray-400">
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

        