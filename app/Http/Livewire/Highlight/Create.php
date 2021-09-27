<?php

namespace App\Http\Livewire\Highlight;

use Livewire\Component;
use App\Models\Highlight;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public Highlight $highlight;
    public $page;
    public $image;
    public $imageMobile;
    public $open = false;
    public $iteration = 0; //usado para limpar o file upload

    protected $listeners = ['open' => 'addItem'];

    protected $rules = [
        'highlight.title' => 'required|string|min:3|max:191',
        'highlight.title_en' => 'required|string|min:3|max:191',
        'image' => 'required|mimes:png,jpg,jpeg,gif|file|max:2048',
        'imageMobile' => 'required|mimes:png,jpg,jpeg,gif|file|max:2048',
        'highlight.sub_title' => 'string|max:191',
        'highlight.sub_title_en' => 'string|max:191',
        'highlight.link' => 'string|max:191',
        'highlight.text_link' => 'string|max:191',
        'highlight.text_link_en' => 'string|max:191',
        'highlight.publish' => 'nullable',
        'highlight.order' => 'required|unique:highlights,order,null',
        
    ];

    protected $validationAttributes = [
        'highlight.title' => 'título',
        'highlight.title_en' => 'título (en)',
        'image' => 'imagem',
        'imageMobile' => 'imagem mobile',
        'highlight.order' => 'ordem',
    ];


    public function mount($page){

        $this->page = $page;
        $this->highlight = new Highlight();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addItem()
    {
        //$this->clearMedia();
        $this->highlight = new Highlight();
        $this->image = null;
        $this->imageMobile - null;
        $this->iteration++;
        $this->open = true;
    }
    
    
    public function save()
    {
        $this->validate();  
        $this->highlight->page_id = $this->page->id;
        if($this->image){
            $dir_file = storage_path() . 'app/public/highlights/' . $this->highlight->page_id;
            //Cria o diretório, casa ele não existe
            if (!is_dir($dir_file)) {
                mkdir($dir_file, 0777, true);
            }
            $this->highlight->image = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('highlights/'. $this->highlight->page_id, $this->highlight->image, 'public');
        }

        if($this->imageMobile){
            $dir_file = storage_path() . 'app/public/highlights/' . $this->highlight->page_id;
            if (!is_dir($dir_file)) {
                mkdir($dir_file, 0777, true);
            }
            $this->highlight->image_mobile = time() . '.' . $this->imageMobile->getClientOriginalExtension();
            $this->imageMobile->storeAs('highlights/'. $this->highlight->page_id, $this->highlight->image_mobile, 'public');
        }
        Highlight::create($this->highlight->toArray());
        $this->emitUp('pageUpdated'); //atualiza page.edit
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.highlight.create');
    }
}
