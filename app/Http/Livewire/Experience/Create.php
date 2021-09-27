<?php

namespace App\Http\Livewire\Experience;

use Livewire\Component;
use App\Models\Experience;

class Create extends Component
{
    public Experience $experience;
    public $open = false;
    
    protected $listeners = [
        'open' => 'addItem'
    ];

    protected $rules = [
        'experience.title' => 'required|unique:experiences,title,null|string|min:3|max:191',
        'experience.title_en' => 'required|string|min:3|max:191'
    ];

    protected $validationAttributes = [
        'experience.title' => 'título',
        'experience.title_en' => 'título (en)',
    ];


    public function mount(){
        $this->experience = new Experience();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addItem()
    {
        $this->experience = new Experience();
        $this->open = true;
    }
    
    
    public function save()
    {
        $this->validate();  
        $this->experience->save();
        $this->emitUp('experienceUpdated'); //atualiza experience
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.experience.create');
    }
}
