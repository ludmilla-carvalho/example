<?php

namespace App\Http\Livewire\Modal;

use Livewire\Component;
use App\Models\Modal;
class Edit extends Component
{
    public Modal $modal;
    public $open = false;
    
    protected $listeners = [
        'open' => 'showItem',
        'tooglePublish' => 'tooglePublish'
    ];

    protected $validationAttributes = [
        'modal.title' => 'título',
        'modal.text' => 'texto',
        'modal.text_btn' => 'texto do botão',
        'modal.publish' => 'publicado',
    ];

    protected function rules()
    {
        return [
        'modal.title' => 'required|string|min:2|max:191|unique:modals,title,' . $this->modal->id,
        'modal.text' => 'required|string',
        'modal.text_btn' => 'required',
        'modal.publish' => 'nullable',
        ];
    }


    public function mount(){
        $this->modal = new Modal();
        
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function showItem($id)
    {
        $this->modal = Modal::find($id);
        $this->open = true;
    }

    public function tooglePublish($id)
    {
        $this->modal = Modal::find($id);
        if($this->modal->publish == 1){
            $this->modal->publish = 0;
        }else{
            $this->modal->publish = 1;
        }
        $this->modal->save();
        $this->emitUp('modalUpdated');
    }
    
    public function save()
    {
        $this->validate();  
        $this->modal->update($this->modal->toArray());
        $this->emitUp('modalUpdated');
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.modal.edit');
    }
}
