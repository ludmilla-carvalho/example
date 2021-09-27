<?php

namespace App\Http\Livewire\Office;

use Livewire\Component;
use App\Models\Office;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public Office $office;
    public $image;
    public $open = false;
    public $iteration = 0; //usado para limpar o file upload

    protected $listeners = [
        'open' => 'showItem',
        'tooglePublish' => 'tooglePublish'
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

    protected function rules()
    {
        return [
            'office.title' => 'required|string|min:3|max:191|unique:offices,title,' . $this->office->id,
            'office.title_en' => 'required|string|min:3|max:191',
            'image' => 'nullable|mimes:png,jpg,jpeg,gif|file|max:2048',
            'office.address' => 'required',
            'office.order' => 'required|unique:offices,order,' . $this->office->id,
            'office.publish' => ''
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function showItem($id)
    {
        $this->office = Office::find($id);
        $this->image = null;
        $this->emit('clearRelated');
        $this->iteration++;
        $this->open = true;
    }

    public function tooglePublish($id)
    {
        $this->office = Office::find($id);
        if($this->office->publish == 1){
            $this->office->publish = 0;
        }else{
            $this->office->publish = 1;
        }
        $this->office->save();
        $this->emitUp('officeUpdated');
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

            //Apaga a imagem antiga
            if(strlen($this->office->image) > 3){
                Storage::delete('public/offices/' . $this->office->image);
            }

            $this->office->image = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('offices/', $this->office->image, 'public');
        }
        $this->office->update($this->office->toArray());
        $this->emitUp('officeUpdated');
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.office.edit');
    }
}
