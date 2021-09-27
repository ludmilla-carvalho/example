<button {{ $attributes->merge(['type' => 'submit', 'class' => 'font-medium leading-5 text-white transition-colors duration-150 bg-azul-900 dark:bg-ruby-600 border border-transparent rounded-md active:bg-azul-600 hover:bg-azul-800 dark:active:bg-ruby-500 dark:hover:bg-ruby-700 focus:outline-none']) }}>
    {{ $slot }}
</button>