<div class="">
    <x-custom.label for="title" value="Nome" required />
    <x-custom.input id="title" type="text" class="mb-2" wire:model.deffer="city.title" />
    <x-custom.input-error for="city.title" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.city.title">
            (<span x-text="$wire.city.title.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="">
    <x-custom.label for="title_en" value="Nome (en)" required />
    <x-custom.input id="title_en" type="text" class="mb-2" wire:model="city.title_en" />
    <x-custom.input-error for="city.title_en" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.city.title_en">
            (<span x-text="$wire.city.title_en.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="col-span-2 text-xs text-right text-azul-900 dark:text-gray-400">
    * preenchimento obrigatório
</div>

        