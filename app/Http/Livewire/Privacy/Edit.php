<?php

namespace App\Http\Livewire\Privacy;

use Livewire\Component;
use App\Models\Privacy;

class Edit extends Component
{
    public Privacy $privacy;
    public $open = false;

    protected $listeners = [
        'open' => 'showItem',
    ];

    protected $validationAttributes = [
        'privacy.title' => 'título',
        'term.title_en' => 'título (en)',
        'privacy.text' => 'texto',
        'privacy.text_en' => 'texto (en)',
        'privacy.version' => 'versão',
    ];

    protected function rules()
    {
        return [
        'privacy.title' => 'required|string|min:3|max:191',
        'privacy.title_en' => 'required',
        'privacy.text' => 'required|string',
        'privacy.text_en' => 'required',
        'privacy.version' => 'required',
        ];
    }


    public function mount(){
        $this->privacy = new Privacy();
    }

    public function showItem($id)
    {
        $this->privacy = Privacy::find($id);
        $this->open = true;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();  
        $this->privacy->update($this->privacy->toArray());
        $this->emitUp('privacyUpdated'); //atualiza privacy
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.privacy.edit',[
            'title' => 'Política de Privacidade',
            'sub_title' => 'Editar Política de Privacidade',
            'svg' => 'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z'
        ])->layout('layouts.app', [
            'title' => 'Política de Privacidade'
        ]);
    }
}
