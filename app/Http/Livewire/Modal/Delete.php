<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Modal;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public Modal $modal;
    public $open = false;
    

    protected $listeners = ['open' => 'showItem'];

    
    public function mount(){
        $this->modal = new Modal();
    }

    public function showItem($id)
    {
        $this->open = true;
        $this->modal = Modal::find($id);
    }

    public function delete(){
        $this->modal->delete();
        $this->emitUp('modalUpdated'); //atualiza modal.index
        $this->open = false;
    }
    
    public function render()
    {
        return view('livewire.modal.delete');
    }
}
