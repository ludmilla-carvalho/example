<?php

namespace App\Http\Livewire\Lawyer;

use Livewire\Component;
use App\Models\Lawyer;
use App\Models\Area;

class Related extends Component
{
    public $lawyer;
    public $open = false;
    public $areas = [];
    public $selected = [];
    
    protected $listeners = [
        'open' => 'showItem'
    ];

    public function mount(){
        $this->lawyer = new Lawyer();
    }

    public function showItem($id)
    {
        $this->lawyer = Lawyer::find($id);
        $this->areas = Area::get()->toArray();
        $this->selected = [];
        foreach($this->lawyer->areas as $item){
            $this->selected[] = "$item->id";
        }
        $this->open = true;
    }
    
    public function save()
    {
        $this->lawyer->areas()->sync($this->selected);
        $this->emitUp('lawyerUpdated');
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.lawyer.related');
    }
}
