<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Modal;

class Create extends Component
{
    public Modal $modal;
    public $open = false;
    
    protected $listeners = [
        'open' => 'addItem'
    ];

    protected $rules = [
        'modal.title' => 'required|unique:modals,title,null|string|min:2|max:191',
        'modal.text' => 'required|string',
        'modal.text_btn' => 'required',
        'modal.publish' => 'nullable',
        
    ];

    protected $validationAttributes = [
        'modal.title' => 'título',
        'modal.text' => 'texto',
        'modal.text_btn' => 'texto do botão',
        'modal.publish' => 'publicado',
    ];


    public function mount(){
        $this->modal = new Modal();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addItem()
    {
        $this->modal = new Modal();
        $this->open = true;
    }
    
    
    public function save()
    {
        $this->validate();  
        $this->modal->save();
        $this->emitUp('modalUpdated'); //atualiza modal
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.modal.create');
    }
}
