<?php

namespace App\Http\Livewire\Award;

use Livewire\Component;
use App\Models\Award;
use App\Models\AwardType;

class Create extends Component
{
    public Award $award;
    public $awardType;
    public $open = false;

    protected $listeners = [
        'open' => 'addItem'
    ];

    protected $rules = [
        'award.title' => 'required|string|min:3|max:191',
        'award.award_type_id' => 'required',
        'award.text' => 'string',
        'award.text_en' => 'string',
    ];

    protected $validationAttributes = [
        'award.title' => 'título',
        'award.award_type_id' => 'tipo de reconhecimento',
        'award.text' => 'texto',
        'award.text_en' => 'texto (en)',
    ];


    public function mount(){
        $this->award = new Award();
        $this->awardType = AwardType::orderBy('title')->get();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addItem()
    {
        $this->award = new Award();
        $this->awardType = AwardType::orderBy('title')->get();
        $this->emit('clearAwardType');
        $this->open = true;
    }
    
    
    public function save()
    {
        $this->validate();  
        $this->award->save();
        $this->emitUp('awardUpdated'); //atualiza award
        $this->emit('clearAwardType');
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.award.create');
    }
}
