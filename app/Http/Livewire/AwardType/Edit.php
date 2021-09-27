<?php

namespace App\Http\Livewire\AwardType;

use Livewire\Component;
use App\Models\AwardType;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public AwardType $awardType;
    public $image;
    public $open = false;
    public $iteration = 0; //usado para limpar o file upload

    protected $listeners = [
        'open' => 'showItem'
    ];

    protected $validationAttributes = [
        'awardType.title' => 'título',
        'image' => 'imagem'
    ];


    public function mount(){
        $this->awardType = new AwardType();
    }

    protected function rules()
    {
        return [
            'awardType.title' => 'required|string|min:3|max:191|unique:award_types,title,' . $this->awardType->id,
            'image' => 'nullable|mimes:png,jpg,jpeg,gif|file|max:2048'
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function showItem($id)
    {
        $this->awardType = AwardType::find($id);
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
        $this->awardType->update($this->awardType->toArray());
        $this->emitUp('award_typeUpdated');
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.award_type.edit');
    }
}
