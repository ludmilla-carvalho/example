<?php

namespace App\Http\Livewire\Highlight;

use Livewire\Component;
use App\Models\Highlight;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public Highlight $highlight;
    public $open = false;
    

    protected $listeners = ['open' => 'showItem'];

    
    public function mount(){
        $this->highlight = new Highlight();
    }

    public function showItem($id)
    {
        $this->open = true;
        $this->highlight = Highlight::find($id);
    }

    public function delete(){
        Storage::delete('public/highlights/' . $this->highlight->page_id . '/' . $this->highlight->image);
        Storage::delete('public/highlights/' . $this->highlight->page_id . '/' . $this->highlight->image_mobile);
        $this->highlight->delete();
        $this->emitUp('pageUpdated'); //atualiza page.edit
        $this->open = false;
        
    }
    
    public function render()
    {
        return view('livewire.highlight.delete');
    }
}
