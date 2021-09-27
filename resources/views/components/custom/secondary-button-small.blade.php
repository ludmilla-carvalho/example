<button {{ $attributes->merge(['type' => 'button', 'class' => 'font-medium leading-5 text-white transition-colors duration-150 bg-azul-700 dark:bg-gray-500 border border-transparent rounded-md active:bg-azul-800 hover:bg-azul-600 dark:active:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none']) }}>
    {{ $slot }}
</button>


