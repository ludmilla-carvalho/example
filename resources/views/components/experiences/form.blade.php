<div class="">
    <x-custom.label for="title" value="Título" required />
    <x-custom.input id="title" type="text" class="mb-2" wire:model.deffer="experience.title" />
    <x-custom.input-error for="experience.title" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.experience.title">
            (<span x-text="$wire.experience.title.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="">
    <x-custom.label for="title_en" value="Título (en)" required />
    <x-custom.input id="title_en" type="text" class="mb-2" wire:model="experience.title_en" />
    <x-custom.input-error for="experience.title_en" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.experience.title_en">
            (<span x-text="$wire.experience.title_en.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="col-span-2 text-xs text-right text-azul-900 dark:text-gray-400">
    * preenchimento obrigatório
</div>

        