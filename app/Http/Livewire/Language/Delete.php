<?php

namespace App\Http\Livewire\Language;

use Livewire\Component;
use App\Models\Language;
use Illuminate\Support\Facades\Storage;

class Delete extends Component
{
    public Language $language;
    public $open = false;
    

    protected $listeners = ['open' => 'showItem'];

    
    public function mount(){
        $this->language = new Language();
    }

    public function showItem($id)
    {
        $this->open = true;
        $this->language = Language::find($id);
    }

    public function delete(){
        $this->language->delete();
        $this->emitUp('languageUpdated'); //atualiza language.index
        $this->open = false;
    }
    
    public function render()
    {
        return view('livewire.language.delete');
    }
}
