@props(['value', 'required'])

<label {{ $attributes->merge(['class' => 'text-azul-900 dark:text-gray-400 font-semibold']) }}>
    @if (isset($required)) * @endif {{ $value ?? $slot }}: 
</label>