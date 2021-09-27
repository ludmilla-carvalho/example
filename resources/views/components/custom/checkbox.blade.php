@props(['disabled' => false, 'text' => '', 'tooltip' => false])

<label class="flex items-center dark:text-gray-400">
    <input {{ $disabled ? 'disabled' : '' }} type="checkbox" {!! $attributes->merge(['class' => 'text-azul-800 dark:text-ruby-500 dark:bg-gray-700  dark:border-gray-600 focus:border-azul-900 dark:focus:border-gray-500 focus:shadow-outline-none form-checkbox']) !!} />

    <span class="ml-2 mr-1 text-azul-900 dark:text-gray-400 font-semibold">
        {{ $text }}</span>
    </span>

    @if($tooltip != false)
        <x-custom.tooltip msg="{!! $tooltip !!}"/>
    @endif
</label>