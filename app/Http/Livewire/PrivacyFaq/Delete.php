<?php

namespace App\Http\Livewire\PrivacyFaq;

use Livewire\Component;
use App\Models\PrivacyFaq;

class Delete extends Component
{
    public PrivacyFaq $privacyFaq;
    public $open = false;
    

    protected $listeners = ['open' => 'showItem'];

    
    public function mount(){
        $this->privacyFaq = new PrivacyFaq();
    }

    public function showItem($id)
    {
        $this->open = true;
        $this->privacyFaq = PrivacyFaq::find($id);
    }

    public function delete(){
        $this->privacyFaq->delete();
        $this->emitUp('privacyFaqUpdated'); //atualiza privacy_faq.index
        $this->open = false;
    }
    
    public function render()
    {
        return view('livewire.privacy_faq.delete');
    }
}
