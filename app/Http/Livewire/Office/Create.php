<?php

namespace App\Http\Livewire\Office;

use Livewire\Component;
use App\Models\Office;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public Office $office;
    public $image;
    public $open = false;
    public $iteration = 0; //usado para limpar o file upload

    protected $listeners = [
        'open' => 'addItem'
    ];

    protected $rules = [
        'office.title' => 'required|unique:offices,title,null|string|min:3|max:191',
        'office.title_en' => 'required|string|min:3|max:191',
        'image' => 'nullable|mimes:png,jpg,jpeg,gif|file|max:2048',
        'office.address' => 'required',
        'office.order' => 'required|unique:offices,order,null',
        'office.publish' => ''
        
    ];

    protected $validationAttributes = [
        'office.title' => 'título',
        'office.title_en' => 'título (en)',
        'image' => 'imagem',
        'office.address' => 'endereço',
        'office.publish' => 'publicado',
        'office.order' => 'ordem',
    ];


    public function mount(){
        $this->office = new Office();
    }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addItem()
    {
        $this->office = new Office();
        $this->image = null;
        $this->iteration++;
        $this->open = true;
    }
    
    
    public function save()
    {
        $this->validate();  
        if($this->image){
            $dir_file = storage_path() . '/app/public/offices/';
            //Cria o diretório, casa ele não existe
            if (!is_dir($dir_file)) {
                mkdir($dir_file, 0777, true);
            }

            $this->office->image = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('offices/', $this->office->image, 'public');
        }
        $this->office->save();
        $this->emitUp('officeUpdated'); //atualiza office
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.office.create');
    }
}
