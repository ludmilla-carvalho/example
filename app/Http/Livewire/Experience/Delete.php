<?php

namespace App\Http\Livewire\Experience;

use Livewire\Component;
use App\Models\Experience;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public Experience $experience;
    public $open = false;
    

    protected $listeners = ['open' => 'showItem'];

    
    public function mount(){
        $this->experience = new Experience();
    }

    public function showItem($id)
    {
        $this->open = true;
        $this->experience = Experience::find($id);
    }

    public function delete(){
        $this->experience->delete();
        $this->emitUp('experienceUpdated'); //atualiza experience.index
        $this->open = false;
    }
    
    public function render()
    {
        return view('livewire.experience.delete');
    }
}
