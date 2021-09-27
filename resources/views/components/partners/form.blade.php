<div class="">
    <x-custom.label for="title" value="Título" required />
    <x-custom.input id="title" type="text" class="" wire:model.deffer="partner.title" />
    <x-custom.input-error for="partner.title" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.partner.title">
            (<span x-text="$wire.partner.title.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="">
    <x-custom.label for="title_en" value="Título (en)" required />
    <x-custom.input id="title_en" type="text" class="" wire:model.deffer="partner.title_en" />
    <x-custom.input-error for="partner.title_en" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.partner.title_en">
            (<span x-text="$wire.partner.title_en.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="col-span-2 lg:w-1/2 mb-2">
    <x-custom.label for="partner.image" value="Imagem" required />
    @if ($image)
        <p class="text-azul-900 dark:text-gray-400 font-semibold text-sm">Preview:</p>
        <img src="{{ $image->temporaryUrl() }}" class="w-1/3 mb-2">
    @else
        @if (strlen($partner->image) > 3)
            <img src="{{ asset('storage/partners/' . $partner->image) }}" class="w-1/3 mb-2">    
        @endif
    @endif
    <x-custom.input id="partner.image{{ $iteration }}" type="file" class="" wire:model="image"/>
    <x-custom.input-error for="image" class="mt-2" />
    <span class="text-xs text-gray-500 block">Tamanho máximo: 2MB</span>
    <span class="text-xs text-gray-500 block">Formatos permitidos:png, jpg e gif</span>
    {{-- <span class="text-xs text-gray-500 block">Largura recomentada: 1920x575 px</span> --}}
    <div wire:loading wire:target="image" class="mt-2 text-green-900 font-bold">Carregando...</div>
</div>

<div class="col-span-2">
    <x-custom.label for="text" value="Texto" required/>
    <x-custom.editor-simple list="true" link="true" id='partner.text{{ $partner->id }}' wire:model="partner.text"></x-custom.editor-simple>
    <x-custom.input-error for="partner.text" class="mt-2" />
</div>


<div class="col-span-2">
    <x-custom.label for="text_en" value="Texto (en)" required/>
    <x-custom.editor-simple list="true" link="true" id='partner.text_en{{ $partner->id }}' wire:model="partner.text_en"></x-custom.editor-simple>
    <x-custom.input-error for="partner.text_en" class="mt-2" />
</div>

<div class="">
    <x-custom.checkbox id="publish" text="Publicado" tooltip="Indica se este conteúdo deve ou não aparecer na página <strong>Responsabilidade Social</strong>." wire:model.deffer="partner.publish" />
    <x-custom.input-error for="partner.publish" class="mt-2" />
</div>

<div class="text-xs text-right text-azul-900 dark:text-gray-400">
    * preenchimento obrigatório
</div>



@push('scripts')
<script>
    $(document).ready(function () {
        tippy('[data-tippy-content]',{
            allowHTML: true,
            placement: 'right',
        });
    });
</script>
@endpush

        