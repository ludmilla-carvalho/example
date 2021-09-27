<div class="col-span-2">
    <x-custom.label for="name" value="Nome" required />
    <x-custom.input id="name" type="text" class="mb-2" wire:model.deffer="lawyer.name" />
    <x-custom.input-error for="lawyer.name" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 190 caracteres
        <template x-if="$wire.lawyer.name">
            (<span x-text="$wire.lawyer.name.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="col-span-2 lg:w-1/2mb-2">
    <x-custom.label for="lawyer.image" value="Imagem" required />
    @if ($image)
        <p class="text-azul-900 dark:text-gray-400 font-semibold text-sm">Preview:</p>
        <img src="{{ $image->temporaryUrl() }}" class="w-1/4 mb-2">
    @else
        @if (strlen($lawyer->image) > 3)
            <img src="{{ url('storage/lawyers/' . $lawyer->image) }}" class="w-15 mb-2">    
        @endif
    @endif
    <x-custom.input id="lawyer.image{{ $iteration }}" type="file" class="" wire:model="image"/>
    <x-custom.input-error for="image" class="mt-2" />
    <span class="text-xs text-gray-500 block">Tamanho máximo: 2MB</span>
    <span class="text-xs text-gray-500 block">Formatos permitidos:png, jpg e gif</span>
    <span class="text-xs text-gray-500 block">Largura recomentada: 1920px</span>
    <div wire:loading wire:target="image" class="mt-2 text-green-900 font-bold">Carregando...</div>
</div>

<div class="">
    <x-custom.label for="email" value="E-mail" required />
    <x-custom.input id="email" type="text" class="" wire:model.deffer="lawyer.email" />
    <x-custom.input-error for="lawyer.email" class="mt-2" />
</div>

<div class="">
    <x-custom.label for="phone" value="Telefone" required />
    <x-custom.input id="phone" type="text" class="" wire:model.deffer="lawyer.phone" />
    <x-custom.input-error for="lawyer.phone" class="mt-2" />
</div>

<div class="">
    <x-custom.label for="linkedin" value="Linkedin" />
    <x-custom.input id="linkedin" type="text" class="" wire:model.deffer="lawyer.linkedin" />
    <x-custom.input-error for="lawyer.linkedin" class="mt-2" />
</div>

<div class="">
    <x-custom.label for="gender" value="Gênero" required />
    <div wire:ignore>
        <x-custom.select id="{{ $action }}_gender" class="" wire:model="lawyer.gender" :options="$gender" :action="$action"/>
    </div>
    <x-custom.input-error for="lawyer.gender" class="mt-2" />
</div>

<div class="">
    <x-custom.label for="sel_cities" value="Cidades" required />
    <x-custom.tooltip msg="Caso queira adicionar alguma cidade que não aparece na listagem, vá até <b>Informações Complementares</b> no menu, clique em cidades e em seguida adicione uma nova cidade"/>
    <div wire:ignore>
        <x-custom.select id="{{ $action }}_sel_cities" class="" wire:model="sel_cities" :options="$cities" multiple />
    </div>
    <x-custom.input-error for="sel_cities" class="mt-2" />
</div>

<div class="">
    <x-custom.label for="sel_languages" value="Idiomas" required />
    <x-custom.tooltip msg="Caso queira adicionar algum idioma que não aparece na listagem, vá até <b>Informações Complementares</b> no menu, clique em idiomas e em seguida adicione um novo idioma"/>
    <div wire:ignore>
        <x-custom.select id="{{ $action }}_sel_languages" class="" wire:model="sel_languages" :options="$languages" multiple />
    </div>
    <x-custom.input-error for="sel_languages" class="mt-2" />
</div>

<div class="">
    <x-custom.label for="lawyer_type_id" value="Categoria" required />
    <x-custom.tooltip msg="Caso queira adicionar alguma categoria que não aparece na listagem, vá até <b>Informações Complementares</b> no menu, clique em categorias e em seguida adicione uma nova categoria"/>
    <div wire:ignore>
        <x-custom.select id="{{ $action }}_lawyer_type_id" class="" wire:model="lawyer.lawyer_type_id" :options="$lawyerType" :action="$action"/>
    </div>
    <x-custom.input-error for="lawyer.lawyer_type_id" class="mt-2" />
</div>

<div class="">
    <x-custom.label for="lawyer_subtype_id" value="Subcategoria" required />
    <x-custom.tooltip msg="Caso queira adicionar alguma subcategoria que não aparece na listagem, vá até <b>Informações Complementares</b> no menu, clique em subcategorias e em seguida adicione uma nova subcategoria"/>
    <div>
        <x-custom.select id="{{ $action }}_lawyer_subtype_id" class="" wire:model="lawyer.lawyer_subtype_id" :options="$lawyerSubtype" :action="$action"/>
    </div>
    <x-custom.input-error for="lawyer.lawyer_subtype_id" class="mt-2" />
</div>


<div class="col-span-2">
    <x-custom.label for="sel_areas" value="Áreas de atuação" required />
    <x-custom.tooltip msg="Caso queira adicionar alguma área de atuação que não aparece na listagem, vá até <b>Conteúdo</b> no menu, clique em áreas de atuaçãos e em seguida adicione uma nova área de atuação"/>
    <div wire:ignore>
        <x-custom.select id="{{ $action }}_sel_areas" class="" wire:model="sel_areas" :options="$areas" multiple />
    </div>
    <x-custom.input-error for="sel_areas" class="mt-2" />
</div>

<div class="col-span-2">
    <x-custom.label for="sel_graduation" value="Formação Acadêmica" />
    <x-custom.tooltip msg="Caso queira adicionar alguma formação acadêmica que não aparece na listagem, vá até <b>Informações Complementares</b> no menu, clique em formação acadêmica e em seguida adicione uma nova formação acadêmica"/>
    <div wire:ignore>
        <x-custom.select id="{{ $action }}_sel_graduation" class="" wire:model="sel_graduation" :options="$graduation" multiple />
    </div>
    <x-custom.input-error for="sel_graduation" class="mt-2" />
</div>

<div class="col-span-2">
    <x-custom.label for="sel_experience" value="Experiência Internacional"/>
    <x-custom.tooltip msg="Caso queira adicionar alguma experiência internacional que não aparece na listagem, vá até <b>Informações Complementares</b> no menu, clique em experiência internacional e em seguida adicione uma nova experiência internacional"/>
    <div wire:ignore>
        <x-custom.select id="{{ $action }}_sel_experience" class="" wire:model="sel_experience" :options="$experience" multiple />
    </div>
    <x-custom.input-error for="sel_experience" class="mt-2" />
</div> 


{{-- Reconhecimentos --}}
<div class="col-span-2" x-data="{
    isOpenFrmAward : false,
    openFrmAward() { this.isOpenFrmAward = true },
    closeFrmAward() { 
        this.isOpenFrmAward = false;
        document.getElementById('{{ $action }}award_id').value = '';
        document.getElementById('{{ $action }}year').value = '';

        $wire.emit('clearAwardId');
    },
    saveFrmAward() { 
        var award_id = document.getElementById('{{ $action }}award_id');
        var year = document.getElementById('{{ $action }}year');
        var pass = 0;

        if(year.value.length == 0){
            document.getElementById('{{ $action }}error_year').style.display = 'block';
        }else{
            document.getElementById('{{ $action }}error_year').style.display = 'none';
            pass++;
        }

        if(award_id.value.length == 0){
            document.getElementById('{{ $action }}error_award_id').style.display = 'block';
        }else{
            document.getElementById('{{ $action }}error_award_id').style.display = 'none';
            pass++;
        }
        
        if(pass == 2){
            $wire.push_award(award_id.value, year.value);

            this.isOpenFrmAward = false;
            award_id.value = null;
            year.value = null;
            $wire.emit('clearAwardId');
        }
    },
    delAward(id) {
        this.isOpenFrmAward = false;
        var el = document.getElementById('sa'+id);
        el.style.display = 'none';
        el.remove();
        $wire.del_award(id);
        
    },
}">
    <x-custom.label for="awards" value="Reconhecimentos"/>
    <x-custom.tooltip msg="Caso queira adicionar algum reconhecimento que não aparece na listagem, vá até <b>Informações Complementares</b> no menu, clique em reconhecimento e em seguida adicione um novo reconhecimento"/>

    <div id="s_awards">
        @foreach ($selAwards as $key => $value)
        <div id="sa{{ $key }}">
            <?php
                //busca a chave do premio
                $keyAward=array_search($value['award_id'], array_column(json_decode(json_encode($awards),TRUE), 'id'));
            ?>
            {{ $awards[$keyAward]['title'] }} - {{ $value['year'] }} 
            <button @click="delAward({{ $key }})" title="Excluir">
                <span class="text-ruby-900">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                      </svg>
            </button>
        </div>
        @endforeach
    </div>

    <div> 
        <div id="add_awards" class="mt-2 bg-azul-100 dark:bg-gray-700 rounded-md p-2" x-show="isOpenFrmAward">
            <div class="lg:w-2/3 lg:float-left">
                <x-custom.label for="award_id" value="Reconhecimento" class="text-sm" required />
                <div wire:ignore>
                    <x-custom.select id="{{ $action }}award_id" class="" :options="$awards" :action="$action"/>
                </div>
                <p id="{{ $action }}error_award_id" class="text-sm text-ruby-800" style="display: none">O campo reconhecimento é obrigatório.</p>
            </div>
            <div class="lg:w-1/3 lg:float-left lg:pl-4">
                <x-custom.label for="year" value="Ano" class="text-sm"  required />
                <x-custom.input id="{{ $action }}year" type="text" class=" py-1.5" />
                <p id="{{ $action }}error_year" class="text-sm text-ruby-800" style="display: none">O campo ano é obrigatório.</p>
            </div>
            <div class="w-full float-none px-0 py-5 lg:mt-4 text-right" style="clear: both;">
                <x-custom.secondary-button-small class="text-xs px-2 py-1" @click="closeFrmAward">
                    Cancelar
                </x-custom.secondary-button-small>
        
                <x-custom.button-small class="ml-2 text-xs px-2 py-1" @click="saveFrmAward">
                    Salvar
                </x-custom.button-small>
            </div>
        </div>

        <div x-show="!isOpenFrmAward">
            <x-custom.add-small-button @click="openFrmAward()" class="mt-2" title="Novo reconhecimento"/>
        </div>
    </div>

</div>

<div class="col-span-2">
    <x-custom.label for="text" value="Texto" />
    <x-custom.editor-simple list="true" link="true" id='lawyer.text{{ $lawyer->id }}' wire:model="lawyer.text"></x-custom.editor-simple>
    <x-custom.input-error for="lawyer.text" class="mt-2" />
</div>

<div class="col-span-2">
    <x-custom.label for="text_en" value="Texto (en)" />
    <x-custom.editor-simple  list="true" link="true" id='lawyer.text_en{{ $lawyer->id }}' wire:model="lawyer.text_en"></x-custom.editor-simple>
    <x-custom.input-error for="lawyer.text_en" class="mt-2" />
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

        // Cities
        $('#{{ $action }}_sel_cities').select2({
            placeholder: 'Selecione uma ou mais cidades'
        });
        $('#{{ $action }}_sel_cities').on('change', function (e) {
            let data = $(this).val();
                @this.set('sel_cities', data);
        });
        window.livewire.on('clearCity', () => {
            $('#{{ $action }}_sel_cities').select2({
                placeholder: 'Selecione uma ou mais cidades'
            });
        });

        // Languages
        $('#{{ $action }}_sel_languages').select2({
            placeholder: 'Selecione um ou mais idiomas'
        });
        $('#{{ $action }}_sel_languages').on('change', function (e) {
            let data = $(this).val();
                @this.set('sel_languages', data);
        });
        window.livewire.on('clearLanguage', () => {
            $('#{{ $action }}_sel_languages').select2({
                placeholder: 'Selecione um ou mais idiomas'
            });
        });

        // Areas
        $('#{{ $action }}_sel_areas').select2({
            placeholder: 'Selecione uma ou mais áreas de atuação'
        });
        $('#{{ $action }}_sel_areas').on('change', function (e) {
            let data = $(this).val();
                @this.set('sel_areas', data);
        });
        window.livewire.on('clearArea', () => {
            $("#{{ $action }}_sel_areas").select2({
                placeholder: 'Selecione uma ou mais áreas de atuação'
            });
        });

        //lawyer_type_id
        $('#{{ $action }}_lawyer_type_id').select2({
            placeholder: 'Selecione uma categoria'
        });
        $('#{{ $action }}_lawyer_type_id').on('change', function (e) {
            let data = $(this).val();
                @this.set('lawyer.lawyer_type_id', data);
                @this.get_lawyer_subtype();
                /*$('#{{ $action }}_lawyer_subtype_id').select2({
                    placeholder: 'Selecione uma subcategoria'
                });*/
        });
        window.livewire.on('clearLawyerTypeId', () => {
            $("#{{ $action }}_lawyer_type_id").select2({
                placeholder: 'Selecione uma categoria'
            });
        });

        //lawyer_subtype_id
        $('#{{ $action }}_lawyer_subtype_id').select2({
            placeholder: 'Selecione uma subcategoria'
        });
        $('#{{ $action }}_lawyer_subtype_id').on('change', function (e) {
            let data = $(this).val();
                @this.set('lawyer.lawyer_subtype_id', data);
        });
        window.livewire.on('clearLawyerSubtypeId', () => {
            $("#{{ $action }}_lawyer_subtype_id").select2({
                placeholder: 'Selecione uma subcategoria'
            });
        });

        // graduation
        $('#{{ $action }}_sel_graduation').select2({
            placeholder: 'Selecione uma ou mais graduações'
        });
        $('#{{ $action }}_sel_graduation').on('change', function (e) {
            let data = $(this).val();
                @this.set('sel_graduation', data);
        });
        window.livewire.on('clearGraduation', () => {
            $("#{{ $action }}_sel_graduation").select2({
                placeholder: 'Selecione uma ou mais graduações'
            });
        });

        // experience
        $('#{{ $action }}_sel_experience').select2({
            placeholder: 'Selecione uma ou mais experiências'
        });
        $('#{{ $action }}_sel_experience').on('change', function (e) {
            let data = $(this).val();
                @this.set('sel_experience', data);
        });
        window.livewire.on('clearExperience', () => {
            $("#{{ $action }}_sel_experience").select2({
                placeholder: 'Selecione uma ou mais experiências'
            });
        });

        //award_id
        $('#{{ $action }}award_id').select2({
            placeholder: 'Selecione um ou mais reconhecimentos'
        });
        /*$('#{{ $action }}award_id').on('change', function (e) {
            let data = $(this).val();
                @this.set('lawyeraward_id', data);
        });*/
        window.livewire.on('clearAwardId', () => {
            $("#{{ $action }}award_id").select2({
                placeholder: 'Selecione um ou mais reconhecimentos'
            });
        });

        //gender
        $('#{{ $action }}_gender').select2({
            placeholder: 'Selecione um gênero'
        });
        $('#{{ $action }}_gender').on('change', function (e) {
            let data = $(this).val();
                @this.set('lawyer.gender', data);
        });
        window.livewire.on('clearGender', () => {
            $("#{{ $action }}_gender").select2({
                placeholder: 'Selecione um gênero'
            });
        });
    });

</script>
@endpush
