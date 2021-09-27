<?php

namespace App\Http\Livewire\Call;

use Livewire\Component;
use App\Models\Call;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;
    public Call $callx; //call is used by wire
    public $image;
    public $call_id;
    public $iteration = 0; //usado para limpar o file upload

    protected $listeners = [
        'show' => 'showItem'
    ];

    protected $validationAttributes = [
        'callx.title' => 'título',
        'callx.title_en' => 'título (en)',
        'callx.text' => 'texto',
        'callx.text_en' => 'texto (en)',
        'image' => 'imagem',
        'callx.order' => 'ordem',
    ];

    protected function rules()
    {
        return [
            'callx.title' => 'required|string|min:3|max:191',
            'callx.title_en' => 'required|string|min:3|max:191',
            'image' => 'nullable|mimes:png,jpg,jpeg,gif|file|max:2048',
            'callx.text' => 'string',
            'callx.text_en' => 'string',
            'callx.link' => 'string|max:191',
            'callx.text_link' => 'string|max:40',
            'callx.text_link_en' => 'string|max:40',
            'callx.publish' => ''
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    function showItem($id)
    {
        $this->callx = Call::find($id);
        $this->image = null;
        $this->iteration++;
    }
    
    
    public function save()
    {
        $this->validate(); 
        
        //pasta onde a imagem será gravada
        //o que diferencia página de subpágina é a presença do ícone
        if(strlen($this->callx->page_id) > 0){
            $folder = $this->callx->page_id;
        }else{
            $folder = 'sub/' . $this->callx->sub_page_id;
        }

        if($this->image){
            $dir_file = storage_path() . '/app/public/calls/' . $folder;
            //Cria o diretório, casa ele não existe
            if (!is_dir($dir_file)) {
                mkdir($dir_file, 0777, true);
            }

            //Apaga a imagem antiga
            if(strlen($this->callx->image) > 3){
                Storage::delete('public/calls/' . $folder . '/' . $this->callx->image);
            }
            
            $this->callx->image = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('calls/'. $folder, $this->callx->image, 'public');
        }
        $this->callx->update($this->callx->toArray());
        $this->image = null;
        $this->iteration++;
        $this->emitUp('pageUpdated'); //atualiza page.edit
    }

    public function render()
    {
        return view('livewire.call.edit');
    }
}
