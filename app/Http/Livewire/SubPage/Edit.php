<?php

namespace App\Http\Livewire\SubPage;

use Livewire\Component;
use App\Models\Page;
use App\Models\SubPage;
use Illuminate\Support\Str;

class Edit extends Component
{
    public SubPage $subPage;
    public $pages;

    protected $listeners = ['pageUpdated' => '$refresh'];

    protected function rules()
    {
        return ['subPage.name' => 'required|string|min:|max:191',
            'subPage.name_en' => 'required|string|min:3|max:191',
            'subPage.tit_seo' => 'string',
            'subPage.tit_seo_en' => 'string',
            'subPage.desc_seo' => 'string',
            'subPage.desc_seo_en' => 'string',
            //'subPage.order' => 'required|unique:sub_pages,order,' . $this->subPage->id,
            'subPage.order' => 'required|unique:sub_pages,order,' . $this->subPage->id . ',id,page_id,' . $this->subPage->page_id,
            //'data.ip' => ['required', 'unique:servers,ip,'.$this->id.','.$request->input('id').',id,hostname,'.$request->input('hostname')]'
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

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    //limpa o formulário no btn cancelar
    function showItem($id)
    {
        $this->subPage = Page::find($id);
    }

    public function save()
    {
        $this->validate();

        $this->subPage->slug = Str::slug($this->subPage->name, '-');
        $this->subPage->update($this->subPage->toArray());
        $this->emit('clearPageId');
    }

    public function render()
    {
        return view('livewire.sub_page.edit', [
            'title' => $this->subPage->name,
            'sub_title' => 'Editar ' . $this->subPage->name,
            'svg' => 'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z'
        ])->layout('layouts.app', ['title' => $this->subPage->name]);
    }
}
