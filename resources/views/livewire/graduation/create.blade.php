<div>
   <x-custom.dialog-modal wire:model="open">
       
        <x-slot name="title">
            <div class="inline-flex items-center pt-5" id="createGraduation">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                <span>Adicionar Formação</span>
            </div>
            
        </x-slot>
    
        <x-slot name="content">     
            <div class="md:grid md:grid-cols-2 gap-4 pt-1 pb-6" x-data>
                
                <x-graduations.form :graduation="$graduation"></x-areas.form>

            </div>
        </x-slot>
    
        <x-slot name="footer">
            @if ($errors->any())
                <p class="pb-3 pr-5 font-semibold text-sm text-right text-ruby-800">Corrija os erros no formulário</p>
            @endif
            <x-custom.secondary-button wire:click="$toggle('open')" x-on:click.prevent="location.href='#createGraduation'" wire:loading.attr="disabled">
                Cancelar
            </x-custom.secondary-button>
    
            <x-custom.button class="ml-2" wire:click="save" x-on:click.prevent="location.href='#createGraduation'" wire:loading.attr="disabled">
                Salvar
            </x-custom.button>
        </x-slot>
       
    </x-custom.dialog-modal>
</div>
