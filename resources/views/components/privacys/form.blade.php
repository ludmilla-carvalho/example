<div class="">
    <x-custom.label for="title" value="Título" required />
    <x-custom.input id="title" type="text" class="" wire:model.deffer="privacy.title" />
    <x-custom.input-error for="privacy.title" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.privacy.title">
            (<span x-text="$wire.privacy.title.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="">
    <x-custom.label for="title_en" value="Título (en)" required />
    <x-custom.input id="title_en" type="text" class="" wire:model.deffer="privacy.title_en" />
    <x-custom.input-error for="privacy.title_en" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.privacy.title_en">
            (<span x-text="$wire.privacy.title_en.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="">
    <x-custom.label for="version" value="Versão" required />
    <x-custom.input id="version" type="text" class="" wire:model="privacy.version" />
    <x-custom.input-error for="privacy.version" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.privacy.version">
            (<span x-text="$wire.privacy.version.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="col-span-2">
    <x-custom.label for="text" value="Texto" required/>
    <x-custom.editor-simple list="true" link="true" id='privacy.text{{ $privacy->id }}' wire:model="privacy.text"></x-custom.editor-simple>
    <x-custom.input-error for="privacy.text" class="mt-2" />
</div>


<div class="col-span-2">
    <x-custom.label for="text_en" value="Texto (en)" required/>
    <x-custom.editor-simple list="true" link="true" id='privacy.text_en{{ $privacy->id }}' wire:model="privacy.text_en"></x-custom.editor-simple>
    <x-custom.input-error for="privacy.text_en" class="mt-2" />
</div>

<div class="col-span-2 text-xs text-right text-azul-900 dark:text-gray-400">
    * preenchimento obrigatório
</div>

        