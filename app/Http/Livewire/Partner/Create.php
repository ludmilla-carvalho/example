<?php

namespace App\Http\Livewire\Partner;

use Livewire\Component;
use App\Models\Partner;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public Partner $partner;
    public $image;
    public $iteration = 0; //usado para limpar o file upload
    public $open = false;

    protected $listeners = [
        'open' => 'addItem'
    ];
    
    protected $rules = [
        'partner.title' => 'required|string|min:3|max:191',
        'partner.title_en' => 'required',
        'partner.text' => 'string',
        'partner.text_en' => 'string',
        'image' => 'nullable|mimes:png,jpg,jpeg,gif|file|max:2048',
        'partner.publish' => 'nullable',
        
    ];

    protected $validationAttributes = [
        'partner.title' => 'título',
        'term.title_en' => 'título (en)',
        'partner.text' => 'texto',
        'partner.text_en' => 'texto (en)',
        'image' => 'imagem',
    ];


    public function mount(){
        $this->partner = new Partner();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addItem()
    {
        $this->partner = new Partner();
        $this->image = null;
        $this->iteration++;
        $this->open = true;
    }
    
    
    public function save()
    {
        $this->validate();
        
        if($this->image){
            $dir_file = storage_path() . '/app/public/partners/';
            //Cria o diretório, casa ele não existe
            if (!is_dir($dir_file)) {
                mkdir($dir_file, 0777, true);
            }
            $this->partner->image = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('partners/', $this->partner->image, 'public');
        }

        $this->partner->save();
        $this->emitUp('partnerUpdated'); //atualiza partner
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.partner.create', [
            'title' => 'Parceiros',
            'sub_title' => 'Adicionar Parceiro',
            'svg' => 'M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'
        ])->layout('layouts.app', [
            'title' => 'Parceiros'
        ]);
    }
}
