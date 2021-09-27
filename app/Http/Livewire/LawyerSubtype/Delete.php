<?php

namespace App\Http\Livewire\LawyerSubtype;

use Livewire\Component;
use App\Models\LawyerSubtype;

class Delete extends Component
{
    public LawyerSubtype $lawyerSubtype;
    public $open = false;
    

    protected $listeners = ['open' => 'showItem'];

    
    public function mount(){
        $this->lawyerSubtype = new LawyerSubtype();
    }

    public function showItem($id)
    {
        $this->open = true;
        $this->lawyerSubtype = LawyerSubtype::find($id);
    }

    public function delete(){
        $this->lawyerSubtype->delete();
        $this->emitUp('lawyerSubtypeUpdated'); //atualiza lawyer_subtype.index
        $this->open = false;
    }
    
    public function render()
    {
        return view('livewire.lawyer_subtype.delete');
    }
}
