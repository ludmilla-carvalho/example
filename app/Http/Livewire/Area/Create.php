<?php

namespace App\Http\Livewire\Area;

use Livewire\Component;
use App\Models\Area;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Create extends Component
{
    use WithFileUploads;
    public Area $area;
    public $icon;
    public $image;
    public $related = [];
    public $sel_related = [];
    public $open = false;
    public $iteration = 0; //usado para limpar o file upload

    protected $listeners = [
        'open' => 'addItem'
    ];

    protected $rules = [
        'area.title' => 'required|unique:areas,title,null|string|min:3|max:191',
        'area.title_en' => 'required|string|min:3|max:191',
        'icon' => 'required|mimes:svg|file|max:1024',
        'image' => 'nullable|mimes:png,jpg,jpeg,gif|file|max:2048',
        'related' => 'nullable',
        'area.text' => 'string',
        'area.text_en' => 'string',
        
    ];

    protected $validationAttributes = [
        'area.title' => 'título',
        'area.title_en' => 'título (en)',
        'icon' => 'ícone',
        'image' => 'imagem',
        'related' => 'áreas relacionadas',
        'area.text' => 'texto',
        'area.text_en' => 'texto (en)',
    ];


    public function mount(){
        $this->area = new Area();
        $this->get_related();
    }

    protected function get_related(){
        $this->related = Area::orderBy('title')->get();
    }

    protected function clear_related(){
        $this->sel_related = [];
        foreach($this->area->related as $item){
            $this->sel_related[] = "$item->id";
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addItem()
    {
        $this->area = new Area();
        $this->icon = null;
        $this->image = null;
        $this->clear_related();
        $this->emit('clearRelated');
        $this->iteration++;
        $this->open = true;
    }
    
    
    public function save()
    {
        $this->validate();  
        if($this->icon){
            $dir_file = storage_path() . '/app/public/areas/';
            //Cria o diretório, casa ele não existe
            if (!is_dir($dir_file)) {
                mkdir($dir_file, 0777, true);
            }
            $this->area->icon = time() . '.' . $this->icon->getClientOriginalExtension();
            $this->icon->storeAs('areas/', $this->area->icon, 'public');
        }
        if($this->image){
            $this->area->image = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('areas/', $this->area->image, 'public');
        }
        $this->area->slug = Str::slug($this->area->title, '-');
        //Area::create($this->area->toArray());
        $this->area->save();
        $this->area->related()->sync($this->sel_related);
        $this->emitUp('areaUpdated'); //atualiza area
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.area.create');
    }
}
