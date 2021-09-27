<?php

namespace App\Http\Livewire\Area;

use Livewire\Component;
use App\Models\Area;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Edit extends Component
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
        'open' => 'showItem'
    ];

    protected $validationAttributes = [
        'area.title' => 'título',
        'area.title_en' => 'título (en)',
        'icon' => 'ícone',
        'image' => 'imagem',
        'related' => 'áreas relacionadas',
        'area.text' => 'texto',
        'area.text_en' => 'texto (en)'
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

    protected function rules()
    {
        return [
            'area.title' => 'required|string|min:3|max:191|unique:areas,title,' . $this->area->id,
            'area.title_en' => 'required|string|min:3|max:191',
            'icon' => 'nullable|mimes:svg|file|max:1024',
            'image' => 'nullable|mimes:png,jpg,jpeg,gif|file|max:2048',
            'related' => 'nullable',
            'area.text' => 'string',
            'area.text_en' => 'string'
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function showItem($id)
    {
        $this->area = Area::find($id);
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

            //Apaga a imagem antiga
            if(strlen($this->area->icon) > 3){
                Storage::delete('public/areas/' . $this->area->icon);
            }
            $this->area->icon = time() . '.' . $this->icon->getClientOriginalExtension();
            $this->icon->storeAs('areas/', $this->area->icon, 'public');
        }
        if($this->image){
            
            //Apaga a imagem antiga
            if(strlen($this->area->image) > 3){
                Storage::delete('public/areas/' . $this->area->image);
            }

            $this->area->image = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('areas/', $this->area->image, 'public');
        }
        $this->area->slug = Str::slug($this->area->title, '-');
        $this->area->update($this->area->toArray());
        $this->area->related()->sync($this->sel_related);
        $this->emitUp('areaUpdated');
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.area.edit');
    }
}
