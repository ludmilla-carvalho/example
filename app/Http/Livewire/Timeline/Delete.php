<?php

namespace App\Http\Livewire\Timeline;

use Livewire\Component;
use App\Models\Timeline;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public Timeline $timeline;
    public $open = false;
    

    protected $listeners = ['open' => 'showItem'];

    
    public function mount(){
        $this->timeline = new Timeline();
    }

    public function showItem($id)
    {
        $this->open = true;
        $this->timeline = Timeline::find($id);
    }

    public function delete(){
        $this->timeline->delete();
        $this->emitUp('timelineUpdated'); //atualiza timeline.index
        $this->open = false;
    }
    
    public function render()
    {
        return view('livewire.timeline.delete');
    }
}
