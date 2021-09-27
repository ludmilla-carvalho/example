<?php

namespace App\Http\Livewire\AwardType;

use Livewire\Component;
use App\Models\AwardType;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public AwardType $awardType;
    public $image;
    public $open = false;
    public $iteration = 0; //usado para limpar o file upload

    protected $listeners = [
        'open' => 'addItem'
    ];

    protected $rules = [
        'awardType.title' => 'required|unique:award_types,title,null|string|min:3|max:191',
        'image' => 'nullable|mimes:png,jpg,jpeg,gif|file|max:2048',
    ];

    protected $validationAttributes = [
        'awardType.title' => 'título',
        'image' => 'imagem',
    ];


    public function mount(){
        $this->awardType = new AwardType();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addItem()
    {
        $this->awardType = new AwardType();
        $this->image = null;
        $this->iteration++;
        $this->open = true;
    }
    
    
    public function save()
    {
        $this->validate();  
        if($this->image){
            $dir_file = storage_path() . '/app/public/award_types/';
            //Cria o diretório, casa ele não existe
            if (!is_dir($dir_file)) {
                mkdir($dir_file, 0777, true);
            }
            $this->awardType->image = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('award_types/', $this->awardType->image, 'public');
        }
        $this->awardType->save();
        $this->emitUp('awardTypeUpdated'); //atualiza award_type
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.award_type.create');
    }
}
