<x-guest-layout title="Reset Password">
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-custom.label value="Email" />
                <x-custom.input class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <x-custom.label value="Password" />
                <x-custom.input class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-custom.label value="Confirm Password" />
                <x-custom.input class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-custom.button>
                    {{ __('Reset Password') }}
                </x-custom.button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
