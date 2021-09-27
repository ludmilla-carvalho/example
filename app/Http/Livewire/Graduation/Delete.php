<?php

namespace App\Http\Livewire\Graduation;

use Livewire\Component;
use App\Models\Graduation;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public Graduation $graduation;
    public $open = false;
    

    protected $listeners = ['open' => 'showItem'];

    
    public function mount(){
        $this->graduation = new Graduation();
    }

    public function showItem($id)
    {
        $this->open = true;
        $this->graduation = Graduation::find($id);
    }

    public function delete(){
        $this->graduation->delete();
        $this->emitUp('graduationUpdated'); //atualiza graduation.index
        $this->open = false;
    }
    
    public function render()
    {
        return view('livewire.graduation.delete');
    }
}
