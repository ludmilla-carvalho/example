<?php

namespace App\Http\Livewire\Privacy;

use Livewire\Component;
use App\Models\Privacy;

class Create extends Component
{
    public Privacy $privacy;
    public $open = false;

    protected $listeners = [
        'open' => 'addItem'
    ];
    
    protected $rules = [
        'privacy.title' => 'required|string|min:3|max:191',
        'privacy.title_en' => 'required',
        'privacy.text' => 'required|string',
        'privacy.text_en' => 'required',
        'privacy.version' => 'required',
        
    ];

    protected $validationAttributes = [
        'privacy.title' => 'título',
        'term.title_en' => 'título (en)',
        'privacy.text' => 'texto',
        'privacy.text_en' => 'texto (en)',
        'privacy.version' => 'versão',
    ];


    public function mount(){
        $this->privacy = new Privacy();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addItem()
    {
        $this->privacy = new Privacy();
        $this->open = true;
    }
    
    
    public function save()
    {
        $this->validate();  
        $this->privacy->save();
        $this->emitUp('privacyUpdated'); //atualiza privacy
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.privacy.create', [
            'title' => 'Política de Privacidade',
            'sub_title' => 'Adicionar Política de Privacidade',
            'svg' => 'M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'
        ])->layout('layouts.app', [
            'title' => 'Política de Privacidade'
        ]);
    }
}
