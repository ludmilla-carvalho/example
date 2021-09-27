{{-- 
    SVG
    https://heroicons.dev/
--}}

@props(['link' => null, 'svg' => null])

@if ($link != null)
    <a href="{{ $link }}">
@endif

    @if (isset($title))
        
        <h2 class="my-6 text-2xl font-semibold text-azul-900 dark:text-ruby-600 @if ($link != null)hover:text-azul-600 dark:hover:text-ruby-400 hover:underline @endif transition-colors duration-150">
            {{ $title }}
        </h2>
        
    @endif
    

@if ($link != null)
    </a>
@endif

@if (isset($sub_title))
    <div class="inline-flex items-center text-azul-800 dark:text-ruby-400 mb-4">
        @if ($svg != null)
            <svg class="w-6 h-6 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $svg }}"></path></svg>
        @endif 
        <h4 class="text-xl font-semibold">
            {{ $sub_title }}
        </h4>
    </div>
@endif