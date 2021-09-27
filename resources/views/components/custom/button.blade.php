<button {{ $attributes->merge(['type' => 'submit', 'class' => 'px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-azul-900 dark:bg-ruby-600 border border-transparent rounded-lg active:bg-azul-600 hover:bg-azul-800 dark:active:bg-ruby-500 dark:hover:bg-ruby-700 focus:outline-none']) }}>
    {{ $slot }}
</button>