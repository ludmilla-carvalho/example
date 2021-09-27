<?php

namespace App\Http\Livewire\City;

use Livewire\Component;
use App\Models\City;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public City $city;
    public $open = false;
    

    protected $listeners = ['open' => 'showItem'];

    
    public function mount(){
        $this->city = new City();
    }

    public function showItem($id)
    {
        $this->open = true;
        $this->city = City::find($id);
    }

    public function delete(){
        $this->city->delete();
        $this->emitUp('cityUpdated'); //atualiza city.index
        $this->open = false;
    }
    
    public function render()
    {
        return view('livewire.city.delete');
    }
}
