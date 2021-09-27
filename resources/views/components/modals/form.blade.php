<div class="">
    <x-custom.label for="title" value="Título" required />
    <x-custom.input id="title" type="text" class="" wire:model.deffer="modal.title" />
    <x-custom.input-error for="modal.title" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.modal.title">
            (<span x-text="$wire.modal.title.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="">
    <x-custom.label for="text_btn" value="Texto do botão" required />
    <x-custom.input id="text_btn" type="text" class="" wire:model="modal.text_btn" />
    <x-custom.input-error for="modal.text_btn" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.modal.text_btn">
            (<span x-text="$wire.modal.text_btn.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="col-span-2">
    <x-custom.label for="text" value="Texto" required/>
    <x-custom.editor-simple list="true" id='modal.text{{ $modal->id }}' wire:model="modal.text"></x-custom.editor-simple>
    <x-custom.input-error for="modal.text" class="mt-2" />
</div>



<div class="col-span-6 lg:col-span-3 mb-2">
    <x-custom.checkbox id="publish" text="Publicado" tooltip="Indica se este conteúdo deve ou não aparecer no <strong>Menu</strong> do site." wire:model.deffer="modal.publish" />
    <x-custom.input-error for="modal.publish" class="mt-2" />
</div>

<div class="col-span-2 text-xs text-right text-azul-900 dark:text-gray-400">
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

        