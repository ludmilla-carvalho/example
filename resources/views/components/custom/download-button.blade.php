<button {{ $attributes->merge(['type' => 'button', 'class' => 'flex items-center justify-between px-4 py-2 mb-6 text-sm font-medium leading-5 transition-colors duration-150 border border-transparent rounded-lg focus:outline-none dark:border-gray-400 bg-azul-700 dark:bg-gray-500 active:bg-azul-800 hover:bg-azul-600 dark:active:bg-gray-700 dark:hover:bg-gray-600 text-white ease select-none']) }}>
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
    <span>{{ $title }}</span>
</button>


