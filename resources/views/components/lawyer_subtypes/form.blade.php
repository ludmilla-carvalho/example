<div class="">
    <x-custom.label for="title" value="Título" required />
    <x-custom.input id="title" type="text" class="" wire:model.deffer="lawyerSubtype.title" />
    <x-custom.input-error for="lawyerSubtype.title" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.lawyerSubtype.title">
            (<span x-text="$wire.lawyerSubtype.title.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="">
    <x-custom.label for="title_en" value="Título (en)" required />
    <x-custom.input id="title_en" type="text" class="" wire:model.deffer="lawyerSubtype.title_en" />
    <x-custom.input-error for="lawyerSubtype.title_en" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.lawyerSubtype.title_en">
            (<span x-text="$wire.lawyerSubtype.title_en.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="col-span-2">
    <x-custom.label for="lawyer_type_id" value="Categoria" required />
    <div wire:ignore>
        <x-custom.select id="{{ $action }}_lawyer_type_id" class="" wire:model="lawyerSubtype.lawyer_type_id" :options="$lawyerType" :action="$action"/>
    </div>
    <x-custom.input-error for="lawyerSubtype.lawyer_type_id" class="mt-2" />
</div>

<div class="">
    <x-custom.label for="plural" value="Plural" required />
    <x-custom.input id="plural" type="text" class="" wire:model.deffer="lawyerSubtype.plural" />
    <x-custom.input-error for="lawyerSubtype.plural" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.lawyerSubtype.plural">
            (<span x-text="$wire.lawyerSubtype.plural.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="">
    <x-custom.label for="plural_en" value="Plural (en)" required />
    <x-custom.input id="plural_en" type="text" class="" wire:model.deffer="lawyerSubtype.plural_en" />
    <x-custom.input-error for="lawyerSubtype.plural_en" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.lawyerSubtype.plural_en">
            (<span x-text="$wire.lawyerSubtype.plural_en.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="">
    <x-custom.label for="feminine" value="Feminino" required />
    <x-custom.input id="feminine" type="text" class="" wire:model.deffer="lawyerSubtype.feminine" />
    <x-custom.input-error for="lawyerSubtype.feminine" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.lawyerSubtype.feminine">
            (<span x-text="$wire.lawyerSubtype.feminine.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="">
    <x-custom.label for="feminine_en" value="Feminino (en)" required />
    <x-custom.input id="feminine_en" type="text" class="" wire:model.deffer="lawyerSubtype.feminine_en" />
    <x-custom.input-error for="lawyerSubtype.feminine_en" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.lawyerSubtype.feminine_en">
            (<span x-text="$wire.lawyerSubtype.feminine_en.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>


<div class="col-span-2 text-xs text-right text-azul-900 dark:text-gray-400">
    * preenchimento obrigatório
</div>

        

@push('scripts')

<script>
    $(document).ready(function () {
//lawyer_type_id
        $('#{{ $action }}_lawyer_type_id').select2({
            placeholder: 'Selecione uma categoria'
        });
        $('#{{ $action }}_lawyer_type_id').on('change', function (e) {
            let data = $(this).val();
                @this.set('lawyerSubtype.lawyer_type_id', data);
        });
        window.livewire.on('clearLawyerTypeId', () => {
            $("#{{ $action }}_lawyer_type_id").select2({
                placeholder: 'Selecione uma categoria'
            });
        });
    });

</script>

@endpush