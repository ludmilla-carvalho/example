<?php

namespace App\Http\Livewire\LawyerType;

use Livewire\Component;
use App\Models\LawyerType;
use Illuminate\Support\Str;

class Edit extends Component
{
    public LawyerType $lawyerType;
    public $open = false;
    
    protected $listeners = [
        'open' => 'showItem'
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

    protected function rules()
    {
        return [
            'lawyerType.title' => 'required|string|min:3|max:191|unique:lawyer_types,title,' . $this->lawyerType->id,
            'lawyerType.title_en' => 'required',
            'lawyerType.plural' => 'required',
            'lawyerType.plural_en' => 'required',
            'lawyerType.feminine' => 'required',
            'lawyerType.feminine_en' => 'required',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function showItem($id)
    {
        $this->lawyerType = LawyerType::find($id);
        $this->open = true;
    }
    
    public function save()
    {
        $this->validate();
        $this->lawyerType->slug = Str::slug($this->lawyerType->title, '-');
        $this->lawyerType->update($this->lawyerType->toArray());
        $this->emitUp('lawyer_typeUpdated');
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.lawyer_type.edit');
    }
}
