<?php

namespace App\Http\Livewire\Speaker;

use Livewire\Component;
use App\Models\Speaker;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public Speaker $speaker;
    public $open = false;
    

    protected $listeners = ['open' => 'showItem'];

    
    public function mount(){
        $this->speaker = new Speaker();
    }

    public function showItem($id)
    {
        $this->open = true;
        $this->speaker = Speaker::find($id);
    }

    public function delete(){
        $this->speaker->delete();
        $this->emitUp('speakerUpdated'); //atualiza speaker.index
        $this->open = false;
    }
    
    public function render()
    {
        return view('livewire.speaker.delete');
    }
}
