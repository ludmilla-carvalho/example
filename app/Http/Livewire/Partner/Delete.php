<?php

namespace App\Http\Livewire\Partner;

use Livewire\Component;
use App\Models\Partner;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public Partner $partner;
    public $open = false;
    

    protected $listeners = ['open' => 'showItem'];

    
    public function mount(){
        $this->partner = new Partner();
    }

    public function showItem($id)
    {
        $this->open = true;
        $this->partner = Partner::find($id);
    }

    public function delete(){
        $this->partner->delete();
        $this->emitUp('partnerUpdated'); //atualiza partner.index
        $this->open = false;
    }
    
    public function render()
    {
        return view('livewire.partner.delete');
    }
}
