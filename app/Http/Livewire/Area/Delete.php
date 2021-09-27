<?php

namespace App\Http\Livewire\Area;

use Livewire\Component;
use App\Models\Area;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public Area $area;
    public $open = false;
    

    protected $listeners = ['open' => 'showItem'];

    
    public function mount(){
        $this->area = new Area();
    }

    public function showItem($id)
    {
        $this->open = true;
        $this->area = Area::find($id);
    }

    public function delete(){
        Storage::delete('public/areas/' . $this->area->icon);
        Storage::delete('public/areas/' . $this->area->image);
        $this->area->delete();
        $this->emitUp('areaUpdated'); //atualiza area.index
        $this->open = false;
    }
    
    public function render()
    {
        return view('livewire.area.delete');
    }
}
