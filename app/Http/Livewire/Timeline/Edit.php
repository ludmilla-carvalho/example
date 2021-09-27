<?php

namespace App\Http\Livewire\Timeline;

use Livewire\Component;
use App\Models\Timeline;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public Timeline $timeline;
    public $image;
    public $iteration = 0; //usado para limpar o file upload
    public $open = false;
    
    protected $listeners = [
        'open' => 'showItem',
        'tooglePublish' => 'tooglePublish'
    ];

    protected $validationAttributes = [
        'timeline.title' => 'título',
        'term.title_en' => 'título (en)',
        'timeline.text' => 'texto',
        'timeline.text_en' => 'texto (en)',
        'image' => 'imagem',
        'timeline.publish' => 'nullable',
        'timeline.year' => 'ano',
    ];

    protected function rules()
    {
        return [
        'timeline.title' => 'required|string|min:3|max:191',
        'timeline.title_en' => 'required',
        'timeline.text' => 'string',
        'timeline.text_en' => 'string',
        'image' => 'nullable|mimes:png,jpg,jpeg,gif|file|max:2048',
        'timeline.publish' => 'nullable',
        'timeline.year' => 'required|string|min:4|max:4',
        ];
    }

    public function mount(){
        $this->timeline = new Timeline();
    }

    public function showItem($id)
    {
        $this->timeline = Timeline::find($id);
        $this->image = null;
        $this->iteration++;
        $this->open = true;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function tooglePublish($id)
    {
        $this->timeline = Timeline::find($id);
        if($this->timeline->publish == 1){
            $this->timeline->publish = 0;
        }else{
            $this->timeline->publish = 1;
        }
        $this->timeline->save();
        $this->emitUp('timelineUpdated');
    }

    public function save()
    {
        $this->validate(); 
        if($this->image){
            //Apaga a imagem antiga
            Storage::delete('public/timelines/' . $this->timeline->image);

            $dir_file = storage_path() . '/app/public/timelines/';
            //Cria o diretório, casa ele não existe
            if (!is_dir($dir_file)) {
                mkdir($dir_file, 0777, true);
            }
            $this->timeline->image = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('timelines/', $this->timeline->image, 'public');
        } 
        $this->timeline->update($this->timeline->toArray());
        $this->emitUp('timelineUpdated'); //atualiza timeline
        $this->open = false;
        
    }

    public function render()
    {
        return view('livewire.timeline.edit',[
            'title' => 'Linha do tempo',
            'sub_title' => 'Editar Linha do tempo',
            'svg' => 'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z'
        ])->layout('layouts.app', [
            'title' => 'Linha do tempo'
        ]);
    }
}
