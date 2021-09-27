<?php

namespace App\Http\Livewire\Experience;

use Livewire\Component;
use App\Models\Experience;

class Edit extends Component
{
    public Experience $experience;
    public $open = false;
    
    protected $listeners = [
        'open' => 'showItem'
    ];

    protected $validationAttributes = [
        'experience.title' => 'título',
        'experience.title_en' => 'título (en)',
    ];


    public function mount(){
        $this->experience = new Experience();
    }

    protected function rules()
    {
        return [
            'experience.title' => 'required|string|min:3|max:191|unique:experiences,title,' . $this->experience->id,
            'experience.title_en' => 'required|string|min:3|max:191'
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function showItem($id)
    {
        $this->experience = Experience::find($id);
        $this->open = true;
    }
    
    public function save()
    {
        $this->validate();  
        $this->experience->update($this->experience->toArray());
        $this->emitUp('experienceUpdated');
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.experience.edit');
    }
}
