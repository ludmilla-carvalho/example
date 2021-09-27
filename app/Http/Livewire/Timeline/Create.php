<?php

namespace App\Http\Livewire\Timeline;

use Livewire\Component;
use App\Models\Timeline;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public Timeline $timeline;
    public $image;
    public $iteration = 0; //usado para limpar o file upload
    public $open = false;

    protected $listeners = [
        'open' => 'addItem'
    ];
    
    protected $rules = [
        'timeline.title' => 'required|string|min:3|max:191',
        'timeline.title_en' => 'required',
        'timeline.text' => 'string',
        'timeline.text_en' => 'string',
        'image' => 'nullable|mimes:png,jpg,jpeg,gif|file|max:2048',
        'timeline.publish' => 'nullable',
        'timeline.year' => 'required|string|min:4|max:4',
        
    ];

    protected $validationAttributes = [
        'timeline.title' => 'título',
        'term.title_en' => 'título (en)',
        'timeline.text' => 'texto',
        'timeline.text_en' => 'texto (en)',
        'image' => 'imagem',
        'timeline.year' => 'ano',
    ];


    public function mount(){
        $this->timeline = new Timeline();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addItem()
    {
        $this->timeline = new Timeline();
        $this->image = null;
        $this->iteration++;
        $this->open = true;
    }
    
    
    public function save()
    {
        $this->validate();
        
        if($this->image){
            $dir_file = storage_path() . '/app/public/timelines/';
            //Cria o diretório, casa ele não existe
            if (!is_dir($dir_file)) {
                mkdir($dir_file, 0777, true);
            }
            $this->timeline->image = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('timelines/', $this->timeline->image, 'public');
        }

        $this->timeline->save();
        $this->emitUp('timelineUpdated'); //atualiza timeline
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.timeline.create', [
            'title' => 'Linha do tempo',
            'sub_title' => 'Adicionar Linha do tempo',
            'svg' => 'M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'
        ])->layout('layouts.app', [
            'title' => 'Linha do tempo'
        ]);
    }
}
