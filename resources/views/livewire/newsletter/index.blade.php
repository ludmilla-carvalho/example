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
                        <x-custom.input-search id="search" type="text" class="block w-full" text="Busque por nome ou email" model="filters.search" placeholder="" />
                        
                    </div>
                    <div>
                        {{-- Btn exportar --}}
                        <x-custom.download-button wire:click.prevent="export" class="float-right mt-4" title="Exportar" wire:loading.attr="disabled" />
                    </div>
                </div>  
                @if (count($items) > 0)
                    <div class="overflow-x-auto">
                        <table class="w-full xwhitespace-no-wrap table-auto">
                            <thead>
                                <tr
                                    class="text-xs font-semibold tracking-wide text-left text-azul-900 uppercase border-b dark:border-gray-700 bg-azul-100 dark:text-gray-400 dark:bg-gray-700">
                                    <th wire:click="sortBy('id')" class="px-3 py-2">
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
                                    <th wire:click="sortBy('name')" class="px-3 py-2">
                                        Nome
                                        @if (isset($sorts['name']))
                                            @if ($sorts['name'] == 'asc')
                                                <span>&#9650;</span>
                                            @else
                                                <span>&#9660;</span>
                                            @endif
                                        @else
                                            <span>&#8693;</span>
                                        @endif
                                    </th>
                                    <th wire:click="sortBy('email')" class="px-3 py-2">
                                        E-mail
                                        @if (isset($sorts['email']))
                                            @if ($sorts['email'] == 'asc')
                                                <span>&#9650;</span>
                                            @else
                                                <span>&#9660;</span>
                                            @endif
                                        @else
                                            <span>&#8693;</span>
                                        @endif
                                    </th>
                                    <th wire:click="sortBy('created_at')" class="px-3 py-2">
                                        Cadastrado em
                                        @if (isset($sorts['created_at']))
                                            @if ($sorts['created_at'] == 'asc')
                                                <span>&#9650;</span>
                                            @else
                                                <span>&#9660;</span>
                                            @endif
                                        @else
                                            <span>&#8693;</span>
                                        @endif
                                    </th>
                                    <th class="px-3 py-2">Assuntos</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                @foreach($items as $item)
                                    <tr class="text-azul-900 dark:text-gray-400">
                                        <td class="px-3 py-2 text-sm">
                                            {{ $item->id }}
                                        </td>
                                        <td class="px-3 py-2 text-sm">
                                            <div class="flex items-center">
                                                <p class="font-semibold">{{ $item->name }}</p>
                                            </div>
                                        </td>
                                        <td class="px-3 py-2 text-sm">
                                            {{ $item->email }}
                                        </td>
                                        <td class="px-3 py-2 text-sm">
                                            {{ \Carbon\Carbon::parse($item->created_at)->format('d/m/Y H:i') }}
                                        </td>
                                        <td class="px-3 py-2 text-xs">
                                            @foreach ($item->areas as $area)
                                                {{ $area->title }}<br>
                                            @endforeach
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
                    Nenhuma newsletter encontrada.
                </p>
                @endif
            </div>

            <x-custom.loading action="export"/>

        </div>
    </div>
</div>
