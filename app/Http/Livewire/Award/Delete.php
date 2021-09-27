<?php

namespace App\Http\Livewire\Award;

use Livewire\Component;
use App\Models\Award;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public Award $award;
    public $open = false;
    

    protected $listeners = ['open' => 'showItem'];

    
    public function mount(){
        $this->award = new Award();
    }

    public function showItem($id)
    {
        $this->open = true;
        $this->award = Award::find($id);
    }

    public function delete(){
        Storage::delete('public/awards/' . $this->award->image);
        $this->award->delete();
        $this->emitUp('awardUpdated'); //atualiza award.index
        $this->open = false;
    }
    
    public function render()
    {
        return view('livewire.award.delete');
    }
}
