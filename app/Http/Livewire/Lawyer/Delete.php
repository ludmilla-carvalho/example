<?php

namespace App\Http\Livewire\Lawyer;

use Livewire\Component;
use App\Models\Lawyer;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public $lawyer;
    public $open = false;
    

    protected $listeners = ['open' => 'showItem'];

    
    public function mount(){
        $this->lawyer = new Lawyer();
    }

    public function showItem($id)
    {
        $this->open = true;
        $this->lawyer = Lawyer::find($id);
    }

    public function delete(){
        Storage::delete('public/lawyers/' . $this->lawyer->icon);
        Storage::delete('public/lawyers/' . $this->lawyer->image);
        $this->lawyer->delete();
        $this->emitUp('lawyerUpdated'); //atualiza lawyer.index
        $this->open = false;
    }
    
    public function render()
    {
        return view('livewire.lawyer.delete');
    }
}
