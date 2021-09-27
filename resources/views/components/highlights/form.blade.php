<div class="">
    <x-custom.label for="title" value="Título" required />
    <x-custom.input id="title" type="text" class="" wire:model.deffer="highlight.title" />
    <x-custom.input-error for="highlight.title" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.highlight.title">
            (<span x-text="$wire.highlight.title.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>


<div class="">
    <x-custom.label for="title_en" value="Título (en)" required />
    <x-custom.input id="title_en" type="text" class="" wire:model="highlight.title_en" />
    <x-custom.input-error for="highlight.title_en" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.highlight.title_en">
            (<span x-text="$wire.highlight.title_en.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="col-span-2 lg:w-1/2 mb-2">
    <x-custom.label for="highlight.image" value="Imagem" required />
    @if ($image)
        <p class="text-azul-900 dark:text-gray-400 font-semibold text-sm">Preview:</p>
        <img src="{{ $image->temporaryUrl() }}" class="w-1/4 mb-2">
    @else
        @if (strlen($highlight->image) > 3)
            <img src="{{ asset('storage/highlights/' . $highlight->page_id .'/'. $highlight->image) }}" class="w-6/3 mb-2">    
        @endif
    @endif
    <x-custom.input id="highlight.image{{ $iteration }}" type="file" class="" wire:model="image"/>
    <x-custom.input-error for="image" class="mt-2" />
    <span class="text-xs text-gray-500 block">Tamanho máximo: 2MB</span>
    <span class="text-xs text-gray-500 block">Formatos permitidos:png, jpg e gif</span>
    <span class="text-xs text-gray-500 block">Tamanho recomendado: 1920x700 px</span>
    <div wire:loading wire:target="image" class="mt-2 text-green-900 font-bold">Carregando...</div>
</div>

<div class="col-span-2 lg:w-1/2 mb-2">
    <x-custom.label for="highlight.image_mobile" value="Imagem Mobile" required />
    @if ($imageMobile)
        <p class="text-azul-900 dark:text-gray-400 font-semibold text-sm">Preview:</p>
        <img src="{{ $imageMobile->temporaryUrl() }}" class="w-1/4 mb-2">
    @else
        @if (strlen($highlight->image_mobile) > 3)
            <img src="{{ asset('storage/highlights/' . $highlight->page_id .'/'. $highlight->image_mobile) }}" class="w-6/3 mb-2">    
        @endif
    @endif
    <x-custom.input id="highlight.image_mobile{{ $iteration }}" type="file" class="" wire:model="imageMobile"/>
    <x-custom.input-error for="imageMobile" class="mt-2" />
    <span class="text-xs text-gray-500 block">Tamanho máximo: 2MB</span>
    <span class="text-xs text-gray-500 block">Formatos permitidos:png, jpg e gif</span>
    <span class="text-xs text-gray-500 block">Tamanho recomendado: 375x700 px</span>
    <div wire:loading wire:target="imageMobile" class="mt-2 text-green-900 font-bold">Carregando...</div>
</div>

<div class="">
    <x-custom.label for="sub_title" value="Sub título" />
    {{-- <x-custom.editor-simple id='highlight.sub_title{{ $highlight->id }}' wire:model="highlight.sub_title"></x-custom.editor-simple> --}}
    <x-custom.textarea id="sub_title" rows="3" class="" wire:model.deffer="highlight.sub_title" />
    <x-custom.input-error for="highlight.sub_title" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 110 caracteres
        <template x-if="$wire.highlight.sub_title">
            (<span x-text="$wire.highlight.sub_title.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="">
    <x-custom.label for="sub_title_en" value="Sub título (en)" />
    {{-- <x-custom.editor-simple id='highlight.sub_title_en{{ $highlight->id }}' wire:model="highlight.sub_title_en"></x-custom.editor-simple> --}}
    <x-custom.textarea id="sub_title_en" rows="3" class="" wire:model.deffer="highlight.sub_title_en" />
    <x-custom.input-error for="highlight.sub_title_en" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 110 caracteres
        <template x-if="$wire.highlight.sub_title_en">
            (<span x-text="$wire.highlight.sub_title_en.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="col-span-2">
    <x-custom.label for="link" value="Link" />
    <x-custom.tooltip msg="Este é link do destaque, seu preenchimento é opcional."/>
    <x-custom.input id="link" type="text" class="" wire:model="highlight.link" />
    <x-custom.input-error for="highlight.link" class="mt-2" />
</div>

<div class="">
    <x-custom.label for="text_link" value="Texto do link" />
    <x-custom.tooltip msg="Este é texto do link do destaque, seu preenchimento é opcional."/>
    <x-custom.input id="text_link" type="text" class="" wire:model="highlight.text_link" />
    <x-custom.input-error for="highlight.text_link" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.highlight.text_link">
            (<span x-text="$wire.highlight.text_link.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="">
    <x-custom.label for="text_link_en" value="Texto do link (en)" />
    <x-custom.input id="text_link_en" type="text" class="" wire:model="highlight.text_link_en" />
    <x-custom.input-error for="highlight.text_link_en" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.highlight.text_link_en">
            (<span x-text="$wire.highlight.text_link_en.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="col-span-2 md:w-1/2 mb-2">
    <x-custom.label for="order" value="Ordem" required />
    <x-custom.tooltip msg="Esta é a ordem que este destaque aparece no Banner <strong>Home (carrosel)</strong>.<br>Ex: ordem 1 aparece em primeiro lugar."/>
    <x-custom.input id="order" type="number" class="" wire:model="highlight.order" min="0" step="1"/>
    <x-custom.input-error for="highlight.order" class="mt-2" />
</div>

<div class="">
    <x-custom.checkbox id="publish" text="Publicado" text="Publicado" tooltip="Indica se este conteúdo deve ou não aparecer no destaque da <strong>Home</strong>." wire:model.deffer="highlight.publish" />
    <x-custom.input-error for="highlight.publish" class="mt-2" />
</div>

<div class="text-right text-xs text-azul-900 dark:text-gray-400">
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

        