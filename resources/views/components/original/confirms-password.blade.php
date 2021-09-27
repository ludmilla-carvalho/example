@props(['title' => __('Confirm Password'), 'content' => __('For your security, please confirm your password to continue.'), 'button' => __('Confirm')])

@php
    $confirmableId = md5($attributes->wire('then'));
@endphp

<span
    {{ $attributes->wire('then') }}
    x-data
    x-ref="span"
    x-on:click="$wire.startConfirmingPassword('{{ $confirmableId }}')"
    x-on:password-confirmed.window="setTimeout(() => $event.detail.id === '{{ $confirmableId }}' && $refs.span.dispatchEvent(new CustomEvent('then', { bubbles: false })), 250);"
>
    {{ $slot }}
</span>

@once
<x-dialog-modal wire:model="confirmingPassword">
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    <x-slot name="content">
        {{ $content }}

        <div class="mt-4" x-data="{}" x-on:confirming-password.window="setTimeout(() => $refs.confirmable_password.focus(), 250)">
            <x-custom.input type="password" class="block w-3/4 mt-1" placeholder="Password"
                        x-ref="confirmable_password"
                        wire:model.defer="confirmablePassword"
                        wire:keydown.enter="confirmPassword" />

            <x-custom.input-error for="confirmable_password" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="footer">
        <x-custom.secondary-button wire:click="stopConfirmingPassword" wire:loading.attr="disabled">
            Nevermind
        </x-custom.secondary-button>

        <x-custom.button class="ml-2" wire:click="confirmPassword" wire:loading.attr="disabled">
            {{ $button }}
        </x-custom.button>
    </x-slot>
</x-dialog-modal>
@endonce
