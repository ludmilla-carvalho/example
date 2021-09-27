{{-- Ícones https://heroicons.dev/ --}}

<div class="py-4 text-gray-500 dark:text-gray-400">
    <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="{{route('pages','home')}}">
        <template x-if="dark">
            <img class="mx-auto" width="200px" alt="{{ config('app.name') }}" src="{{ asset('img/logo_branco.svg') }}" />
        </template>
        <template x-if="!dark">
            <img class="mx-auto" width="200px" alt="{{ config('app.name') }}" src="{{ asset('img/logo_azul.svg') }}" />
        </template>
    </a>

    <ul class="mt-6">

        {{-- Páginas --}}
        <li class="relative px-6 py-3" x-data="{ 
            isPageMenuOpen: {!! request()->is('pages/*') || request()->is('subpages/*') ? 'true' : 'false'!!},
            togglePageMenu() {
                this.isPageMenuOpen = !this.isPageMenuOpen
            }
        }">
            {!! request()->is('pages/*')  || request()->is('subpages/*')  ? '<span class="absolute inset-y-0 left-0 w-1 bg-azul-900 dark:bg-ruby-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}

            <button class="inline-flex items-center w-full text-md font-semibold transition-colors duration-150 {!! request()->is('pages/*')  || request()->is('subpages/*') ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}" @click="togglePageMenu" aria-haspopup="true">
                <span class="inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-window-dock" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 5H1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5zm0-1H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v1zm1-1a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3z"/>
                        <path d="M3 11.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm4 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm4 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                      </svg>
                </span>
                <span class="ml-2">Páginas</span>
                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>

            <template x-if="isPageMenuOpen">
            <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300" x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0" class="p-2 mt-2 xspace-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">
                {{-- Home --}}
                {{-- <li class="px-2 py-1 transition-colors duration-150 {!! request()->is('pages/home') ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}">
                <a class="w-full" href="{{route('pages', 'home')}}">Home</a>
                </li> --}}
                {{-- O Escritório --}}
                @foreach ($pages_menu as $page)
                    <li class="px-1.5 py-1 transition-colors duration-150 {!! request()->is('pages/' . $page->slug) ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}">
                        <a class="w-full"  href="{{route('pages', $page->slug)}}">{{ $page->name }}</a>

                        @if(count($page->subpages) > 0)
                        <ul class="subpages">
                            @foreach ($page->subpages as $sub)
                            <li class="px-1.5 pb-1 transition-colors duration-150 {!! request()->is('subpages/' . $sub->slug) ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}">
                                <a class="w-full" href="{{route('subpages', $sub->slug)}}">{{ $sub->name }}</a>
                            <li>
                            @endforeach

                        </ul>
                        @endif
                    </li>
                @endforeach
                <li class="px-1 py-1 transition-colors duration-150 {!! request()->is('pages/add') ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}">
                    <a class="inline-flex items-center w-full" href="{{route('pages.add')}}">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                        Adicionar Página</a>
                </li>
                <li class="px-1.5 py-1 transition-colors duration-150 {!! request()->is('subpages/add') ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}">
                    <a class="inline-flex items-center w-full" href="{{route('subpages.add')}}">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                        Adicionar Sub Página</a>
                </li>
                
            </ul>
            </template>    
        </li>

        {{-- Conteúdo --}}
        <li class="relative px-6 py-3" x-data="{ 
            isComponentsMenuOpen: {!! request()->is('lawyers') || request()->is('areas') || request()->is('offices') || request()->is('partners') || request()->is('timeline') || request()->is('events') || request()->is('speakers') ? 'true' : 'false'!!},
            toggleComponentsMenu() {
                this.isComponentsMenuOpen = !this.isComponentsMenuOpen
            }
        }">
            
            {!! request()->is('lawyers') || request()->is('areas') || request()->is('offices') || request()->is('partners') || request()->is('timeline') || request()->is('events') || request()->is('speakers') ? '<span class="absolute inset-y-0 left-0 w-1 bg-azul-900 dark:bg-ruby-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}

            <button class="inline-flex items-center w-full text-md font-semibold transition-colors duration-150 {!! request()->is('lawyers') || request()->is('areas')|| request()->is('offices') || request()->is('partners') || request()->is('timeline') || request()->is('events') || request()->is('speakers') ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}" @click="toggleComponentsMenu" aria-haspopup="true">
                <span class="inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid" viewBox="0 0 16 16">
                        <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
                      </svg>
                </span>
                <span class="ml-2">Conteúdo</span>
                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>

            <template x-if="isComponentsMenuOpen">
            <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300" x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0" class="p-2 mt-2 xspace-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">
                {{-- Advogados --}}
                <li class="px-1.5 py-1 transition-colors duration-150 {!! request()->is('lawyers') ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}">
                    <a class="w-full" href="{{route('lawyers')}}">Advogados</a>
                </li>
                {{-- Áreas de Atuação --}}
                <li class="px-1.5 py-1 transition-colors duration-150 {!! request()->is('areas') ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}">
                    <a class="w-full" href="{{route('areas')}}">Áreas de Atuação</a>
                </li>
                {{-- Escritórios --}}
                <li class="px-1.5 py-1 transition-colors duration-150 {!! request()->is('offices') ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}">
                    <a class="w-full" href="{{route('offices')}}">Escritórios</a>
                </li>
                {{-- Eventos --}}
                <li class="px-1.5 py-1 transition-colors duration-150 {!! request()->is('events') ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}">
                    <a class="w-full" href="{{route('events')}}">Eventos</a>
                </li>
                {{-- Linha do Tempo --}}
                <li class="px-1.5 py-1 transition-colors duration-150 {!! request()->is('timeline') ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}">
                    <a class="w-full" href="{{route('timeline')}}">Linha do Tempo</a>
                </li>
                {{-- Palestrantes --}}
                <li class="px-1.5 py-1 transition-colors duration-150 {!! request()->is('speakers') ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}">
                    <a class="w-full" href="{{route('speakers')}}">Palestrantes</a>
                </li>
                {{-- Parceiros --}}
                <li class="px-1.5 py-1 transition-colors duration-150 {!! request()->is('partners') ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}">
                    <a class="w-full" href="{{route('partners')}}">Parceiros</a>
                </li>
                
                {{-- Reconhecimentos do escritório --}}
                {{-- <li class="px-1.5 py-1 transition-colors duration-150 {!! request()->is('offices') ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}">
                    <a class="w-full" href="{{route('offices')}}">Reconhecimentos do escritório</a>
                </li> --}}
                
            </ul>
            </template>    
        </li>

        {{-- Informações Complementares --}}
        <li class="relative px-6 py-3" x-data="{ 
            isAttributesMenuOpen: {!! request()->is('cities') || request()->is('experiences') || request()->is('graduations') || request()->is('languages') || request()->is('award_types')|| request()->is('awards')  || request()->is('lawyer_types') || request()->is('lawyer_subtypes') ? 'true' : 'false'!!},
            toggleAttributesMenu() {
                this.isAttributesMenuOpen = !this.isAttributesMenuOpen
            }
        }">
            
            {!! request()->is('cities') || request()->is('experiences') || request()->is('graduations') || request()->is('languages') || request()->is('award_types')|| request()->is('awards')  || request()->is('lawyer_types') || request()->is('lawyer_subtypes')? '<span class="absolute inset-y-0 left-0 w-1 bg-azul-900 dark:bg-ruby-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}

            <button class="inline-flex items-center w-full text-md font-semibold transition-colors duration-150 {!! request()->is('cities') || request()->is('experiences') || request()->is('graduations') || request()->is('languages') || request()->is('award_types')|| request()->is('awards') || request()->is('lawyer_types') || request()->is('lawyer_subtypes') ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}" @click="toggleAttributesMenu" aria-haspopup="true">
                <span class="inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                        <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                        <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                    </svg>
                    <span class="ml-2">Inf. Complementares</span>
                </span>
                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>

            <template x-if="isAttributesMenuOpen">
            <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300" x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0" class="p-2 mt-2 xspace-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">
                {{-- Categoria (Advogados) --}}
                <li class="px-1.5 py-1 transition-colors duration-150 {!! request()->is('lawyer_types') ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}">
                    <a class="w-full" href="{{route('lawyer_types')}}">Categoria (Advogados)</a>
                </li>
                {{-- Subcategoria (Advogados) --}}
                <li class="px-1.5 py-1 transition-colors duration-150 {!! request()->is('lawyer_subtypes') ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}">
                    <a class="w-full" href="{{route('lawyer_subtypes')}}">Subcategoria (Advogados)</a>
                </li>
                {{-- Cidades --}}
                <li class="px-1.5 py-1 transition-colors duration-150 {!! request()->is('cities') ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}">
                <a class="w-full" href="{{route('cities')}}">Cidades</a>
                </li>
                {{-- Experiência Internacional --}}
                <li class="px-1.5 py-1 transition-colors duration-150 {!! request()->is('experiences') ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}">
                    <a class="w-full" href="{{route('experiences')}}">Experiência Internacional</a>
                </li>
                {{-- Formação Acadêmica --}}
                <li class="px-1.5 py-1 transition-colors duration-150 {!! request()->is('graduations') ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}">
                    <a class="w-full" href="{{route('graduations')}}">Formação Acadêmica</a>
                </li>
                {{-- idiomas --}}
                <li class="px-1.5 py-1 transition-colors duration-150 {!! request()->is('languages') ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}">
                    <a class="w-full" href="{{route('languages')}}">Idiomas</a>
                </li>
                {{-- Reconhecimentos --}}
                <li class="px-1.5 py-1 transition-colors duration-150 {!! request()->is('awards') ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}">
                    <a class="w-full" href="{{route('awards')}}">Reconhecimentos</a>
                </li>
                {{-- Tipos de Reconhecimento --}}
                <li class="px-1.5 py-1 transition-colors duration-150 {!! request()->is('award_types') ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}">
                    <a class="w-full" href="{{route('award_types')}}">Tipos de Reconhecimento</a>
                </li>
                
            </ul>
            </template>   
        </li>

        {{-- LGPD --}}
        <li class="relative px-6 py-3" x-data="{ 
            isLgpdMenuOpen: {!! request()->is('privacy') || request()->is('privacy/*') || request()->is('privacy_faq') || request()->is('terms') ? 'true' : 'false'!!},
            toggleLgpdMenu() {
                this.isLgpdMenuOpen = !this.isLgpdMenuOpen
            }
        }">
            
            {!! request()->is('terms') || request()->is('privacy') || request()->is('privacy/*') || request()->is('privacy_faq') ? '<span class="absolute inset-y-0 left-0 w-1 bg-azul-900 dark:bg-ruby-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}

            <button class="inline-flex items-center w-full text-md font-semibold transition-colors duration-150 {!! request()->is('terms') ||request()->is('privacy') ||  request()->is('privacy/*') ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}" @click="toggleLgpdMenu" aria-haspopup="true">
                <span class="inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-shield-plus" viewBox="0 0 16 16">
                        <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
                        <path d="M8 4.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V9a.5.5 0 0 1-1 0V7.5H6a.5.5 0 0 1 0-1h1.5V5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                </span>
                <span class="ml-2">LGPD</span>
                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>

            <template x-if="isLgpdMenuOpen">
            <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300" x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0" class="p-2 mt-2 xspace-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">
                {{-- FAQ --}}
                <li class="px-1.5 py-1 transition-colors duration-150 {!! request()->is('privacy_faq') ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}">
                    <a class="w-full" href="{{route('privacy_faq')}}">FAQ</a>
                </li>
                {{-- Política de Privacidade --}}
                <li class="px-1.5 py-1 transition-colors duration-150 {!! request()->is('privacy') || request()->is('privacy/*') ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}">
                    <a class="w-full" href="{{route('privacy')}}">Política de Privacidade</a>
                </li>
                {{-- Termos de uso --}}
                <li class="px-1.5 py-1 transition-colors duration-150 {!! request()->is('terms') ? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}">
                    <a class="w-full" href="{{route('terms')}}">Termos de uso</a>
                </li>
                
            </ul>
            </template>    
        </li>

        {{-- Newsletter --}}
        <li class="relative px-6 py-3">
            <x-custom.link-menu title="Newsletter" link="{{route('newsletters')}}" route="newsletters">
                <x-slot name="svg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                        <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                        <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                      </svg>
                </x-slot>
            </x-custom.link-menu>
        </li>

        {{-- Modal de idiomas --}}
        <li class="relative px-6 py-3">
            <x-custom.link-menu title="Modal de Idiomas" link="{{route('modal_lang')}}" route="modal_lang">
                <x-slot name="svg">
                    <svg class="w-5 h-5 bi bi-globe2" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="" viewBox="0 0 16 16">
                        <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
                    </svg>
                </x-slot>
            </x-custom.link-menu>
        </li>


        {{-- Administradores --}}
        <li class="relative px-6 py-3">
            <x-custom.link-menu title="Administradores" link="{{route('users.index')}}" route="users*">
                <x-slot name="svg">
                    <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" stroke="currentColor">
                        <path d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                </x-slot>
            </x-custom.link-menu>
        </li>




        {{-- <li class="relative px-6 py-3">
            <x-custom.link-menu title="Home" link="{{route('pages', 'home')}}" route="pages/home*">
                <x-slot name="svg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                    aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1" stroke="currentColor" viewBox="0 0 47.523 41.15">
                        <defs>
                          <style>
                            .cls-1 {
                              fill: currentColor;
                            }
                          </style>
                        </defs>
                        <g id="ICON" transform="translate(-45.946 -39.229)">
                          <path id="Caminho_1212" data-name="Caminho 1212" class="cls-1" d="M87.821,82.7H76.078a1,1,0,0,1-1-1V72.4H69.012v9.3a1,1,0,0,1-1,1H56.269a1,1,0,0,1-1-1V63.6a1,1,0,0,1,.333-.745L71.315,48.8a1,1,0,0,1,1.394-.059L88.488,62.854a1,1,0,0,1,.333.745V81.7A1,1,0,0,1,87.821,82.7Zm-10.744-2h9.744V64.047L72.045,50.83,57.269,64.047V80.7h9.744V71.4a1,1,0,0,1,1-1h8.065a1,1,0,0,1,1,1Z" transform="translate(-2.338 -2.321)"/>
                          <path id="Caminho_1213" data-name="Caminho 1213" class="cls-1" d="M92.469,61.1a1,1,0,0,1-.657-.247l-22.1-19.3-22.1,19.3a1,1,0,1,1-1.315-1.507L69.047,39.475a1,1,0,0,1,.658-.247h.006a1,1,0,0,1,.658.247L93.127,59.342a1,1,0,0,1-.658,1.753Z"/>
                        </g>
                      </svg>
                      
                </x-slot>
            </x-custom.link-menu>
        </li> --}}

        {{-- <li class="relative px-6 py-3">
            <x-custom.link-menu title="Advogados" link="{{route('pages', 'lawyers')}}" route="pages/advogados*">
                <x-slot name="svg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5"
                    aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.75" stroke="currentColor" viewBox="0 0 36.729 20.585">
                        <defs>
                          <style>
                            .cls-1 {
                              fill: currentColor;
                            }
                          </style>
                        </defs>
                        <g id="Grupo_5399" data-name="Grupo 5399" transform="translate(-1509.969 -469.415)">
                            <g id="Grupo_5397" data-name="Grupo 5397" transform="translate(1529.334 482.228)">
                              <path id="Caminho_1200" data-name="Caminho 1200" class="cls-1" d="M790.333,2011.111h-1v-3.646c0-3.021-2.719-3.581-4.5-3.623l-3.048,3.617a.5.5,0,0,1-.373.178H781.4a.5.5,0,0,1-.37-.164l-3.3-3.631a5.284,5.284,0,0,0-3.031.834,3.238,3.238,0,0,0-1.236,2.789v3.646h-1v-3.646a4.183,4.183,0,0,1,1.646-3.6,6.416,6.416,0,0,1,3.841-1.029.5.5,0,0,1,.37.164l3.063,3.374,2.832-3.36a.5.5,0,0,1,.382-.178,7,7,0,0,1,3.95,1.02,4.153,4.153,0,0,1,1.781,3.605Z" transform="translate(-772.969 -2003.339)"/>
                            </g>
                            <g id="Grupo_5398" data-name="Grupo 5398" transform="translate(1510.469 470.578)">
                              <path id="Caminho_1200-2" data-name="Caminho 1200" class="cls-1" d="M790.333,2011.111h-1v-3.646c0-3.154-2.964-3.625-4.731-3.625h-6.647a5.464,5.464,0,0,0-3.251.836,3.238,3.238,0,0,0-1.236,2.789v3.646h-1v-3.646a4.183,4.183,0,0,1,1.646-3.6,6.416,6.416,0,0,1,3.841-1.029H784.6a7,7,0,0,1,3.95,1.02,4.153,4.153,0,0,1,1.781,3.605Z" transform="translate(-772.969 -1991.69)"/>
                              <path id="Caminho_1201" data-name="Caminho 1201" class="cls-1" d="M808.392,1934.821a4.219,4.219,0,0,1-4.185-4.243v-1.387a4.186,4.186,0,1,1,8.371,0v1.387A4.22,4.22,0,0,1,808.392,1934.821Zm0-8.872a3.218,3.218,0,0,0-3.185,3.242v1.387a3.186,3.186,0,1,0,6.371,0v-1.387A3.218,3.218,0,0,0,808.392,1925.949Z" transform="translate(-799.96 -1925.448)"/>
                            </g>
                            <g id="User_Female_" data-name="User (Female)" transform="translate(1532.001 469.915)">
                              <path id="Caminho_3961" data-name="Caminho 3961" class="cls-1" d="M9.111,2a.5.5,0,0,1,.354.146L11.77,4.452a.5.5,0,0,1,.146.354V5.958a3.958,3.958,0,0,1-7.909.232q0-.013,0-.027L4,4.807a.5.5,0,0,1,.276-.449L8.887,2.053A.5.5,0,0,1,9.111,2Zm1.805,3.012-1.9-1.9L5,5.114l0,1.032a2.958,2.958,0,0,0,5.91-.187Z" transform="translate(-2.195 -0.195)"/>
                              <path id="Caminho_3962" data-name="Caminho 3962" class="cls-1" d="M1.345,11.5a1.735,1.735,0,0,1-.631-.124.5.5,0,0,1,.362-.932A.773.773,0,0,0,2,10.076V6.3a6.263,6.263,0,1,1,12.527,0v3.754a1.363,1.363,0,0,0,1.095.355.5.5,0,1,1,.023,1,2.154,2.154,0,0,1-2.068-.981.5.5,0,0,1-.049-.217V6.3A5.263,5.263,0,1,0,3,6.3v3.91a.5.5,0,0,1-.056.23A1.916,1.916,0,0,1,1.345,11.5Z" transform="translate(-2.5 -0.5)"/>
                            </g>
                          </g>
                      </svg>
                      
                </x-slot>
            </x-custom.link-menu>
        </li> --}}

        {{-- <li class="relative px-6 py-3">
            <x-custom.link-menu title="Atuação" link="{{route('pages', 'atuacao')}}" route="pages/atuacao*">
                <x-slot name="svg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="0.5" stroke="currentColor"  viewBox="0 0 32.6 27.6">
                        <defs>
                          <style>
                            .cls-1 {
                              fill: currentColor;
                            }
                          </style>
                        </defs>
                        <path id="Icon" class="cls-1" d="M31.916,43.76H20.084a1.8,1.8,0,0,1-1.8-1.805v-.1a1.8,1.8,0,0,1,1.8-1.805h4.668V23.466a2.358,2.358,0,0,1-.937-1.068H15.328l4.285,10.17a.444.444,0,0,1,.019.076.309.309,0,0,1,.008.07v.125A3.654,3.654,0,0,1,16,36.5H13.34a3.654,3.654,0,0,1-3.64-3.66v-.125a.309.309,0,0,1,.007-.066.429.429,0,0,1,.02-.084l.008-.022L14.1,22.2a.987.987,0,0,1,.591-1.776h9.129a2.391,2.391,0,0,1,.935-1.063V17.41A1.25,1.25,0,0,1,26,16.16a1.233,1.233,0,0,1,.881.366,1.261,1.261,0,0,1,.363.884v1.949a2.365,2.365,0,0,1,.937,1.063h9.127a.99.99,0,0,1,.7,1.684.871.871,0,0,1-.1.091l4.367,10.367a.444.444,0,0,1,.019.076.309.309,0,0,1,.008.07v.125a3.654,3.654,0,0,1-3.64,3.66H36a3.654,3.654,0,0,1-3.64-3.66v-.125a.309.309,0,0,1,.008-.07.444.444,0,0,1,.019-.076l.008-.022L36.672,22.4H28.184a2.381,2.381,0,0,1-.94,1.068V40.045h4.672a1.8,1.8,0,0,1,1.8,1.805v.1A1.8,1.8,0,0,1,31.916,43.76Zm0-2.841H20.084a.925.925,0,0,0-.92.927v.1a.925.925,0,0,0,.92.927H31.912a.925.925,0,0,0,.92-.927v-.1A.928.928,0,0,0,31.914,40.919Zm-6.294-.878h.744V23.789h0l-.023,0a2.8,2.8,0,0,1-.344.026,2.253,2.253,0,0,1-.337-.025l-.039,0Zm7.634-6.889A2.777,2.777,0,0,0,36,35.618h2.66a2.777,2.777,0,0,0,2.746-2.467Zm-22.66,0a2.777,2.777,0,0,0,2.746,2.467H16a2.777,2.777,0,0,0,2.746-2.467Zm22.866-.878H41.2l-3.872-9.186Zm-22.664,0H18.54l-3.872-9.186ZM24.829,22.4a1.5,1.5,0,0,0,.539.409l.008,0a1.361,1.361,0,0,0,.3.1,1.546,1.546,0,0,0,.319.033,1.483,1.483,0,0,0,.626-.136l0,0a1.481,1.481,0,0,0,.537-.408ZM14.684,21.3a.111.111,0,0,0,0,.221h22.62a.1.1,0,0,0,.075-.032.112.112,0,0,0,.033-.078.111.111,0,0,0-.108-.11Zm10.154-.878h2.324a1.5,1.5,0,0,0-.534-.4l-.008,0a1.362,1.362,0,0,0-.3-.1A1.546,1.546,0,0,0,26,19.879a1.483,1.483,0,0,0-.626.136A1.542,1.542,0,0,0,24.838,20.422Zm1.489-1.39h.007l.038,0V17.414a.371.371,0,0,0-.109-.267A.363.363,0,0,0,26,17.038a.374.374,0,0,0-.372.376v1.624l.04-.005a2.094,2.094,0,0,1,.277-.023.38.38,0,0,1,.055,0,.41.41,0,0,1,.056,0A2.017,2.017,0,0,1,26.328,19.032Z" transform="translate(-9.7 -16.16)"/>
                      </svg>
                </x-slot>
            </x-custom.link-menu>
        </li> --}}

        

        {{-- <li class="relative px-6 py-3">
            <x-custom.link-menu title="Reconhecimentos" link="{{route('awards')}}" route="awards">
                <x-slot name="svg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                    </svg>
                </x-slot>
            </x-custom.link-menu>
        </li> --}}

        {{-- Reconhecimentos --}}
        {{-- <li class="relative px-6 py-3">
            
            {!! request()->is('awards') || request()->is('award_types') ? '<span class="absolute inset-y-0 left-0 w-1 bg-azul-900 dark:bg-ruby-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}

            <button class="inline-flex items-center w-full text-md font-semibold transition-colors duration-150 {!! request()->is('awards') || request()->is('award_types')? 'text-azul-900 hover:text-azul-700 dark:hover:text-ruby-400 dark:text-ruby-600' : 'text-azul-700 hover:text-azul-900 dark:hover:text-ruby-600 dark:text-ruby-400' !!}" @click="toggleRecMenu" aria-haspopup="true">
                <span class="inline-flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                        <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                    </svg>
                </span>
                <span class="ml-2">Reconhecimentos</span>
                <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>

            <template x-if="isRecMenuOpen">
            <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300" x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0" class="p-2 mt-2 xspace-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">
                
            </ul>
            </template>    
        </li> --}}

        

       
        
        

        


        


        


        
        {{-- <li class="relative px-6 py-3">
            {!! request()->routeIs('dashboard') ? '<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100" href="{{route('dashboard')}}">
                <svg class="w-5 h-5" ari a-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                    </path>
                </svg>
                <span class="ml-2">{{ __('Dashboard') }}</span>
            </a>
        </li>
        <li class="relative px-6 py-3">
            {!! request()->routeIs('forms') ? '<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a data-turbolinks-action="replace" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('forms')}}">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                    </path>
                </svg>
                <span class="ml-2">Forms</span>
            </a>
        </li>
        <li class="relative px-6 py-3">
            {!! request()->routeIs('cards') ? '<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('cards')}}">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                    </path>
                </svg>
                <span class="ml-2">Cards</span>
            </a>
        </li>
        <li class="relative px-6 py-3">
            {!! request()->routeIs('charts') ? '<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('charts')}}">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path>
                    <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path>
                </svg>
                <span class="ml-2">Charts</span>
            </a>
        </li>
        <li class="relative px-6 py-3">
            {!! request()->routeIs('buttons') ? '<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('buttons')}}">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122">
                    </path>
                </svg>
                <span class="ml-2">Buttons</span>
            </a>
        </li>
        <li class="relative px-6 py-3">
            {!! request()->routeIs('modals') ? '<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('modals')}}">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                    </path>
                </svg>
                <span class="ml-2">Modals</span>
            </a>
        </li>
        <li class="relative px-6 py-3">
            {!! request()->routeIs('tables') ? '<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('tables')}}">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                </svg>
                <span class="ml-2">Tables</span>
            </a>
        </li>
        <li class="relative px-6 py-3">
            {!! request()->routeIs('calendar') ? '<span class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg" aria-hidden="true"></span>' : '' !!}
            <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" href="{{route('calendar')}}">
                <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                <span class="ml-2">Calendar</span>
            </a>
        </li> --}}

    </ul>
</div>
