<div>
    <x-custom.dialog-modal wire:model="open">
        
         <x-slot name="title">
             <div class="inline-flex items-center pt-5" id="editArea">
                <svg class="w-6 h-6 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                 <span>Editar Área</span>
             </div>
             
         </x-slot>
     
         <x-slot name="content">     
             <div class="md:grid md:grid-cols-2 gap-4 pt-1 pb-6" x-data>
                 
                 <x-areas.form action="edit" :icon="$icon" :image="$image" :area="$area" :iteration="$iteration" :related="$related" :sel_related="$sel_related"></x-areas.form>
 
             </div>
         </x-slot>
     
         <x-slot name="footer">
             @if ($errors->any())
                 <p class="pb-3 pr-5 font-semibold text-sm text-right text-ruby-800">Corrija os erros no formulário</p>
             @endif
             <x-custom.secondary-button wire:click="$toggle('open')" x-on:click.prevent="location.href='#editArea'" wire:loading.attr="disabled">
                 Cancelar
             </x-custom.secondary-button>
     
             <x-custom.button class="ml-2" wire:click="save" x-on:click.prevent="location.href='#editArea'" wire:loading.attr="disabled">
                 Salvar
             </x-custom.button>
         </x-slot>
        
     </x-custom.dialog-modal>

    <x-custom.loading action="save"/>
    {{-- <x-custom.loading action="$toggle('open')"/> --}}
 </div>
 