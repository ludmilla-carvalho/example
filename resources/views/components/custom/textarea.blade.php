@props(['disabled' => false, 'rows' => 4])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'block w-full mt-1 dark:border-gray-600 dark:bg-gray-700 dark:focus:border-gray-500 focus:border-azul-400 focus:outline-none dark:text-gray-300 form-input']) !!} rows="{{ $rows }}"></textarea>
