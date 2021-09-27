<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center justify-center px-4 py-2 bg-ruby-900 dark:bg-ruby-900 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-ruby-700 dark:hover:bg-ruby-700 focus:outline-none  transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
