<?php

namespace App\Http\Livewire\LawyerSubtype;

use Livewire\Component;
use App\Models\LawyerSubtype;
use App\Models\LawyerType;
use Illuminate\Support\Str;

class Edit extends Component
{
    public LawyerSubtype $lawyerSubtype;
    public $lawyerType;
    public $open = false;
    
    protected $listeners = [
        'open' => 'showItem'
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

    protected function rules()
    {
        return [
            'lawyerSubtype.title' => 'required|string|min:3|max:191|unique:lawyer_subtypes,title,' . $this->lawyerSubtype->id,
            'lawyerSubtype.title_en' => 'required',
            'lawyerSubtype.plural' => 'required',
            'lawyerSubtype.plural_en' => 'required',
            'lawyerSubtype.feminine' => 'required',
            'lawyerSubtype.feminine_en' => 'required',
            'lawyerSubtype.lawyer_type_id' => 'required',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function showItem($id)
    {
        $this->lawyerSubtype = LawyerSubtype::find($id);
        $this->emit('clearLawyerTypeId');
        $this->open = true;
    }
    
    public function save()
    {
        $this->validate();
        $this->lawyerSubtype->slug = Str::slug($this->lawyerSubtype->title, '-');
        $this->lawyerSubtype->update($this->lawyerSubtype->toArray());
        $this->emitUp('lawyer_subtypeUpdated');
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.lawyer_subtype.edit');
    }
}
