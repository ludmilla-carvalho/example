<?php

namespace App\Http\Livewire\LawyerType;

use Livewire\Component;
use App\Models\LawyerType;

class Delete extends Component
{
    public LawyerType $lawyerType;
    public $open = false;
    

    protected $listeners = ['open' => 'showItem'];

    
    public function mount(){
        $this->lawyerType = new LawyerType();
    }

    public function showItem($id)
    {
        $this->open = true;
        $this->lawyerType = LawyerType::find($id);
    }

    public function delete(){
        $this->lawyerType->delete();
        $this->emitUp('lawyerTypeUpdated'); //atualiza lawyer_type.index
        $this->open = false;
    }
    
    public function render()
    {
        return view('livewire.lawyer_type.delete');
    }
}
