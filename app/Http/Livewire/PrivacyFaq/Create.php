<?php

namespace App\Http\Livewire\PrivacyFaq;

use Livewire\Component;
use App\Models\PrivacyFaq;
use Illuminate\Support\Str;

class Create extends Component
{
    public PrivacyFaq $privacyFaq;
    public $open = false;
    
    protected $listeners = [
        'open' => 'addItem'
    ];

    protected $rules = [
        'privacyFaq.title' => 'required|unique:privacy_faqs,title,null|string|min:3|max:191',
        'privacyFaq.title_en' => 'required',
        'privacyFaq.text' => 'required',
        'privacyFaq.text_en' => 'required',
    ];

    protected $validationAttributes = [
        'privacyFaq.title' => 'título',
        'privacyFaq.title_en' => 'título (en)',
        'privacyFaq.text' => 'texto',
        'privacyFaq.text_en' => 'texto (en)',
    ];


    public function mount(){
        $this->privacyFaq = new PrivacyFaq();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addItem()
    {
        $this->privacyFaq = new PrivacyFaq();
        $this->open = true;
    }
    
    
    public function save()
    {
        $this->validate();
        $this->privacyFaq->save();
        $this->emitUp('privacyFaqUpdated'); //atualiza privacy_faq
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.privacy_faq.create');
    }
}
