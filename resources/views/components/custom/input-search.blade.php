@props(['text', 'model'])

<div {{ $attributes->merge(['class' => '']) }}>
    <label class="block mt-4 text-sm">
        <div class="relative text-azul-800 dark:text-white">
            <x-custom.input id="search" type="text" class="block w-full mt-1" wire:model="{{ $model }}" placeholder="" />
            
            <div class="absolute inset-y-0 right-0 flex items-center mr-3 pointer-events-none">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <rect x="0" y="0" width="24" height="24" stroke="none"></rect>
                    <circle cx="10" cy="10" r="7"></circle>
                    <line x1="21" y1="21" x2="15" y2="15"></line>
                </svg>
            </div>
        </div>
        <p class="text-sm mx-1 text-azul-700 dark:text-gray-400">{{ $text }}</p>
    </label>
</div>
