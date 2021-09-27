<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;
use App\Models\Event;
use App\Models\Speaker;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Create extends Component
{
    use WithFileUploads;

    public Event $event;
    public $speakers = [];
    public $selSpeakers = [];
    //public $schedule = [];
    public $selSchedules = [];
    public $image;
    public $iteration = 0; //usado para limpar o file upload
    public $open = false;

    protected $listeners = [
        'open' => 'addItem'
    ];
    
    protected $rules = [
        'event.title' => 'required|unique:events,title,null|string|min:3|max:191',
        'event.title_en' => 'required',
        'event.free'=> 'nullable', 
        'event.date'=> 'required', 
        'event.hour'=> 'nullable', 
        'event.online'=> 'nullable', 
        'event.local'=> 'nullable',
        'event.address' => 'nullable',
        'event.lat'=> 'nullable',
        'event.long'=> 'nullable', 
        'event.vacancies'=> 'nullable', 
        'event.amount'=> 'nullable', 
        'event.external'=> 'nullable', 
        'event.link'=> 'nullable',
        'event.text' => 'string',
        'event.text_en' => 'string',
        'image' => 'required|mimes:png,jpg,jpeg,gif|file|max:2048',
        'event.publish' => 'nullable',
        'event.highlight' => 'nullable',

        
    ];

    protected $validationAttributes = [
        'event.title' => 'título',
        'term.title_en' => 'título (en)',
        'event.free'=> 'evento gratuíto', 
        'event.date'=> 'data', 
        'event.hour'=> 'hora', 
        'event.online'=> 'online', 
        'event.local'=> 'local',
        'event.address' => 'endereço',
        'event.vacancies'=> 'vagas', 
        'event.amount'=> 'valor', 
        'event.external'=> 'externo', 
        'event.link'=> 'link',
        'event.text' => 'texto',
        'event.text_en' => 'texto (en)',
        'image' => 'imagem',
        'event.highlight' => 'destaque',
    ];


    public function mount(){
        $this->event = new Event();
        $this->get_speakers();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        $this->emit('clearSpeaker');
    }

    public function addItem()
    {
        $this->event = new Event();
        $this->clear_speakers();
        $this->clear_schedules();
        $this->emit('clearSpeaker');
        $this->image = null;
        $this->iteration++;
        $this->open = true;
    }

    protected function get_speakers(){
        $this->speakers = Speaker::orderBy('title')->get();
    }

    public function clear_hour()
    {
        $this->event->hour = null;
    }


    protected function clear_speakers(){
        $this->selSpeakers = [];
    }

    protected function clear_schedules(){
        $this->selSchedules = [];
    }

    public function push_schedule($title, $hour){
        $obj = [
            'title' => $title,
            'hour' => $hour
        ];  
        array_push($this->selSchedules, $obj);
    }

    public function del_schedule($id){
        unset($this->selSchedules[$id]);
    }
    
    public function save()
    {
        $this->validate();
        
        if($this->image){
            $dir_file = storage_path() . '/app/public/events/';
            //Cria o diretório, casa ele não existe
            if (!is_dir($dir_file)) {
                mkdir($dir_file, 0777, true);
            }
            $this->event->image = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('events/', $this->event->image, 'public');
        }

        if($this->event->online == 1){
            $this->event->local = null;
            $this->event->lat = null;
            $this->event->long = null;
            $this->event->address = null;
        }

        if($this->event->free == 1){
            $this->event->amount = null;
        }

        if($this->event->external != 1){
            $this->event->link = null;
        }

        $this->event->slug = Str::slug($this->event->title, '-');
        //$this->event->save();
        $event = Event::create($this->event->toArray());
        $event->speakers()->sync($this->selSpeakers);
        $event->schedules()->createMany($this->selSchedules);
        $this->emitUp('eventUpdated'); //atualiza event
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.event.create', [
            'title' => 'Eventos',
            'sub_title' => 'Adicionar Evento',
            'svg' => 'M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'
        ])->layout('layouts.app', [
            'title' => 'Eventos'
        ]);
    }
}
