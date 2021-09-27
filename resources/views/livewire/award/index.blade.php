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
                        {{-- Btn novo --}}
                        <x-custom.add-button wire:click.prevent="$emitTo('award.create', 'open')" class="float-right mt-4" title="Novo Reconhecimento" wire:loading.attr="disabled" />
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
                                    <th class="px-3 py-2">Tipo de Reconhecimento</th>
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
                                            {{ $item->award_type->title }}
                                        </td>
                                        <td class="px-3 py-2">
                                            <div class="flex items-center space-x-4 text-sm">
                                                <x-custom.edit-button wire:click.prevent="$emitTo('award.edit', 'open', {{ $item->id }})" title="Editar" wire:loading.attr="disabled" />
                                                {{-- Apagar --}}
                                                <x-custom.delete-button wire:click.prevent="$emitTo('award.delete', 'open', {{ $item->id }})" title="Apagar" wire:loading.attr="disabled" />
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
                        Nenhum reconhecimento encontrado.
                    </p>
                @endif

                <livewire:award.create>

                <livewire:award.edit>

                <livewire:award.delete>
            </div>
        </div>
    </div>

    <div>
        <h3 class="my-6 text-2xl font-semibold text-azul-900 dark:text-ruby-600  transition-colors duration-150">
            Informações Complementares
        </h3>

        <p>Altere as informações complementares relacionadas a este componente.</p>
        
        <div class="text-azul-800 dark:text-ruby-100 mb-4 flex flex-wrap content-between">
            
            <x-custom.attr-button onclick="location.href='{{ route('award_types') }}'" class="mt-4" title="Tipos de Reconhecimentos" wire:loading.attr="disabled" />
            
        </div>
    </div>
</div>

    