<?php

namespace App\Http\Livewire\Banner;

use Livewire\Component;
use App\Models\Banner;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public Banner $banner;
    public $page;
    public $image;
    public $imageMobile;
    public $iteration = 0; //usado para limpar o file upload

    protected $rules =  [
        'banner.title' => 'required|string|min:3|max:191',
        'banner.title_en' => 'required|string|min:3|max:191',
        'image' => 'required|mimes:png,jpg,jpeg,gif|file|max:2048',
        'imageMobile' => 'required|mimes:png,jpg,jpeg,gif|file|max:2048',
        'banner.sub_title' => 'string|max:191',
        'banner.sub_title_en' => 'string|max:191',
        'banner.link' => 'string|max:191',
        'banner.text_link' => 'string|max:191',
        'banner.text_link_en' => 'string|max:191',
        'banner.publish' => ''
    ];
    
    protected $validationAttributes = [
        'banner.title' => 'título',
        'banner.title_en' => 'título (en)',
        'image' => 'imagem',
        'imageMobile' => 'imagem mobile',
    ];

    public function mount($page){
        $this->banner = new Banner();
        $this->page = $page;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function clearItem()
    {
        $this->Banner = new Banner();
        $this->image = null;
        $this->imageMobile - null;
        $this->iteration++;
    }
    
    public function save()
    {
        $this->validate();  

        //pasta onde a imagem será gravada
        //o que diferencia página de subpágina é a presença do ícone
        if(isset($this->page->icon)){
            $folder = $this->page->id;
            $this->banner->page_id = $this->page->id;
        }else{
            $folder = 'sub/' . $this->page->id;
            $this->banner->sub_page_id = $this->page->id;
        }

        if($this->image){
            $dir_file = storage_path() . '/app/public/banners/' . $folder;
            //Cria o diretório, casa ele não existe
            if (!is_dir($dir_file)) {
                mkdir($dir_file, 0777, true);
            }
            $this->banner->image = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('banners/'. $folder, $this->banner->image, 'public');
        }

        if($this->imageMobile){
            $dir_file = storage_path() . '/app/public/banners/' . $folder;
            if (!is_dir($dir_file)) {
                mkdir($dir_file, 0777, true);
            }
            $this->banner->image_mobile = time() . 'm.' . $this->imageMobile->getClientOriginalExtension();
            $this->imageMobile->storeAs('banners/'. $folder, $this->banner->image_mobile, 'public');
        }
        
       //$this->banner->page_id = $this->page->id;
        
        
        $this->banner->save($this->banner->toArray());
        $this->emitUp('pageUpdated'); //atualiza page.edit
    }

    public function render()
    {
        return view('livewire.banner.create');
    }
}
