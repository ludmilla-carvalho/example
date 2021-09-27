<?php

namespace App\Http\Livewire\City;

use Livewire\Component;
use App\Models\City;

class Edit extends Component
{
    public City $city;
    public $open = false;
    
    protected $listeners = [
        'open' => 'showItem'
    ];

    protected $validationAttributes = [
        'city.title' => 'nome',
        'city.title_en' => 'nome (en)',
    ];


    public function mount(){
        $this->city = new City();
    }

    protected function rules()
    {
        return [
            'city.title' => 'required|string|min:3|max:191|unique:cities,title,' . $this->city->id,
            'city.title_en' => 'required|string|min:3|max:191'
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function showItem($id)
    {
        $this->city = City::find($id);
        $this->open = true;
    }
    
    public function save()
    {
        $this->validate();  
        $this->city->update($this->city->toArray());
        $this->emitUp('cityUpdated');
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.city.edit');
    }
}
