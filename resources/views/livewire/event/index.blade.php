<div>
    <div class="containers grids px-6 mx-auto">
        
        <x-custom.breadcrumb svg="{{ $svg }}">
            <x-slot name="title">
                {{ $title }}
            </x-slot>

            <x-slot name="sub_title">
                {{ $sub_title }}
            </x-slot>
        </x-custom.breadcrumb>

        {{-- Data Table --}}
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full">
                <div class="w-full grid md:grid-cols-2 gap-2 mb-0 shadow-md dark:bg-gray-800 p-5 bg-white dark:border-gray-700">
                    <div>
                        {{-- Busca --}}
                        <x-custom.input-search id="search" type="text" class="block w-full" text="Busque por título" model="filters.search" placeholder="" />
                    </div>
                    <div>
                        {{-- Btn novo  --}}
                        <x-custom.add-button wire:click.prevent="$emitTo('event.create', 'open')" class="float-right mt-4" title="Novo Evento" wire:loading.attr="disabled" />
                    </div>
                </div>
            </div>
            @if (count($items) > 0)
                <div class="overflow-x-auto">
                    <table class="w-full table-auto">
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-azul-900 uppercase border-b dark:border-gray-700 bg-azul-100 dark:text-gray-400 dark:bg-gray-700">
                                <th wire:click="sortBy('id')" class="px-3 py-2 cursor-pointer w-14">
                                    ID
                                    @if (isset($sorts['id']))
                                        @if ($sorts['id'] == 'asc')
                                            <span>&#9650;</span>
                                        @else
                                            <span>&#9660;</span>
                                        @endif
                                    @else
                                        <span>&#8693;</span>
                                    @endif
                                </th>
                                <th wire:click="sortBy('title')" class="px-3 py-2 cursor-pointer">
                                    Título
                                    @if (isset($sorts['title']))
                                        @if ($sorts['title'] == 'asc')
                                            <span>&#9650;</span>
                                        @else
                                            <span>&#9660;</span>
                                        @endif
                                    @else
                                        <span>&#8693;</span>
                                    @endif
                                </th>
                                <th class="px-3 py-2">Imagem</th>
                                <th class="px-3 py-2">Palestrantes</th>
                                <th wire:click="sortBy('publish')" class="px-3 py-2 cursor-pointer w-28">
                                    Publicado
                                    @if (isset($sorts['publish']))
                                        @if ($sorts['publish'] == 'asc')
                                            <span>&#9650;</span>
                                        @else
                                            <span>&#9660;</span>
                                        @endif
                                    @else
                                        <span>&#8693;</span>
                                    @endif
                                </th>
                                <th wire:click="sortBy('highlight')" class="px-3 py-2 cursor-pointer w-28">
                                    Destaque
                                    @if (isset($sorts['highlight']))
                                        @if ($sorts['highlight'] == 'asc')
                                            <span>&#9650;</span>
                                        @else
                                            <span>&#9660;</span>
                                        @endif
                                    @else
                                        <span>&#8693;</span>
                                    @endif
                                </th>
                                <th class="px-3 py-2">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                            @foreach($items as $item)
                                <tr class="text-azul-900 dark:text-gray-400">
                                    <td class="px-3 py-2 text-sm">
                                        {{ $item->id }}
                                    </td>
                                    <td class="px-3 py-2">
                                        {{ $item->title }}
                                    </td>
                                    <td class="px-3 py-2 text-sm">
                                        @if (strlen($item->image) > 3)
                                            <a href="{{ url('storage/events/' . $item->image) }}" target="_blank">
                                                <img src="{{ url('storage/events/' . $item->image) }}" class="w-24">
                                            </a>
                                        @endif
                                    </td>
                                    <td class="px-3 py-2 text-xs">
                                        @foreach ($item->speakers as $speaker)
                                            {{ $speaker->title }}<br>
                                        @endforeach
                                    </td>
                                    <td class="px-3 py-2">
                                        <button wire:click.prevent="$emitTo('event.edit', 'tooglePublish', {{ $item->id }})" title="Publicar" wire:loading.attr="disabled" />
                                        @if ($item->publish == 1)
                                            <span class="text-green-900">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                            </span>
                                        @else
                                            <span class="text-ruby-800 dark:text-ruby-700">
                                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                            </span>
                                        @endif
                                        </button>
                                    </td>
                                    <td class="px-3 py-2">
                                        <button wire:click.prevent="$emitTo('event.edit', 'toogleHighlight', {{ $item->id }})" title="Destacar" wire:loading.attr="disabled" />
                                        @if ($item->highlight == 1)
                                            <span class="text-yellow-400">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                                  </svg>
                                            </span>
                                        @else
                                            <span class="text-gray-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                                    <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                                  </svg>
                                            </span>
                                        @endif
                                        </button>
                                    </td>
                                    <td class="px-3 py-2">
                                        <div class="flex items-center space-x-4 text-sm">
                                           <x-custom.edit-button wire:click.prevent="$emitTo('event.edit', 'open', {{ $item->id }})" title="Editar" wire:loading.attr="disabled" />
                                            {{-- Apagar --}}
                                            <x-custom.delete-button wire:click.prevent="$emitTo('event.delete', 'open', {{ $item->id }})" title="Apagar" wire:loading.attr="disabled" />
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                                        
                <!-- Pagination -->
                {{ $items->links() }}
            @else
                <p class="font-semibold text-azul-900 dark:text-gray-400 px-6 bg-white pb-5">
                    Nenhum evento encontrado.
                </p>
            @endif

            <livewire:event.create>

            <livewire:event.edit>

            <livewire:event.delete>
        </div>
    </div>
</div>

    