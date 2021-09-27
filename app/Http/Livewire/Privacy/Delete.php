<?php

namespace App\Http\Livewire\Privacy;

use Livewire\Component;
use App\Models\Privacy;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public Privacy $privacy;
    public $open = false;
    

    protected $listeners = ['open' => 'showItem'];

    
    public function mount(){
        $this->privacy = new Privacy();
    }

    public function showItem($id)
    {
        $this->open = true;
        $this->privacy = Privacy::find($id);
    }

    public function delete(){
        $this->privacy->delete();
        $this->emitUp('privacyUpdated'); //atualiza privacy.index
        $this->open = false;
    }
    
    public function render()
    {
        return view('livewire.privacy.delete');
    }
}
