<?php

namespace App\Http\Livewire\Event;

use Livewire\Component;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public Event $event;
    public $open = false;
    

    protected $listeners = ['open' => 'showItem'];

    
    public function mount(){
        $this->event = new Event();
    }

    public function showItem($id)
    {
        $this->open = true;
        $this->event = Event::find($id);
    }

    public function delete(){
        $this->event->delete();
        $this->emitUp('eventUpdated'); //atualiza event.index
        $this->open = false;
    }
    
    public function render()
    {
        return view('livewire.event.delete');
    }
}
