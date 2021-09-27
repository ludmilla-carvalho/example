<button {{ $attributes->merge(['type' => 'button', 'class' => 'px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-azul-700 dark:bg-gray-500 border border-transparent rounded-lg active:bg-azul-800 hover:bg-azul-600 dark:active:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none']) }}>
    {{ $slot }}
</button>


