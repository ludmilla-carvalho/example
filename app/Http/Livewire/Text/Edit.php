<?php

namespace App\Http\Livewire\Text;

use Livewire\Component;
use App\Models\Text;

class Edit extends Component
{
    public Text $text;
    
    protected $validationAttributes = [
        'text.title' => 'título',
        'text.title_en' => 'título (en)',
        'text.text' => 'texto',
        'text.text_en' => 'texto (en)',
    ];


    protected function rules()
    {
        return [
            'text.title' => 'required|string|min:3|max:191',
            'text.title_en' => 'required|string|min:3|max:191',
            'text.text' => 'string',
            'text.text_en' => 'string',
            'text.publish' => ''
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function showItem($id)
    {
        $this->text = Text::find($id);
    }
    
    public function save()
    {
        $this->validate();  
        $this->text->update($this->text->toArray());
        $this->emitUp('pageUpdated'); //atualiza page.edit
    }

    public function render()
    {
        return view('livewire.text.edit');
    }
}
