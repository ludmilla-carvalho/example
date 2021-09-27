<?php

namespace App\Http\Livewire\Language;

use Livewire\Component;
use App\Models\Language;

class Edit extends Component
{
    public Language $language;
    public $open = false;
    
    protected $listeners = [
        'open' => 'showItem'
    ];

    protected $validationAttributes = [
        'language.title' => 'título',
        'language.title_en' => 'título (en)',
    ];


    public function mount(){
        $this->language = new Language();
    }

    protected function rules()
    {
        return [
            'language.title' => 'required|string|min:3|max:191|unique:languages,title,' . $this->language->id,
            'language.title_en' => 'required|string|min:3|max:191'
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function showItem($id)
    {
        $this->language = Language::find($id);
        $this->open = true;
    }
    
    public function save()
    {
        $this->validate();  
        $this->language->update($this->language->toArray());
        $this->emitUp('languageUpdated');
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.language.edit');
    }
}
