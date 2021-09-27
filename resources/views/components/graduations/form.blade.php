<div class="">
    <x-custom.label for="title" value="Título" required />
    <x-custom.input id="title" type="text" class="" wire:model.deffer="graduation.title" />
    <x-custom.input-error for="graduation.title" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.graduation.title">
            (<span x-text="$wire.graduation.title.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="">
    <x-custom.label for="title_en" value="Título (en)" required />
    <x-custom.input id="title_en" type="text" class="" wire:model="graduation.title_en" />
    <x-custom.input-error for="graduation.title_en" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.graduation.title_en">
            (<span x-text="$wire.graduation.title_en.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="col-span-2 text-xs text-right text-azul-900 dark:text-gray-400">
    * preenchimento obrigatório
</div>

        