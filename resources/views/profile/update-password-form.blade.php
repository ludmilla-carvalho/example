<x-form-section submit="updatePassword">
    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-custom.label for="current_password" value="Senha atual" />
            <x-custom.input id="current_password" type="password" class="block w-full mt-1" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-custom.input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-custom.label for="password" value="Nova senha" />
            <x-custom.input id="password" type="password" class="block w-full mt-1" wire:model.defer="state.password" autocomplete="new-password" />
            <x-custom.input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-custom.label for="password_confirmation" value="Confirme a nova senha" />
            <x-custom.input id="password_confirmation" type="password" class="block w-full mt-1" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-custom.input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-custom.button>
            {{ __('Save') }}
        </x-custom.button>
    </x-slot>
</x-form-section>