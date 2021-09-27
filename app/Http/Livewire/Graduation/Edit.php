<?php

namespace App\Http\Livewire\Graduation;

use Livewire\Component;
use App\Models\Graduation;

class Edit extends Component
{
    public Graduation $graduation;
    public $open = false;
    
    protected $listeners = [
        'open' => 'showItem'
    ];

    protected $validationAttributes = [
        'graduation.title' => 'título',
        'graduation.title_en' => 'título (en)',
    ];


    public function mount(){
        $this->graduation = new Graduation();
    }

    protected function rules()
    {
        return [
            'graduation.title' => 'required|string|min:3|max:191|unique:graduations,title,' . $this->graduation->id,
            'graduation.title_en' => 'required|string|min:3|max:191'
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function showItem($id)
    {
        $this->graduation = Graduation::find($id);
        $this->open = true;
    }
    
    public function save()
    {
        $this->validate();  
        $this->graduation->update($this->graduation->toArray());
        $this->emitUp('graduationUpdated');
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.graduation.edit');
    }
}
