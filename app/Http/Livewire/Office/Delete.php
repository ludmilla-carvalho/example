<?php

namespace App\Http\Livewire\Office;

use Livewire\Component;
use App\Models\Office;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public Office $office;
    public $open = false;
    

    protected $listeners = ['open' => 'showItem'];

    
    public function mount(){
        $this->office = new Office();
    }

    public function showItem($id)
    {
        $this->open = true;
        $this->office = Office::find($id);
    }

    public function delete(){
        Storage::delete('public/offices/' . $this->office->image);
        $this->office->delete();
        $this->emitUp('officeUpdated'); //atualiza office.index
        $this->open = false;
    }
    
    public function render()
    {
        return view('livewire.office.delete');
    }
}
