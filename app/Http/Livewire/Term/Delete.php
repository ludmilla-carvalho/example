<?php

namespace App\Http\Livewire\Term;

use Livewire\Component;
use App\Models\Term;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public Term $term;
    public $open = false;
    

    protected $listeners = ['open' => 'showItem'];

    
    public function mount(){
        $this->term = new Term();
    }

    public function showItem($id)
    {
        $this->open = true;
        $this->term = Term::find($id);
    }

    public function delete(){
        $this->term->delete();
        $this->emitUp('termUpdated'); //atualiza term.index
        $this->open = false;
    }
    
    public function render()
    {
        return view('livewire.term.delete');
    }
}
