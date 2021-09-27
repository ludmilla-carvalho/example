<div class="col-span-2">
    <x-custom.label for="title" value="Nome" required />
    <x-custom.input id="title" type="text" class="" wire:model.deffer="speaker.title" />
    <x-custom.input-error for="speaker.title" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 100 caracteres
        <template x-if="$wire.speaker.title">
            (<span x-text="$wire.speaker.title.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>


<div class="col-span-2 lg:w-1/2 mb-2">
    <x-custom.label for="speaker.image" value="Imagem" required />
    @if ($image)
        <p class="text-azul-900 dark:text-gray-400 font-semibold text-sm">Preview:</p>
        <img src="{{ $image->temporaryUrl() }}" class="w-1/3 mb-2">
    @else
        @if (strlen($speaker->image) > 3)
            <img src="{{ asset('storage/speakers/' . $speaker->image) }}" class="w-1/3 mb-2">    
        @endif
    @endif
    <x-custom.input id="speaker.image{{ $iteration }}" type="file" class="" wire:model="image"/>
    <x-custom.input-error for="image" class="mt-2" />
    <span class="text-xs text-gray-500 block">Tamanho máximo: 2MB</span>
    <span class="text-xs text-gray-500 block">Formatos permitidos:png, jpg e gif</span>
    <span class="text-xs text-gray-500 block">Largura recomentada: 292x464px px</span>
    <div wire:loading wire:target="image" class="mt-2 text-green-900 font-bold">Carregando...</div>
</div>

<div class="">
    <x-custom.label for="city" value="Cidade" required />
    <x-custom.input id="city" type="text" class="" wire:model.deffer="speaker.city" />
    <x-custom.input-error for="speaker.city" class="mt-2" />
    <span class="text-xs text-gray-500 block">Ex R$ 100,00 ou 1kg de alimento não perecível</span>
</div>

<div class="">
    <x-custom.label for="email" value="E-mail" required />
    <x-custom.input id="email" type="text" class="" wire:model.deffer="speaker.email" />
    <x-custom.input-error for="speaker.email" class="mt-2" />
</div>

<div class="">
    <x-custom.label for="phone" value="Telefone" required />
    <x-custom.input id="phone" type="text" class="" wire:model.deffer="speaker.phone" />
    <x-custom.input-error for="speaker.phone" class="mt-2" />
    <span class="text-xs text-gray-500 block">Ex +55 11 99999-9999</span>
</div>



<div class="col-span-2 text-xs text-right text-azul-900 dark:text-gray-400">
    * preenchimento obrigatório
</div>




        