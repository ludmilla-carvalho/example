<?php

namespace App\Http\Livewire\Graduation;

use Livewire\Component;
use App\Models\Graduation;

class Create extends Component
{
    public Graduation $graduation;
    public $open = false;
    
    protected $listeners = [
        'open' => 'addItem'
    ];

    protected $rules = [
        'graduation.title' => 'required|unique:graduations,title,null|string|min:3|max:191',
        'graduation.title_en' => 'required|string|min:3|max:191'
    ];

    protected $validationAttributes = [
        'graduation.title' => 'título',
        'graduation.title_en' => 'título (en)',
    ];


    public function mount(){
        $this->graduation = new Graduation();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addItem()
    {
        $this->graduation = new Graduation();
        $this->open = true;
    }
    
    
    public function save()
    {
        $this->validate();  
        $this->graduation->save();
        $this->emitUp('graduationUpdated'); //atualiza graduation
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.graduation.create');
    }
}
