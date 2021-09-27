<?php

namespace App\Http\Livewire\Text;

use Livewire\Component;
use App\Models\Text;

class Create extends Component
{
    public Text $text;
    public $page;
    
    protected $rules =  [
        'text.title' => 'required|string|min:3|max:191',
        'text.title_en' => 'required|string|min:3|max:191',
        'text.text' => 'string',
        'text.text_en' => 'string',
        'text.publish' => ''
    ];
    
    protected $validationAttributes = [
        'text.title' => 'título',
        'text.title_en' => 'título (en)',
        'text.text' => 'texto',
        'text.text_en' => 'texto (en)',
    ];

    public function mount($page){
        $this->text = new Text();
        $this->page = $page;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function clearItem()
    {
        $this->Text = new Text();
    }
    
    public function save()
    {
        $this->validate();  

        //pasta onde a imagem será gravada
        //o que diferencia página de subpágina é a presença do ícone
        if(isset($this->page->icon)){
            $this->text->page_id = $this->page->id;
        }else{
            $this->text->sub_page_id = $this->page->id;
        }
        
        $this->text->save($this->text->toArray());
        $this->emitUp('pageUpdated'); //atualiza page.edit
    }

    public function render()
    {
        return view('livewire.text.create');
    }
}
