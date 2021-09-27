 <div x-data>
    <x-form-section submit="save">
        <x-slot name="form">

            <x-texts.form :text="$text"></x-texts.form>

        </x-slot>

        <x-slot name="actions">
            <x-custom.secondary-button wire:click="showItem({{ $text->id }})" wire:loading.attr="disabled">
                Cancelar
            </x-custom.secondary-button>

            <x-custom.button class="ml-2" wire:click="save" wire:loading.attr="disabled">
                Salvar
            </x-custom.button>
        </x-slot>
    </x-form-section>
 </div>