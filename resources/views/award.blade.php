<x-app-layout title="Reconhecimentos">
    <div>
        <div class="containers grids px-6 mx-auto">
        
            <x-custom.breadcrumb svg="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                <x-slot name="title">
                    Reconhecimentos
                </x-slot>

                <x-slot name="sub_title">
                    Editar Reconhecimentos
                </x-slot>
            </x-custom.breadcrumb>


            {{-- Reconhecimentos --}}
            <div class="mx-auto w-full">       
                {{-- <x-custom.breadcrumb>
                    <x-slot name="sub_title">
                        Reconhecimento
                    </x-slot>
                </x-custom.breadcrumb> --}}
    
                <div class="mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <div class="overflow-hidden">
                            <div class="py-5">
        
                                <livewire:award.index>
        
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <br>

            {{-- Tipos de Reconhecimento --}}
            <div class="mx-auto w-full">       
                <x-custom.breadcrumb>
                    <x-slot name="sub_title">
                        Tipos de Reconhecimento
                    </x-slot>
                </x-custom.breadcrumb>
    
                <div class="mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <div class="overflow-hidden">
                            <div class="py-5">
        
                                <livewire:award-type.index>
        
                            </div>
                        </div>
                    </div>
                </div>

            </div>
     
        </div>
    </div>
</x-app-layout>

