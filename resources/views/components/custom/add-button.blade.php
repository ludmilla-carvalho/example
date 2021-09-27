<button {{ $attributes->merge(['type' => 'button', 'class' => 'flex items-center justify-between px-4 py-2 mb-6 text-sm font-medium leading-5 transition-colors duration-150 border border-transparent rounded-lg focus:outline-none border-green-800 bg-green-900 text-white ease select-none hover:bg-green-700']) }}>
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
    </svg>
    <span>{{ $title }}</span>
</button>


