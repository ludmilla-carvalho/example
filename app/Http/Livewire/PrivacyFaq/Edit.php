<?php

namespace App\Http\Livewire\PrivacyFaq;

use Livewire\Component;
use App\Models\PrivacyFaq;
use Illuminate\Support\Str;

class Edit extends Component
{
    public PrivacyFaq $privacyFaq;
    public $open = false;
    
    protected $listeners = [
        'open' => 'showItem'
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

    protected function rules()
    {
        return [
            'privacyFaq.title' => 'required|string|min:3|max:191|unique:privacy_faqs,title,' . $this->privacyFaq->id,
            'privacyFaq.title_en' => 'required',
            'privacyFaq.text' => 'required',
            'privacyFaq.text_en' => 'required',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function showItem($id)
    {
        $this->privacyFaq = PrivacyFaq::find($id);
        $this->open = true;
    }
    
    public function save()
    {
        $this->validate();
        $this->privacyFaq->update($this->privacyFaq->toArray());
        $this->emitUp('privacy_faqUpdated');
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.privacy_faq.edit');
    }
}
