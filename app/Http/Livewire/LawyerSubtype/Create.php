<?php

namespace App\Http\Livewire\LawyerSubtype;

use Livewire\Component;
use App\Models\LawyerSubtype;
use App\Models\LawyerType;
use Illuminate\Support\Str;

class Create extends Component
{
    public LawyerSubtype $lawyerSubtype;
    public $lawyerType;
    public $open = false;
    
    protected $listeners = [
        'open' => 'addItem'
    ];

    protected $rules = [
        'lawyerSubtype.title' => 'required|unique:lawyer_subtypes,title,null|string|min:3|max:191',
        'lawyerSubtype.title_en' => 'required',
        'lawyerSubtype.plural' => 'required',
        'lawyerSubtype.plural_en' => 'required',
        'lawyerSubtype.feminine' => 'required',
        'lawyerSubtype.feminine_en' => 'required',
        'lawyerSubtype.lawyer_type_id' => 'required',
    ];

    protected $validationAttributes = [
        'lawyerSubtype.title' => 'título',
        'lawyerSubtype.title_en' => 'título (en)',
        'lawyerSubtype.plural' => 'plural',
        'lawyerSubtype.plural_en' => 'plural (en)',
        'lawyerSubtype.feminine' => 'feminino',
        'lawyerSubtype.feminine_en' => 'feminino (en)',
        'lawyerSubtype.lawyer_type_id' => 'categoria',
    ];


    public function mount(){
        $this->lawyerSubtype = new LawyerSubtype();
        $this->lawyerType = LawyerType::orderBy('title')->get();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addItem()
    {
        $this->lawyerSubtype = new LawyerSubtype();
        $this->emit('clearLawyerTypeId');
        $this->open = true;
    }
    
    
    public function save()
    {
        $this->validate();  
        $this->lawyerSubtype->slug = Str::slug($this->lawyerSubtype->title, '-');
        $this->lawyerSubtype->save();
        $this->emitUp('lawyerSubtypeUpdated'); //atualiza lawyer_subtype
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.lawyer_subtype.create');
    }
}
