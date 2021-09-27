<?php

namespace App\Http\Livewire\AwardType;

use Livewire\Component;
use App\Models\AwardType;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public AwardType $awardType;
    public $open = false;
    

    protected $listeners = ['open' => 'showItem'];

    
    public function mount(){
        $this->awardType = new AwardType();
    }

    public function showItem($id)
    {
        $this->open = true;
        $this->awardType = AwardType::find($id);
    }

    public function delete(){
        Storage::delete('public/award_types/' . $this->awardType->image);
        $this->awardType->delete();
        $this->emitUp('awardTypeUpdated'); //atualiza award_type.index
        $this->open = false;
    }
    
    public function render()
    {
        return view('livewire.award_type.delete');
    }
}
