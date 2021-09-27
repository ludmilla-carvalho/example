<?php

namespace App\Http\Livewire\Highlight;

use Livewire\Component;
use App\Models\Highlight;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;
    public Highlight $highlight;
    public $image;
    public $imageMobile;
    public $open = false;
    public $iteration = 0; //usado para limpar o file upload

    protected $listeners = [
        'open' => 'showItem',
        'tooglePublish' => 'tooglePublish'
    ];

    protected $validationAttributes = [
        'highlight.title' => 'título',
        'highlight.title_en' => 'título (en)',
        'image' => 'imagem',
        'imageMobile' => 'imagem mobile',
        'highlight.order' => 'ordem',
    ];


    public function mount(){
        $this->highlight = new Highlight();
    }

    protected function rules()
    {
        return [
            'highlight.title' => 'required|string|min:3|max:191',
            'highlight.title_en' => 'required|string|min:3|max:191',
            'image' => 'nullable|mimes:png,jpg,jpeg,gif|file|max:2048',
            'imageMobile' => 'nullable|mimes:png,jpg,jpeg,gif|file|max:2048',
            'highlight.sub_title' => 'string|max:191',
            'highlight.sub_title_en' => 'string|max:191',
            'highlight.link' => 'string|max:191',
            'highlight.text_link' => 'string|max:191',
            'highlight.text_link_en' => 'string|max:191',
            'highlight.publish' => 'nullable',
            'highlight.order' => 'required|unique:highlights,order,' . $this->highlight->id
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function showItem($id)
    {
        $this->highlight = Highlight::find($id);
        $this->image = null;
        $this->imageMobile = null;
        $this->iteration++;
        $this->open = true;
    }
    public function tooglePublish($id)
    {
        $this->highlight = Highlight::find($id);
        if($this->highlight->publish == 1){
            $this->highlight->publish = 0;
        }else{
            $this->highlight->publish = 1;
        }
        $this->highlight->save();
        $this->emitUp('pageUpdated'); //atualiza page.edit
    }
    
    public function save()
    {
        $this->validate();  
        if($this->image){
            //Apaga a imagem antiga
            Storage::delete('public/highlights/' . $this->highlight->page_id . '/' . $this->highlight->image);

            $dir_file = storage_path() . '/app/public/highlights/' . $this->highlight->page_id;
            //Cria o diretório, casa ele não existe
            if (!is_dir($dir_file)) {
                mkdir($dir_file, 0777, true);
            }
            $this->highlight->image = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('highlights/'. $this->highlight->page_id, $this->highlight->image, 'public');
        }
        if($this->imageMobile){
            //Apaga a imagem antiga
            Storage::delete('public/highlights/' . $this->highlight->page_id . '/' . $this->highlight->image_mobile);
            
            $dir_file = storage_path() . '/app/public/highlights/' . $this->highlight->page_id;
            //Cria o diretório, casa ele não existe
            if (!is_dir($dir_file)) {
                mkdir($dir_file, 0777, true);
            }
            $this->highlight->image_mobile = time() . '.' . $this->imageMobile->getClientOriginalExtension();
            $this->imageMobile->storeAs('highlights/'. $this->highlight->page_id, $this->highlight->image_mobile, 'public');
        }
        $this->highlight->update($this->highlight->toArray());
        $this->emitUp('pageUpdated'); //atualiza page.edit
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.highlight.edit');
    }
}
