<div class="">
    <x-custom.label for="title" value="Título" required />
    <x-custom.input id="title" type="text" class="" wire:model.deffer="event.title" />
    <x-custom.input-error for="event.title" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.event.title">
            (<span x-text="$wire.event.title.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="">
    <x-custom.label for="title_en" value="Título (en)" required />
    <x-custom.input id="title_en" type="text" class="" wire:model.deffer="event.title_en" />
    <x-custom.input-error for="event.title_en" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres
        <template x-if="$wire.event.title_en">
            (<span x-text="$wire.event.title_en.length"></span> caracteres digitados</span>)
            </template>
    </span>
</div>

<div class="col-span-2 lg:w-1/2 mb-2">
    <x-custom.label for="event.image" value="Imagem" required />
    @if ($image)
        <p class="text-azul-900 dark:text-gray-400 font-semibold text-sm">Preview:</p>
        <img src="{{ $image->temporaryUrl() }}" class="w-1/3 mb-2">
    @else
        @if (strlen($event->image) > 3)
            <img src="{{ asset('storage/events/' . $event->image) }}" class="w-1/3 mb-2">    
        @endif
    @endif
    <x-custom.input id="event.image{{ $iteration }}" type="file" class="" wire:model="image"/>
    <x-custom.input-error for="image" class="mt-2" />
    <span class="text-xs text-gray-500 block">Tamanho máximo: 2MB</span>
    <span class="text-xs text-gray-500 block">Formatos permitidos:png, jpg e gif</span>
    {{-- <span class="text-xs text-gray-500 block">Largura recomentada: 1920x575 px</span> --}}
    <div wire:loading wire:target="image" class="mt-2 text-green-900 font-bold">Carregando...</div>
</div>

<div class="">
    <x-custom.label for="date" value="Data" required />
    <x-custom.date id="date" type="text" class="block" wire:model.deffer="event.date" />
    <x-custom.input-error for="event.date" class="mt-2" />
</div>

<div class="">
    <x-custom.label for="hour" value="Hora" />
    <x-custom.time id="hour" type="text" class="block" wire:model.deffer="event.hour" />
    <x-custom.input-error for="event.hour" class="mt-2" />
    <div>
        {{-- <span class="text-xs text-gray-500">Formato recomendados: hh:mm (Ex: 10:30)</span> --}}
        <a wire:click="clear_hour" class="text-xs text-ruby-800 float-right mr-2" title="Limpar">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
        </a>
    </div>
</div>

<div class="col-span-2">
    <x-custom.checkbox id="online" text="Online" wire:model.deffer="event.online" />
    <x-custom.input-error for="event.online" class="mt-2" />
</div>

@if($event->online != 1)
<div class="col-span-2">
    <x-custom.label for="local" value="Local" />
    <x-custom.input id="local" type="text" class="" wire:model.deffer="event.local" />
    <x-custom.input-error for="event.local" class="mt-2" />
    <span class="text-xs text-gray-500 block">Recomenda-se até 60 caracteres</span>
</div>

<div class="col-span-2">
    <x-custom.label for="address" value="Endereço" />
    <x-custom.input id="autocomplete" type="text" class="" wire:model.deffer="event.address" />
    <x-custom.input-error for="event.address" class="mt-2" />
    <span class="text-xs text-gray-500 block">Busque pelo endereço no Google Maps</span>
</div>
<x-custom.input id="lat" type="hidden" wire:model.deffer="event.lat" />
<x-custom.input id="long" type="hidden" wire:model.deffer="event.long" />

<div class="col-span-2">mapa aqui</div>

@endif

<div class="col-span-2">
    <x-custom.checkbox id="free" text="Evento Gratuíto" wire:model.deffer="event.free" />
    <x-custom.input-error for="event.free" class="mt-2" />
</div>

<div class="">
    <x-custom.label for="vacancies" value="Vagas" />
    <x-custom.input id="vacancies" type="number" class="" wire:model.deffer="event.vacancies" />
    <x-custom.input-error for="event.vacancies" class="mt-2" />
    <span class="text-xs text-gray-500 block">Ex 100</span>
</div>

@if($event->free != 1)
<div class="">
    <x-custom.label for="amount" value="Valor" />
    <x-custom.input id="amount" type="text" class="" wire:model.deffer="event.amount" />
    <x-custom.input-error for="event.amount" class="mt-2" />
    <span class="text-xs text-gray-500 block">Ex R$ 100,00 ou 1kg de alimento não perecível</span>
</div>
@endif

<div class="col-span-2">
    <x-custom.checkbox id="external" text="Externo" tooltip="Indica que a inscrição não é feita pelo Pinheiro Neto." wire:model.deffer="event.external" />
    <x-custom.input-error for="event.external" class="mt-2" />
</div>

@if($event->external == 1)
<div class="col-span-2">
    <x-custom.label for="link" value="Link para inscrição" />
    <x-custom.input id="link" type="text" class="" wire:model.deffer="event.link" />
    <x-custom.input-error for="event.link" class="mt-2" />
</div>
@endif

<div class="col-span-2">
    <x-custom.label for="text" value="Texto" required/>
    <x-custom.editor-simple list="true" link="true" id='event.text{{ $event->id }}' wire:model="event.text"></x-custom.editor-simple>
    <x-custom.input-error for="event.text" class="mt-2" />
</div>


<div class="col-span-2">
    <x-custom.label for="text_en" value="Texto (en)" required/>
    <x-custom.editor-simple list="true" link="true" id='event.text_en{{ $event->id }}' wire:model="event.text_en"></x-custom.editor-simple>
    <x-custom.input-error for="event.text_en" class="mt-2" />
</div>

<div class="col-span-2">
    <x-custom.label for="sel_speakers" value="Palestrantes" required />
    <x-custom.tooltip msg="Caso queira adicionar algum palestrante que não aparece na listagem, vá até <b>Componentes</b> no menu, clique em palestrantes e em seguida adicione um novo palestrante"/>
    <div wire:ignore>
        <x-custom.select id="{{ $action }}_sel_speakers" class="" wire:model="selSpeakers" :options="$speakers" multiple />
    </div>
</div>

{{-- Programação --}}
<div class="col-span-2" x-data="{
    isOpenFrmSchedule : false,
    openFrmSchedule() { this.isOpenFrmSchedule = true },
    closeFrmSchedule() { 
        this.isOpenFrmSchedule = false;
        document.getElementById('{{ $action }}title').value = '';
        document.getElementById('{{ $action }}hour').value = '';

        $wire.emit('clearSchedule');
    },
    saveFrmSchedule() { 
        var title = document.getElementById('{{ $action }}title');
        var hour = document.getElementById('{{ $action }}hour');
        var pass = 0;

        if(hour.value.length == 0){
            document.getElementById('{{ $action }}error_hour').style.display = 'block';
        }else{
            document.getElementById('{{ $action }}error_hour').style.display = 'none';
            pass++;
        }

        if(title.value.length == 0){
            document.getElementById('{{ $action }}error_title').style.display = 'block';
        }else{
            document.getElementById('{{ $action }}error_title').style.display = 'none';
            pass++;
        }
        
        if(pass == 2){
            $wire.push_schedule(title.value, hour.value);

            this.isOpenFrmSchedule = false;
            title.value = null;
            hour.value = null;
            $wire.emit('clearSchedule');
        }
    },
    delSchedule(id) {
        this.isOpenFrmSchedule = false;
        var el = document.getElementById('sa'+id);
        el.style.display = 'none';
        el.remove();
        $wire.del_schedule(id);
        
    },
}">
    <x-custom.label for="schedules" value="Programação"/>
    <x-custom.tooltip msg="Preencha com o título e o horário"/>

    <div id="s_schedules">
        @foreach ($selSchedules as $key => $value)
        <div id="sa{{ $key }}">
            {{ $value['hour'] }} - {{ $value['title'] }}
            <button @click="delSchedule({{ $key }})" title="Excluir">
                <span class="text-ruby-900">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                      </svg>
            </button>
        </div>
        @endforeach
    </div>

    <div> 
        <div id="add_schedules" class="mt-2 bg-azul-100 dark:bg-gray-700 rounded-md p-2" x-show="isOpenFrmSchedule">
            <div class="lg:w-1/3 lg:float-left">
                <x-custom.label for="hour" value="Hora" class="text-sm"  required />
                <x-custom.input id="{{ $action }}hour" type="text" class="" />
                <p id="{{ $action }}error_hour" class="text-sm text-ruby-800" style="display: none">O campo hora é obrigatório.</p>
                <span class="text-xs text-gray-500 block">Ex 16:00</span>
            </div>
            <div class="lg:w-2/3 lg:float-left lg:pl-4">
                <x-custom.label for="title" value="Programação" class="text-sm" required />
                <div wire:ignore>
                    <x-custom.input id="{{ $action }}title" class="" type="text"/>
                </div>
                <p id="{{ $action }}error_title" class="text-sm text-ruby-800" style="display: none">O campo programação é obrigatório.</p>
            </div>
            <div class="w-full float-none px-0 py-5 lg:mt-4 text-right" style="clear: both;">
                <x-custom.secondary-button-small class="text-xs px-2 py-1" @click="closeFrmSchedule">
                    Cancelar
                </x-custom.secondary-button-small>
        
                <x-custom.button-small class="ml-2 text-xs px-2 py-1" @click="saveFrmSchedule">
                    Salvar
                </x-custom.button-small>
            </div>
        </div>

        <div x-show="!isOpenFrmSchedule">
            <x-custom.add-small-button @click="openFrmSchedule()" class="mt-2" title="Novo horário"/>
        </div>
    </div>

</div>

<div class="col-span-2">
    <x-custom.checkbox id="highlight" text="Destaque" tooltip="Indica se este evento é um destaque." wire:model.deffer="event.highlight" />
    <x-custom.input-error for="event.highlight" class="mt-2" />
</div>

<div class="">
    <x-custom.checkbox id="publish" text="Publicado" tooltip="Indica se este conteúdo deve ou não aparecer na página <strong>Eventos</strong>." wire:model.deffer="event.publish" />
    <x-custom.input-error for="event.publish" class="mt-2" />
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

        // Cities
        $('#{{ $action }}_sel_speakers').select2({
            placeholder: 'Selecione um ou mais palestrantes'
        });
        $('#{{ $action }}_sel_speakers').on('change', function (e) {
            let data = $(this).val();
                @this.set('selSpeakers', data);
        });
        window.livewire.on('clearSpeaker', () => {
            $('#{{ $action }}_sel_speakers').select2({
                placeholder: 'Selecione um ou mais palestrantes'
            });
        });

    });

</script>
@endpush




        