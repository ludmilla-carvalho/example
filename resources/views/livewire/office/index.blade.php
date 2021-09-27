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
                        {{-- Btn novo adm --}}
                        <x-custom.add-button wire:click.prevent="$emitTo('office.create', 'open')" class="float-right mt-4" title="Novo Escritório" wire:loading.attr="disabled" />
                    </div>
                </div>
            </div>
            @if (count($items) > 0)
                <div class="overflow-x-auto">
                    <table class="w-full table-auto">
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-azul-900 uppercase border-b dark:border-gray-700 bg-azul-100 dark:text-gray-400 dark:bg-gray-700">
                                <th wire:click="sortBy('id')" class="px-3 py-2 cursor-pointer">
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
                                <th wire:click="sortBy('order')" class="px-3 py-2 cursor-pointer">
                                    Ordem
                                    @if (isset($sorts['order']))
                                        @if ($sorts['order'] == 'asc')
                                            <span>&#9650;</span>
                                        @else
                                            <span>&#9660;</span>
                                        @endif
                                    @else
                                        <span>&#8693;</span>
                                    @endif
                                </th>
                                <th wire:click="sortBy('publish')" class="px-3 py-2 cursor-pointer">
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
                                            <a href="{{ url('storage/offices/' . $item->image) }}" target="_blank">
                                                <img src="{{ url('storage/offices/' . $item->image) }}" class="w-24">
                                            </a>
                                        @endif
                                    </td>
                                    <td class="px-3 py-2">
                                        {{ $item->order }}
                                    </td>
                                    <td class="px-3 py-2">
                                        <button wire:click.prevent="$emitTo('office.edit', 'tooglePublish', {{ $item->id }})" title="Publicar" wire:loading.attr="disabled" />
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
                                        <div class="flex items-center space-x-4 text-sm">
                                            {{-- Editar --}}
                                            <x-custom.edit-button wire:click.prevent="$emitTo('office.edit', 'open', {{ $item->id }})" title="Editar" wire:loading.attr="disabled" />
                                            {{-- Apagar --}}
                                            <x-custom.delete-button wire:click.prevent="$emitTo('office.delete', 'open', {{ $item->id }})" title="Apagar" wire:loading.attr="disabled" />
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
                    Nenhum escritório encontrado.
                </p>
            @endif

            <livewire:office.create>

            <livewire:office.edit>

            <livewire:office.delete>
        </div>
    </div>
</div>

    