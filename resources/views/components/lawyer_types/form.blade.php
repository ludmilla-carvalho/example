<div class="">
    <x-custom.label for="title" value="Título" required />
    <x-custom.input id="title" type="text" class="" wire:model.deffer="lawyerType.title" />
    <x-custom.input-error for="lawyerType.title" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.lawyerType.title">
            (<span x-text="$wire.lawyerType.title.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="">
    <x-custom.label for="title_en" value="Título (en)" required />
    <x-custom.input id="title_en" type="text" class="" wire:model.deffer="lawyerType.title_en" />
    <x-custom.input-error for="lawyerType.title_en" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.lawyerType.title_en">
            (<span x-text="$wire.lawyerType.title_en.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="">
    <x-custom.label for="plural" value="Plural" required />
    <x-custom.input id="plural" type="text" class="" wire:model.deffer="lawyerType.plural" />
    <x-custom.input-error for="lawyerType.plural" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.lawyerType.plural">
            (<span x-text="$wire.lawyerType.plural.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="">
    <x-custom.label for="plural_en" value="Plural (en)" required />
    <x-custom.input id="plural_en" type="text" class="" wire:model.deffer="lawyerType.plural_en" />
    <x-custom.input-error for="lawyerType.plural_en" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.lawyerType.plural_en">
            (<span x-text="$wire.lawyerType.plural_en.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="">
    <x-custom.label for="feminine" value="Feminino" required />
    <x-custom.input id="feminine" type="text" class="" wire:model.deffer="lawyerType.feminine" />
    <x-custom.input-error for="lawyerType.feminine" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.lawyerType.feminine">
            (<span x-text="$wire.lawyerType.feminine.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="">
    <x-custom.label for="feminine_en" value="Feminino (en)" required />
    <x-custom.input id="feminine_en" type="text" class="" wire:model.deffer="lawyerType.feminine_en" />
    <x-custom.input-error for="lawyerType.feminine_en" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.lawyerType.feminine_en">
            (<span x-text="$wire.lawyerType.feminine_en.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>


<div class="col-span-2 text-xs text-right text-azul-900 dark:text-gray-400">
    * preenchimento obrigatório
</div>

        