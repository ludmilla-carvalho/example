<?php

namespace App\Http\Livewire\Area;

use Livewire\Component;
use App\Models\Area;

class Related extends Component
{
    public Area $area;
    public $open = false;
    public $areas = [];
    public $selected = [];
    
    protected $listeners = [
        'open' => 'showItem'
    ];

    public function mount(){
        $this->area = new Area();
    }

    public function showItem($id)
    {
        $this->area = Area::find($id);
        $this->areas = Area::whereNotIn('id', [$id])->get()->toArray();
        $this->selected = [];
        foreach($this->area->related as $item){
            $this->selected[] = "$item->id";
        }
        $this->open = true;
    }
    
    public function save()
    {
        $this->area->related()->sync($this->selected);
        $this->emitUp('areaUpdated');
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.area.related');
    }
}
