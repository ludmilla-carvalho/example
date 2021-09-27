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
                        <x-custom.input-search id="search" type="text" class="block w-full" text="Busque pelo nome" model="filters.search" placeholder="" />
                    </div>
                    <div>
                        {{-- Btn novo adm --}}
                        <x-custom.add-button wire:click.prevent="$emitTo('lawyer.create', 'open')" class="float-right mt-4" title="Novo Advogado" wire:loading.attr="disabled" />

                        {{-- Btn exportar --}}
                        <x-custom.download-button wire:click.prevent="export" class="float-right mt-4 mr-8" title="Exportar" wire:loading.attr="disabled" />
                    </div>
                </div>
            </div>
            @if (count($items) > 0)
            <div class="overflow-x-auto">
                <table class="w-full xwhitespace-no-wrap table-auto">
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
                                <th wire:click="sortBy('name')" class="px-3 py-2 cursor-pointer">
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
                                <th class="px-3 py-2">Imagem</th>
                                <th wire:click="sortBy('lawyer_type_id')" class="px-3 py-2 cursor-pointer">
                                    Categoria
                                    @if (isset($sorts['lawyer_type_id']))
                                        @if ($sorts['lawyer_type_id'] == 'asc')
                                            <span>&#9650;</span>
                                        @else
                                            <span>&#9660;</span>
                                        @endif
                                    @else
                                        <span>&#8693;</span>
                                    @endif
                                </th>
                                <th class="px-3 py-2">Cidade</th>
                                <th class="px-3 py-2">Áreas</th>
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
                                        <div class="text-sm">
                                            <span class="font-semibold">{{ $item->name }}</span>
                                            @if (strlen($item->email)> 3)
                                                <br><span class="text-xs">{{ $item->email }}</span>
                                            @endif
                                            @if (strlen($item->phone) > 3)
                                                <br><span class="text-xs">{{ $item->phone }}</span> 
                                            @endif
                                            
                                            
                                        </div>
                                    </td>
                                    <td class="px-3 py-2 text-sm">
                                        @if (strlen($item->image) > 3)
                                            <a href="{{ url('storage/lawyers/' . $item->image) }}" target="_blank">
                                                <img src="{{ url('storage/lawyers/' . $item->image) }}" class="w-12">
                                            </a>
                                        @endif
                                    </td>
                                    <td class="px-3 py-2 text-sm">
                                        {{ $item->lawyer_type->title }}
                                    </td>
                                    <td class="px-3 py-2 text-sm">
                                        @foreach ($item->cities as $city)
                                            {{ $city->title }}<br>
                                        @endforeach
                                    </td>
                                    <td class="px-3 py-2 text-xs">
                                        @foreach ($item->areas as $area)
                                            {{ $area->title }}<br>
                                        @endforeach
                                    </td>
                                    <td class="px-3 py-2">
                                        <div class="flex items-center space-x-4 text-sm">
                                            {{-- Editar --}}
                                            <x-custom.edit-button wire:click.prevent="$emitTo('lawyer.edit', 'open', {{ $item->id }})" title="Editar" wire:loading.attr="disabled" />
                                            {{-- Apagar --}}
                                            <x-custom.delete-button wire:click.prevent="$emitTo('lawyer.delete', 'open', {{ $item->id }})" title="Apagar" wire:loading.attr="disabled" />
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
                    Nenhum advogado encontrado.
                </p>
            @endif

            <livewire:lawyer.create>

            <livewire:lawyer.edit>

            <livewire:lawyer.delete>
            
            <x-custom.loading action="export"/>
        </div>
    </div>

    <div>
        <h3 class="my-6 text-2xl font-semibold text-azul-900 dark:text-ruby-600  transition-colors duration-150">
            Informações Complementares
        </h3>

        <p>Altere as informações complementares relacionadas a este componente.</p>
        
        <div class="text-azul-800 dark:text-ruby-100 mb-4 flex flex-wrap content-between">
            
            <x-custom.attr-button onclick="location.href='{{ route('lawyer_types') }}'" class="mt-4 mr-5" title="Categoria" wire:loading.attr="disabled" />

            <x-custom.attr-button onclick="location.href='{{ route('lawyer_subtypes') }}'" class="mt-4 mr-5" title="Subcategoria" wire:loading.attr="disabled" />

            <x-custom.attr-button onclick="location.href='{{ route('cities') }}'" class="mt-4 mr-5" title="Cidades" wire:loading.attr="disabled" />
        
            <x-custom.attr-button onclick="location.href='{{ route('experiences') }}'" class="mt-4 mr-5" title="Experiência Internacional" wire:loading.attr="disabled" />
        
            <x-custom.attr-button onclick="location.href='{{ route('graduations') }}'" class="mt-4 mr-5" title="Formação Acadêmica" wire:loading.attr="disabled" />
        
            <x-custom.attr-button onclick="location.href='{{ route('languages') }}'" class="mt-4 mr-5" title="Idiomas" wire:loading.attr="disabled" />

            <x-custom.attr-button onclick="location.href='{{ route('awards') }}'" class="mt-4 mr-5" title="Reconhecimentos" wire:loading.attr="disabled" />

        </div>
    </div>

</div>


    