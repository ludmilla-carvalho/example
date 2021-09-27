<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;
use App\Models\Event;
use App\Models\Speaker;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Edit extends Component
{
    use WithFileUploads;

    public Event $event;
    public $speakers = [];
    public $selSpeakers = [];
    public $selSchedules = [];
    public $image;
    public $iteration = 0; //usado para limpar o file upload
    public $open = false;
    
    protected $listeners = [
        'open' => 'showItem',
        'tooglePublish' => 'tooglePublish',
        'toogleHighlight' => 'toogleHighlight'
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

    protected function rules()
    {
        return [
        'event.title' => 'required|string|min:3|max:191|unique:events,title,' . $this->event->id,
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
        'image' => 'nullable|mimes:png,jpg,jpeg,gif|file|max:2048',
        'event.publish' => 'nullable',
        'event.highlight' => 'nullable',
        ];
    }

    public function mount(){
        $this->event = new Event();
        $this->get_speakers();
    }

    public function showItem($id)
    {
        $this->event = Event::find($id);
        $this->clear_speakers();
        $this->clear_schedules();
        $this->emit('clearSpeaker');
        $this->image = null;
        $this->iteration++;
        $this->open = true;
    }

    public function clear_hour()
    {
        $this->event->hour = null;
    }

    protected function get_speakers(){
        $this->speakers = Speaker::orderBy('title')->get();
    }

    protected function clear_speakers(){
        $this->selSpeakers = [];
        foreach($this->event->speakers as $item){
            $this->selSpeakers[] = "$item->id";
        }
    }

    protected function clear_schedules(){
        $this->selSchedules = [];
        foreach($this->event->schedules as $item){
            $this->selSchedules[] = array(
                'title' => $item->title,
                'hour' => $item->hour,
            );
        }
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

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        $this->emit('clearSpeaker');
    }

    public function tooglePublish($id)
    {
        $this->event = Event::find($id);
        if($this->event->publish == 1){
            $this->event->publish = 0;
        }else{
            $this->event->publish = 1;
        }
        $this->event->save();
        $this->emitUp('eventUpdated');
    }

    public function toogleHighlight($id)
    {
        $this->event = Event::find($id);
        if($this->event->highlight == 1){
            $this->event->highlight = 0;
        }else{
            $this->event->highlight = 1;
        }
        $this->event->save();
        $this->emitUp('eventUpdated');
    }

    public function save()
    {
        $this->validate(); 
        if($this->image){
            //Apaga a imagem antiga
            Storage::delete('public/events/' . $this->event->image);

            $dir_file = storage_path() . '/app/public/events/';
            //Cria o diretório, casa ele não existe
            if (!is_dir($dir_file)) {
                mkdir($dir_file, 0777, true);
            }
            $this->event->image = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('events/', $this->event->image, 'public');
        }
        
        $this->event->slug = Str::slug($this->event->title, '-');
        
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
        $this->event->update($this->event->toArray());
        $this->event->speakers()->sync($this->selSpeakers);
        $this->event->schedules()->delete();
        $this->event->schedules()->createMany($this->selSchedules);
        $this->emitUp('eventUpdated'); //atualiza event
        $this->open = false;
        
    }

    public function render()
    {
        return view('livewire.event.edit',[
            'title' => 'Eventos',
            'sub_title' => 'Editar Evento',
            'svg' => 'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z'
        ])->layout('layouts.app', [
            'title' => 'Eventos'
        ]);
    }
}
