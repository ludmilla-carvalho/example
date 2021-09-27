<?php

namespace App\Http\Livewire\City;

use Livewire\Component;
use App\Models\City;

class Create extends Component
{
    public City $city;
    public $open = false;
    
    protected $listeners = [
        'open' => 'addItem'
    ];

    protected $rules = [
        'city.title' => 'required|unique:cities,title,null|string|min:3|max:191',
        'city.title_en' => 'required|string|min:3|max:191'
    ];

    protected $validationAttributes = [
        'city.title' => 'nome',
        'city.title_en' => 'nome (en)',
    ];


    public function mount(){
        $this->city = new City();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addItem()
    {
        $this->city = new City();
        $this->open = true;
    }
    
    
    public function save()
    {
        $this->validate();  
        $this->city->save();
        $this->emitUp('cityUpdated'); //atualiza city
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.city.create');
    }
}
