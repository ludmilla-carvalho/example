<?php

namespace App\Http\Livewire\Term;

use Livewire\Component;
use App\Models\Term;
class Edit extends Component
{
    public Term $term;
    public $open = false;
    
    protected $listeners = [
        'open' => 'showItem',
        'tooglePublish' => 'tooglePublish'
    ];

    protected $validationAttributes = [
        'term.title' => 'título',
        'term.title_en' => 'título (en)',
        'term.text' => 'texto',
        'term.text_en' => 'texto (en)',
        'term.version' => 'versão',
    ];

    protected function rules()
    {
        return [
        'term.title' => 'required|string|min:3|max:191',
        'term.title_en' => 'required',
        'term.text' => 'required|string',
        'term.text_en' => 'required',
        'term.version' => 'required',
        ];
    }


    public function mount(){
        $this->term = new Term();
        
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function showItem($id)
    {
        $this->term = Term::find($id);
        $this->open = true;
    }

    public function save()
    {
        $this->validate();  
        $this->term->update($this->term->toArray());
        $this->emitUp('termUpdated');
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.term.edit');
    }
}
