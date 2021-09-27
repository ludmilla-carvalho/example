<?php

namespace App\Http\Livewire\Language;

use Livewire\Component;
use App\Models\Language;

class Create extends Component
{
    public Language $language;
    public $open = false;
    
    protected $listeners = [
        'open' => 'addItem'
    ];

    protected $rules = [
        'language.title' => 'required|unique:languages,title,null|string|min:3|max:191',
        'language.title_en' => 'required|string|min:3|max:191'
    ];

    protected $validationAttributes = [
        'language.title' => 'título',
        'language.title_en' => 'título (en)',
    ];


    public function mount(){
        $this->language = new Language();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addItem()
    {
        $this->language = new Language();
        $this->open = true;
    }
    
    
    public function save()
    {
        $this->validate();  
        $this->language->save();
        $this->emitUp('languageUpdated'); //atualiza language
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.language.create');
    }
}
