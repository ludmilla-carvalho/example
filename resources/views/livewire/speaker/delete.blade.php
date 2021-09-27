<div>
    <x-custom.dialog-modal wire:model="open" maxWidth="2xl">
        
         <x-slot name="title">
             <div class="inline-flex items-center  pt-5">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                 <span>Remover Palestrante</span>
             </div>
             
         </x-slot>
     
         <x-slot name="content">     
             <div class="md:grid md:grid-cols-2 gap-4 pt-1 pb-6">
                <div class="col-span-2 font-semibold">
                    Deseja mesmo remover o palestrante {{ $speaker->title }}?
                </div>
            </div>
         </x-slot>
     
         <x-slot name="footer">
             <x-custom.secondary-button wire:click="$toggle('open')" wire:loading.attr="disabled">
                 Cancelar
             </x-custom.secondary-button>
     
             <x-custom.button class="ml-2" wire:click="delete" wire:loading.attr="disabled">
                Apagar
             </x-custom.button>
         </x-slot>
        
     </x-custom.dialog-modal>

    <x-custom.loading action="delete"/>
    <x-custom.loading action="$toggle('open')"/>
 </div>
 