{{-- https://flatpickr.js.org/examples/ --}}

@props(['disabled' => false])

@php
    $options = [
        'enableTime' => true,
        'noCalendar' => true,
        'dateFormat' => "H:i",
        'time_24hr' => true,
        //'altInput' => true,
        // 'defaultDate' => null,
        'locale' => 'pt',
    ];
@endphp

<div wire:ignore>
    <input
        x-data="{value: @entangle($attributes->wire('model')), instance: undefined}"
        x-init="() => {
                $watch('value', value => instance.setDate(value, true));
                instance = flatpickr($refs.input, {{ json_encode((object)$options) }});
            }"
        x-ref="input"
        x-bind:value="value"
        type="text"
        {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block w-full mt-1 dark:border-gray-600 dark:bg-gray-700 dark:focus:border-gray-500 focus:border-azul-400 focus:outline-none dark:text-gray-300 form-input']) !!}
    />
</div>