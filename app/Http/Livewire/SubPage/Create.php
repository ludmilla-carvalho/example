<?php

namespace App\Http\Livewire\SubPage;

use Livewire\Component;
use App\Models\Page;
use App\Models\SubPage;
use Illuminate\Support\Str;

class Create extends Component
{
    public SubPage $subPage;
    public $pages;
    
    protected $listeners = ['pageUpdated' => '$refresh'];

    /*protected $rules = [
        'subPage.name' => 'required|string|min:|max:191',
        'subPage.name_en' => 'required|string|min:3|max:191',
        'subPage.tit_seo' => 'string',
        'subPage.tit_seo_en' => 'string',
        'subPage.desc_seo' => 'string',
        'subPage.desc_seo_en' => 'string',
        'subPage.order' => 'required|unique:sub_pages,order,null',
        'subPage.publish' => 'nullable',
        'subPage.page_id' => 'required',
        
    ];*/

    protected function rules()
    {
        return ['subPage.name' => 'required|string|min:|max:191',
            'subPage.name_en' => 'required|string|min:3|max:191',
            'subPage.tit_seo' => 'string',
            'subPage.tit_seo_en' => 'string',
            'subPage.desc_seo' => 'string',
            'subPage.desc_seo_en' => 'string',
            //'subPage.order' => 'required|unique:sub_pages,order,null'
            'subPage.order' => 'required|unique:sub_pages,order,null,id,page_id,' . $this->subPage->page_id,
            'subPage.publish' => 'nullable',
            'subPage.page_id' => 'required',
       ];
    }

    protected $validationAttributes = [
        'subPage.name_en' => 'nome (en)',
        'subPage.order' => 'ordem',
        'subPage.page_id' => 'página',
    ];

    public function mount(){

        $this->subPage = new SubPage();
        $this->get_pages();
    }

    public function get_pages()
    {
        $pages = Page::orderBy('name')->get();
        foreach ($pages as $value) {
            $this->pages[$value->id] = [
                'id' => $value->id,
                'title' => $value->name
            ];
        }
    }

    //limpa o formulário no btn cancelar
    function showItem()
    {
        $this->subPage = new SubPage();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function save()
    {
        $this->validate();

        //incluir o slug da pag pai
        $this->subPage->slug = Str::slug($this->subPage->name, '-');
        
        $this->subPage->save();
        $this->emit('clearPageId');
    
        return redirect()->to('/subpages/' . $this->subPage->slug);
    }

    public function render()
    {
        return view('livewire.sub_page.create', [
            'title' => 'Sub Páginas',
            'sub_title' => 'Criar Sub Página',
            'svg' => 'M9 13h6m-3-3v6m5 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z'
        ])->layout('layouts.app', ['title' => 'Sub Páginas']);
    }
}
