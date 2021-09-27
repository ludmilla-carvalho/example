<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use App\Models\Page;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;

    public Page $page;
    public $icon;
    public $iteration = 0;
    public $title;
    public $sub_title;

    protected $listeners = ['pageUpdated' => '$refresh'];

    public function mount(){
        $this->title = $this->page->name;
        $this->sub_title = 'Editar ' . $this->page->name;
    }

    protected function rules()
    {
        return [
            'page.name' => 'required|string|min:|max:191',
            'page.name_en' => 'required|string|min:3|max:191',
            'icon' => 'nullable|mimes:svg|file|max:1024',
            'page.tit_seo' => 'string',
            'page.tit_seo_en' => 'string',
            'page.desc_seo' => 'string',
            'page.desc_seo_en' => 'string',
            'page.order' => 'required|unique:pages,order,' . $this->page->id,
            'page.publish' => ''
       ];
    }

    protected $validationAttributes = [
        'page.name_en' => 'nome (en)',
        'icon' => 'ícone',
        'page.order' => 'ordem',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    //limpa o formulário no btn cancelar
    function showItem($id)
    {
        $this->page = Page::find($id);
        $this->icon = null;
        $this->iteration++;
    }

    public function save()
    {
        $this->validate();

        if($this->icon){
            $dir_file = storage_path() . '/app/public/pages/icons/';
            //Cria o diretório, casa ele não existe
            if (!is_dir($dir_file)) {
                mkdir($dir_file, 0777, true);
            }

            //Apaga a imagem antiga
            if(strlen($this->page->icon) > 3){
                Storage::delete('public/pages/icons/' . $this->page->icon);
            }

            $this->page->icon = time() . '.' . $this->icon->getClientOriginalExtension();
            $this->icon->storeAs('pages/icons', $this->page->icon, 'public');
        }

        $this->page->slug = Str::slug($this->page->name, '-');
        
        $this->page->update($this->page->toArray());
        $this->icon = null;
        $this->iteration++;
    }

    public function render()
    {
        return view('livewire.page.edit', [
            'title' => $this->title,
            'sub_title' => $this->sub_title,
            'svg' => 'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z'
        ])->layout('layouts.app', ['title' => $this->title]);
    }
}
