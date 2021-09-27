<div class="">
    <x-custom.label for="title" value="Título" required />
    <x-custom.input id="title" type="text" class="" wire:model.deffer="term.title" />
    <x-custom.input-error for="term.title" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.term.title">
            (<span x-text="$wire.term.title.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="">
    <x-custom.label for="title_en" value="Título (en)" required />
    <x-custom.input id="title_en" type="text" class="" wire:model.deffer="term.title_en" />
    <x-custom.input-error for="term.title_en" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.term.title_en">
            (<span x-text="$wire.term.title_en.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="">
    <x-custom.label for="version" value="Versão" required />
    <x-custom.input id="version" type="text" class="" wire:model="term.version" />
    <x-custom.input-error for="term.version" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.term.version">
            (<span x-text="$wire.term.version.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="col-span-2">
    <x-custom.label for="text" value="Texto" required/>
    <x-custom.editor-simple list="true" link="true" id='term.text{{ $term->id }}' wire:model="term.text"></x-custom.editor-simple>
    <x-custom.input-error for="term.text" class="mt-2" />
</div>


<div class="col-span-2">
    <x-custom.label for="text_en" value="Texto (en)" required/>
    <x-custom.editor-simple list="true" link="true" id='term.text_en{{ $term->id }}' wire:model="term.text_en"></x-custom.editor-simple>
    <x-custom.input-error for="term.text_en" class="mt-2" />
</div>

<div class="col-span-2 text-xs text-right text-azul-900 dark:text-gray-400">
    * preenchimento obrigatório
</div>

        