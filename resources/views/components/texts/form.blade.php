<div class="col-span-6 lg:col-span-3 mb-2">
    <x-custom.label for="title" value="Título" required />
    <x-custom.input id='text.title' class=" disabled"  wire:model="text.title"/>
    <x-custom.input-error for="text.title" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.text.title">
            (<span x-text="$wire.text.title.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="col-span-6 lg:col-span-3 mb-2">
    <x-custom.label for="title_en" value="Título (en)" required />
    <x-custom.input id='text.title_en' class="" wire:model="text.title_en" />
    <x-custom.input-error for="text.title_en" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.text.title_en">
            (<span x-text="$wire.text.title_en.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>


<div class="col-span-6 lg:col-span-3 mb-2">
    <x-custom.label for="text" value="Texto" />
    <x-custom.editor-simple id='text.text{{ $text->id }}' wire:model="text.text"></x-custom.editor-simple>
    {{-- <x-custom.textarea id="text" rows="6" class="" wire:model.deffer="text.text" /> --}}
    <x-custom.input-error for="text.text" class="mt-2" />
</div>

<div class="col-span-6 lg:col-span-3 mb-2">
    <x-custom.label for="text_en" value="Texto (en)" />
    <x-custom.editor-simple id='text.text_en{{ $text->id }}' wire:model="text.text_en"></x-custom.editor-simple>
    {{-- <x-custom.textarea id="text_en" rows="6" class="" wire:model.deffer="text.text_en" /> --}}
    <x-custom.input-error for="text.text_en" class="mt-2" />
</div>

<div class="col-span-6 lg:col-span-3 mb-2">
    <x-custom.checkbox id="publish" text="Publicado" tooltip="Indica se este conteúdo deve ou não aparecer na página e nos links relacionados a ela." wire:model.deffer="text.publish" />
    <x-custom.input-error for="text.publish" class="mt-2" />
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