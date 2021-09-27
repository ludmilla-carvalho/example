<div class="">
    <x-custom.label for="title" value="Título" required />
    <x-custom.input id="title" type="text" class="" wire:model.deffer="award.title" />
    <x-custom.input-error for="award.title" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.award.title">
            (<span x-text="$wire.award.title.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div id="{{ $action }}_sel_award_type_id">
    <x-custom.label for="award_type_id" value="Tipo de Reconhecimento" required />
    <div wire:ignore>
        <x-custom.select id="{{ $action }}_award_type_id" class="award_type_id " wire:model="award.award_type_id" :options="$awardType" :action="$action" />
    </div>
    <x-custom.input-error for="award.award_type_id" class="mt-2" />
</div>

<div class="col-span-2">
    <x-custom.label for="text" value="Texto" />
    <x-custom.editor-simple list="true" id='award.text{{ $award->id }}' wire:model="award.text"></x-custom.editor-simple>
    <x-custom.input-error for="award.text" class="mt-2" />
</div>

<div class="col-span-2">
    <x-custom.label for="text_en" value="Texto (en)" />
    <x-custom.editor-simple  list="true" id='award.text_en{{ $award->id }}' wire:model="award.text_en"></x-custom.editor-simple>
    <x-custom.input-error for="award.text_en" class="mt-2" />
</div>

<div class="col-span-2 text-xs text-right text-azul-900 dark:text-gray-400">
    * preenchimento obrigatório
</div>

@push('scripts')

<script>
    $(document).ready(function () {
        //award_type_id

        
        $('#{{ $action }}_award_type_id').select2({
            placeholder: 'Selecione um Tipo de Reconhecimento',
        });
        $('#{{ $action }}_award_type_id').on('change', function (e) {
            let data = $(this).val();
                @this.set('award.award_type_id', data);
        });
        window.livewire.on('clearAwardType', () => {
            $('.award_type_id').select2({
                placeholder: 'Selecione um Tipo de Reconhecimento',
            });
            // $('#edit_award_type_id').select2({
            //     placeholder: 'Selecione um Tipo de Reconhecimento',
            // });
        });
        //$('#create_award_type_id').val(null);
        //$('#create_sel_award_type_id .select2-selection__rendered').text('Selecione um Tipo de Reconhecimento');
    });

</script>

@endpush


        