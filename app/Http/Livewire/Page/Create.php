<?php

namespace App\Http\Livewire\Page;

use Livewire\Component;
use App\Models\Page;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
//use Illuminate\Support\Facades\Storage;

class Create extends Component
{
    use WithFileUploads;

    public Page $page;
    public $icon;
    public $iteration = 0;

    protected $listeners = ['pageUpdated' => '$refresh'];

    protected $rules = [
        'page.name' => 'required|string|min:|max:191',
            'page.name_en' => 'required|string|min:3|max:191',
            'icon' => 'nullable|mimes:svg|file|max:1024',
            'page.tit_seo' => 'string',
            'page.tit_seo_en' => 'string',
            'page.desc_seo' => 'string',
            'page.desc_seo_en' => 'string',
            'page.order' => 'required|unique:pages,order,null',
            'page.publish' => ''
        
    ];

    protected $validationAttributes = [
        'page.name_en' => 'nome (en)',
        'icon' => 'ícone',
        'page.order' => 'ordem',
    ];

    public function mount(){

        $this->page = new Page();
    }

    //limpa o formulário no btn cancelar
    function showItem()
    {
        $this->page = new Page();
        $this->icon = null;
        $this->iteration++;
    }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
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

            $this->page->icon = time() . '.' . $this->icon->getClientOriginalExtension();
            $this->icon->storeAs('pages/icons', $this->page->icon, 'public');
        }

        $this->page->slug = Str::slug($this->page->name, '-');
        $this->page->save();
        //$this->icon = null;
        //$this->iteration++;
        return redirect()->to('/pages/' . $this->page->slug);

    }

    public function render()
    {
        return view('livewire.page.create', [
            'title' => 'Páginas',
            'sub_title' => 'Criar Página',
            'svg' => 'M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'
        ])->layout('layouts.app', ['title' => 'Páginas']);
    }
}
