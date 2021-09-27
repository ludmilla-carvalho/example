<?php

namespace App\Http\Livewire\Partner;

use Livewire\Component;
use App\Models\Partner;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public Partner $partner;
    public $image;
    public $iteration = 0; //usado para limpar o file upload
    public $open = false;
    
    protected $listeners = [
        'open' => 'showItem',
        'tooglePublish' => 'tooglePublish'
    ];

    protected $validationAttributes = [
        'partner.title' => 'título',
        'term.title_en' => 'título (en)',
        'partner.text' => 'texto',
        'partner.text_en' => 'texto (en)',
        'image' => 'imagem',
        'partner.publish' => 'nullable',
    ];

    protected function rules()
    {
        return [
        'partner.title' => 'required|string|min:3|max:191',
        'partner.title_en' => 'required',
        'partner.text' => 'string',
        'partner.text_en' => 'string',
        'image' => 'nullable|mimes:png,jpg,jpeg,gif|file|max:2048',
        'partner.publish' => 'nullable',
        ];
    }

    public function mount(){
        $this->partner = new Partner();
    }

    public function showItem($id)
    {
        $this->partner = Partner::find($id);
        $this->image = null;
        $this->iteration++;
        $this->open = true;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function tooglePublish($id)
    {
        $this->partner = Partner::find($id);
        if($this->partner->publish == 1){
            $this->partner->publish = 0;
        }else{
            $this->partner->publish = 1;
        }
        $this->partner->save();
        $this->emitUp('partnerUpdated');
    }

    public function save()
    {
        $this->validate(); 
        if($this->image){
            //Apaga a imagem antiga
            Storage::delete('public/partners/' . $this->partner->image);

            $dir_file = storage_path() . '/app/public/partners/';
            //Cria o diretório, casa ele não existe
            if (!is_dir($dir_file)) {
                mkdir($dir_file, 0777, true);
            }
            $this->partner->image = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('partners/', $this->partner->image, 'public');
        } 
        $this->partner->update($this->partner->toArray());
        $this->emitUp('partnerUpdated'); //atualiza partner
        $this->open = false;
        
    }

    public function render()
    {
        return view('livewire.partner.edit',[
            'title' => 'Parceiros',
            'sub_title' => 'Editar Parceiro',
            'svg' => 'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z'
        ])->layout('layouts.app', [
            'title' => 'Parceiros'
        ]);
    }
}
