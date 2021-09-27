<?php

namespace App\Http\Livewire\Speaker;

use Livewire\Component;
use App\Models\Speaker;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Edit extends Component
{
    use WithFileUploads;

    public Speaker $speaker;
    public $image;
    public $iteration = 0; //usado para limpar o file upload
    public $open = false;
    
    protected $listeners = [
        'open' => 'showItem',
    ];

    protected $validationAttributes = [
        'speaker.title' => 'título',
        'speaker.city'=> 'cidade', 
        'speaker.email'=> 'e-mail', 
        'speaker.phone'=> 'telefone',
        'image' => 'imagem',
    ];

    protected function rules()
    {
        return [
        'speaker.title' => 'required|string|min:3|max:191|unique:speakers,title,' . $this->speaker->id,
        'speaker.city'=> 'nullable', 
        'speaker.email'=> 'required|email|', 
        'speaker.phone'=> 'required', 
        'image' => 'required|mimes:png,jpg,jpeg,gif|file|max:2048',
        ];
    }

    public function mount(){
        $this->speaker = new Speaker();
    }

    public function showItem($id)
    {
        $this->speaker = Speaker::find($id);
        $this->image = null;
        $this->iteration++;
        $this->open = true;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate(); 
        if($this->image){
            //Apaga a imagem antiga
            Storage::delete('public/speakers/' . $this->speaker->image);

            $dir_file = storage_path() . '/app/public/speakers/';
            //Cria o diretório, casa ele não existe
            if (!is_dir($dir_file)) {
                mkdir($dir_file, 0777, true);
            }
            $this->speaker->image = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('speakers/', $this->speaker->image, 'public');
        }
        
        $this->speaker->update($this->speaker->toArray());
        $this->emitUp('speakerUpdated'); //atualiza speaker
        $this->open = false;
        
    }

    public function render()
    {
        return view('livewire.speaker.edit',[
            'title' => 'Palestrantes',
            'sub_title' => 'Editar Palestrante',
            'svg' => 'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z'
        ])->layout('layouts.app', [
            'title' => 'Palestrantes'
        ]);
    }
}
