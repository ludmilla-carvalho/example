<button {{ $attributes->merge(['type' => 'button', 'class' => 'flex items-center justify-between px-1 py-0.5 mb-1 text-xs font-medium leading-5 transition-colors duration-150 border border-transparent rounded-sm focus:outline-none border-azul-400 bg-azul-400 text-white ease select-none hover:bg-azul-500 hover:border-azul-500']) }}>
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
    </svg>
    <span>{{ $title }}</span>
</button>


