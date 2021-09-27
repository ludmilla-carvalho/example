<?php

namespace App\Http\Livewire\Banner;

use Livewire\Component;
use App\Models\Banner;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;
    public Banner $banner;
    public $image;
    public $imageMobile;
    public $iteration = 0; //usado para limpar o file upload

    protected $validationAttributes = [
        'banner.title' => 'título',
        'banner.title_en' => 'título (en)',
        'image' => 'imagem',
        'imageMobile' => 'imagem mobile'
    ];


    protected function rules()
    {
        return [
            'banner.title' => 'required|string|min:3|max:191',
            'banner.title_en' => 'required|string|min:3|max:191',
            'image' => 'nullable|mimes:png,jpg,jpeg,gif|file|max:2048',
            'imageMobile' => 'nullable|mimes:png,jpg,jpeg,gif|file|max:2048',
            'banner.sub_title' => 'string|max:191',
            'banner.sub_title_en' => 'string|max:191',
            'banner.link' => 'string|max:191',
            'banner.text_link' => 'string|max:191',
            'banner.text_link_en' => 'string|max:191',
            'banner.publish' => ''
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function showItem($id)
    {
        $this->banner = Banner::find($id);
        $this->image = null;
        $this->imageMobile = null;
        $this->iteration++;
    }
    
    public function save()
    {
        $this->validate();
        
        //pasta onde a imagem será gravada
        if(strlen($this->banner->page_id) > 0){
            $folder = $this->banner->page_id;
        }else{
            $folder = 'sub/' . $this->banner->sub_page_id;
        }
        
        if($this->image){
            //Apaga a imagem antiga
            Storage::delete('public/banners/' . $folder . '/' . $this->banner->image);

            $dir_file = storage_path() . '/app/public/banners/' . $folder;
            //Cria o diretório, casa ele não existe
            if (!is_dir($dir_file)) {
                mkdir($dir_file, 0777, true);
            }
            $this->banner->image = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('banners/'. $folder, $this->banner->image, 'public');
        }

        if($this->imageMobile){
            //Apaga a imagem antiga
            Storage::delete('public/banners/' . $folder . '/' . $this->banner->image_mobile);
            
            $dir_file = storage_path() . '/app/public/banners/' . $folder;
            //Cria o diretório, casa ele não existe
            if (!is_dir($dir_file)) {
                mkdir($dir_file, 0777, true);
            }
            $this->banner->image_mobile = time() . 'm.' . $this->imageMobile->getClientOriginalExtension();
            $this->imageMobile->storeAs('banners/'. $folder, $this->banner->image_mobile, 'public');
        }
        
        $this->banner->update($this->banner->toArray());
        $this->banner = Banner::find($this->banner->id);
        $this->emitUp('pageUpdated'); //atualiza page.edit
    }

    public function render()
    {
        return view('livewire.banner.edit');
    }
}
