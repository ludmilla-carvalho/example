<div>
    <x-custom.dialog-modal wire:model="open">
        
         <x-slot name="title">
             <div class="inline-flex items-center pt-5" id="relatedArea">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6  mr-1" aria-hidden="true" fill="currentColor" class="bi bi-diagram-3" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 3.5A1.5 1.5 0 0 1 7.5 2h1A1.5 1.5 0 0 1 10 3.5v1A1.5 1.5 0 0 1 8.5 6v1H14a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0V8h-5v.5a.5.5 0 0 1-1 0v-1A.5.5 0 0 1 2 7h5.5V6A1.5 1.5 0 0 1 6 4.5v-1zM8.5 5a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1zM0 11.5A1.5 1.5 0 0 1 1.5 10h1A1.5 1.5 0 0 1 4 11.5v1A1.5 1.5 0 0 1 2.5 14h-1A1.5 1.5 0 0 1 0 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5A1.5 1.5 0 0 1 7.5 10h1a1.5 1.5 0 0 1 1.5 1.5v1A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm4.5.5a1.5 1.5 0 0 1 1.5-1.5h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"/>
                </svg>
                 <span>Áreas relacionadas</span>
             </div>
         </x-slot>
     
         <x-slot name="content"> 
            <h3 class="font-bold text-lg text-azul-800 dark:text-gray-500">{{ $area->title }}</h3>

             <div class="md:grid md:grid-cols-2 gap-4 pt-1 pb-6">
                @foreach ($areas as $item)

                <div class="">
                    <x-custom.checkbox id="{{$item['title']}}" text="{{ $item['title'] }}" name="selected[{{$item['id']}}]" value="{{$item['id']}}" wire:model="selected"/>
                </div>
                    
                @endforeach
             </div>
         </x-slot>
     
         <x-slot name="footer">
             @if ($errors->any())
                 <p class="pb-3 pr-5 font-semibold text-sm text-right text-ruby-800">Corrija os erros no formulário</p>
             @endif
             <x-custom.secondary-button wire:click="$toggle('open')" x-on:click.prevent="location.href='#relatedArea'" wire:loading.attr="disabled">
                 Cancelar
             </x-custom.secondary-button>
     
             <x-custom.button class="ml-2" wire:click="save" x-on:click.prevent="location.href='#relatedArea'"  wire:loading.attr="disabled">
                 Salvar
             </x-custom.button>
         </x-slot>
        
     </x-custom.dialog-modal>
 </div>
 