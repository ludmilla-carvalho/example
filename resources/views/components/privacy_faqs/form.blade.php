<div class="">
    <x-custom.label for="title" value="Título" required />
    <x-custom.input id="title" type="text" class="" wire:model.deffer="privacyFaq.title" />
    <x-custom.input-error for="privacyFaq.title" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.privacyFaq.title">
            (<span x-text="$wire.privacyFaq.title.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="">
    <x-custom.label for="title_en" value="Título (en)" required />
    <x-custom.input id="title_en" type="text" class="" wire:model.deffer="privacyFaq.title_en" />
    <x-custom.input-error for="privacyFaq.title_en" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.privacyFaq.title_en">
            (<span x-text="$wire.privacyFaq.title_en.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>


<div class="col-span-2">
    <x-custom.label for="text" value="Texto" required/>
    <x-custom.editor-simple list="true" link="true" id='privacyFaq.text{{ $privacyFaq->id }}' wire:model="privacyFaq.text"></x-custom.editor-simple>
    <x-custom.input-error for="privacyFaq.text" class="mt-2" />
</div>


<div class="col-span-2">
    <x-custom.label for="text_en" value="Texto (en)" required/>
    <x-custom.editor-simple list="true" link="true" id='privacyFaq.text_en{{ $privacyFaq->id }}' wire:model="privacyFaq.text_en"></x-custom.editor-simple>
    <x-custom.input-error for="privacyFaq.text_en" class="mt-2" />
</div>


<div class="col-span-2 text-xs text-right text-azul-900 dark:text-gray-400">
    * preenchimento obrigatório
</div>