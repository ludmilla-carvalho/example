<?php

namespace App\Http\Livewire\Speaker;

use Livewire\Component;
use App\Models\Speaker;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Create extends Component
{
    use WithFileUploads;

    public Speaker $speaker;
    public $image;
    public $iteration = 0; //usado para limpar o file upload
    public $open = false;

    protected $listeners = [
        'open' => 'addItem'
    ];
    
    protected $rules = [
        'speaker.title' => 'required|unique:speakers,title,null|string|min:3|max:191',
        'speaker.city'=> 'nullable', 
        'speaker.email'=> 'required|email|', 
        'speaker.phone'=> 'required', 
        'image' => 'required|mimes:png,jpg,jpeg,gif|file|max:2048',
    ];

    protected $validationAttributes = [
        'speaker.title' => 'título',
        'speaker.city'=> 'cidade', 
        'speaker.email'=> 'e-mail', 
        'speaker.phone'=> 'telefone',
        'image' => 'imagem',
    ];


    public function mount(){
        $this->speaker = new Speaker();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addItem()
    {
        $this->speaker = new Speaker();
        $this->image = null;
        $this->iteration++;
        $this->open = true;
    }

    public function save()
    {
        $this->validate();
        
        if($this->image){
            $dir_file = storage_path() . '/app/public/speakers/';
            //Cria o diretório, casa ele não existe
            if (!is_dir($dir_file)) {
                mkdir($dir_file, 0777, true);
            }
            $this->speaker->image = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('speakers/', $this->speaker->image, 'public');
        }

        $this->speaker->save();
        $this->emitUp('speakerUpdated'); //atualiza speaker
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.speaker.create', [
            'title' => 'Palestrantes',
            'sub_title' => 'Adicionar Palestrante',
            'svg' => 'M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'
        ])->layout('layouts.app', [
            'title' => 'Palestrantes'
        ]);
    }
}
