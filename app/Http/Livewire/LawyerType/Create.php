<?php

namespace App\Http\Livewire\LawyerType;

use Livewire\Component;
use App\Models\LawyerType;
use Illuminate\Support\Str;

class Create extends Component
{
    public LawyerType $lawyerType;
    public $open = false;
    
    protected $listeners = [
        'open' => 'addItem'
    ];

    protected $rules = [
        'lawyerType.title' => 'required|unique:lawyer_types,title,null|string|min:3|max:191',
        'lawyerType.title_en' => 'required',
        'lawyerType.plural' => 'required',
        'lawyerType.plural_en' => 'required',
        'lawyerType.feminine' => 'required',
        'lawyerType.feminine_en' => 'required',
    ];

    protected $validationAttributes = [
        'lawyerType.title' => 'título',
        'lawyerType.title_en' => 'título (en)',
        'lawyerType.plural' => 'plural',
        'lawyerType.plural_en' => 'plural (en)',
        'lawyerType.feminine' => 'feminino',
        'lawyerType.feminine_en' => 'feminino (en)',
    ];


    public function mount(){
        $this->lawyerType = new LawyerType();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addItem()
    {
        $this->lawyerType = new LawyerType();
        $this->open = true;
    }
    
    
    public function save()
    {
        $this->validate();  
        $this->lawyerType->slug = Str::slug($this->lawyerType->title, '-');
        $this->lawyerType->save();
        $this->emitUp('lawyerTypeUpdated'); //atualiza lawyer_type
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.lawyer_type.create');
    }
}
