<?php

namespace App\Http\Livewire\Term;

use Livewire\Component;
use App\Models\Term;

class Create extends Component
{
    public Term $term;
    public $open = false;
    
    protected $listeners = [
        'open' => 'addItem'
    ];

    protected $rules = [
        'term.title' => 'required|string|min:3|max:191',
        'term.title_en' => 'required',
        'term.text' => 'required|string',
        'term.text_en' => 'required',
        'term.version' => 'required',
        
    ];

    protected $validationAttributes = [
        'term.title' => 'título',
        'term.title_en' => 'título (en)',
        'term.text' => 'texto',
        'term.text_en' => 'texto (en)',
        'term.version' => 'versão',
    ];


    public function mount(){
        $this->term = new Term();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addItem()
    {
        $this->term = new Term();
        $this->open = true;
    }
    
    
    public function save()
    {
        $this->validate();  
        $this->term->save();
        $this->emitUp('termUpdated'); //atualiza term
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.term.create');
    }
}
