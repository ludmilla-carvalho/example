{{-- 
    SVG
    https://heroicons.dev/
--}}

@props(['link' => null, 'route' => null, 'title' => null])


{!! request()->is($route) ? '<span class="absolute inset-y-0 left-0 w-1 bg-azul-900 dark:bg-ruby-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-md font-semibold transition-colors duration-150 {!! request()->is($route) ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}" href="{{ $link }}">
                {{ $svg }}
                <span class="ml-2">{{ $title }}</span>
            </a>