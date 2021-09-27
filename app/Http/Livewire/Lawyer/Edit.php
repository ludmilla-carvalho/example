<?php

namespace App\Http\Livewire\Lawyer;

use Livewire\Component;
use App\Models\Lawyer;
use App\Models\LawyerType;
use App\Models\LawyerSubtype;
use App\Models\Language;
use App\Models\City;
use App\Models\Area;
use App\Models\Graduation;
use App\Models\Experience;
use App\Models\AwardType;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Edit extends Component
{
    use WithFileUploads;
    public $lawyer;
    public $lawyerType;
    public $lawyerSubtype = [];
    public $gender = array(
        array('id' => 'F', 'title' => 'Feminino'),
        array('id' => 'M', 'title' => 'Masculino')
    );
    public $cities = [];
    public $sel_cities = [];
    public $languages = [];
    public $sel_languages = [];
    public $areas = [];
    public $sel_areas = [];
    public $graduation = [];
    public $sel_graduation = [];
    public $experience = [];
    public $sel_experience = [];
    public $awards = [];
    public $selAwards = [];
    public $image;
    public $open = false;
    public $iteration = 0; //usado para limpar o file upload

    protected $listeners = [
        'open' => 'showItem'
    ];

    protected $validationAttributes = [
        'lawyer.name' => 'nome',
        'image' => 'imagem',
        'lawyer.email' => 'email',
        'lawyer.phone' => 'telefone',
        'lawyer.linkedin' => 'linkedin',
        'lawyer.lawyer_type_id' => 'categoria',
        'lawyer.lawyer_subtype_id' => 'subcategoria',
        'sel_cities' => 'cidades',
        'sel_languages' => 'idiomas',
        'sel_areas' => 'áreas',
        'sel_graduation' => 'formação',
        'sel_experience' => 'experiência internacional',
        'selAward' => 'reconhecimento',
        'lawyer.text' => 'texto',
        'lawyer.text_en' => 'texto (en)',
        'lawyer.gender' => 'gênero',
    ];

    protected function rules()
    {
        return [
            'lawyer.name' => 'required|string|min:3|max:191|unique:lawyers,name,' . $this->lawyer->id,
            'image' => 'nullable|mimes:png,jpg,jpeg,gif|file|max:2048',
            'lawyer.email' => 'nullable|string|max:191',
            'lawyer.phone' => 'nullable|string|max:191',
            'lawyer.linkedin' => 'nullable|string|max:191',
            'lawyer.lawyer_type_id' => 'required',
            'lawyer.lawyer_subtype_id' => 'nullable',
            'sel_cities' => 'required',
            'sel_languages' => 'required',
            'sel_areas' => 'required',
            //'sel_graduation' => 'required',
            'sel_graduation' => 'nullable',
            'sel_experience' => 'nullable',
            'selAwards' => 'nullable',
            'lawyer.text' => 'string',
            'lawyer.text_en' => 'string',
            'lawyer.gender' => 'string',
        ];
    }

    public function mount(){
        $this->lawyer = new Lawyer();
        $this->lawyerType = LawyerType::orderBy('title')->get();
        $this->get_languages();
        $this->get_cities();
        $this->get_areas();
        $this->get_graduation();
        $this->get_experience();
        $this->get_awards();
        $this->get_lawyer_subtype();
    }

    protected function get_languages(){
        $this->languages = Language::orderBy('title')->get();
    }

    protected function get_cities(){
        $this->cities = City::orderBy('title')->get();
    }

    protected function get_areas(){
        $this->areas = Area::orderBy('title')->get();
    }

    protected function get_graduation(){
        $this->graduation = Graduation::orderBy('title')->get();
    }

    protected function get_experience(){
        $this->experience = Experience::orderBy('title')->get();
    }

    protected function clear_languages(){
        $this->sel_languages = [];
        foreach($this->lawyer->languages as $item){
            $this->sel_languages[] = "$item->id";
        }
    }

    protected function get_awards(){
        $award_types = AwardType::orderBy('title')->get();
        foreach ($award_types as $item) {
            foreach ($item->awards as $value) {
                $this->awards[] = [
                    'id' => $value->id,
                    'title' => $item->title . ' | ' . $value->title
                ];
            }
        }
    }

    function get_lawyer_subtype(){
        $this->lawyerSubtype = array();
        
        if($this->lawyer->lawyer_type_id){
            $lawyer_subtype = LawyerSubtype::where('lawyer_type_id', $this->lawyer->lawyer_type_id)->get();
            foreach ($lawyer_subtype as $value) {
                $this->lawyerSubtype[] = [
                    'id' => $value->id,
                    'title' => $value->title
                ];
            }
        }
        $this->emit('clearLawyerSubtypeId');
    }

    protected function clear_cities(){
        $this->sel_cities = [];
        foreach($this->lawyer->cities as $item){
            $this->sel_cities[] = "$item->id";
        }
    }

    protected function clear_areas(){
        $this->sel_areas = [];
        foreach($this->lawyer->areas as $item){
            $this->sel_areas[] = "$item->id";
        }
    }

    protected function clear_graduation(){
        $this->sel_graduation = [];
        foreach($this->lawyer->graduation as $item){
            $this->sel_graduation[] = "$item->id";
        }
    }

    protected function clear_experience(){
        $this->sel_experience = [];
        foreach($this->lawyer->experience as $item){
            $this->sel_experience[] = "$item->id";
        }
    }

    protected function clear_awards(){
        $this->selAwards = [];
        foreach($this->lawyer->awards as $item){
            $this->selAwards[] = [
                'award_id' => $item->pivot->award_id,
                'year' => $item->pivot->year
            ];
        }
    }

    protected function clear_lawyer_subtype(){
        $this->lawyerSubtype = [];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function showItem($id)
    {
        $this->lawyer = Lawyer::find($id);
        $this->clear_languages();
        $this->clear_cities();
        $this->clear_areas();
        $this->clear_graduation();
        $this->clear_experience();
        $this->clear_awards();
        $this->get_lawyer_subtype();
        $this->emit('clearLanguage');
        $this->emit('clearCity');
        $this->emit('clearArea');
        $this->emit('clearGraduation');
        $this->emit('clearExperience');
        $this->emit('clearLawyerTypeId');
        $this->emit('clearLawyerSubtypeId');
        $this->emit('clearGender');
        $this->image = null;
        $this->iteration++;
        $this->open = true;
    }

    public function push_award($award_id, $year){
        $obj = [
            'award_id' => $award_id,
            'year' => $year
        ];  
        array_push($this->selAwards, $obj);
    }

    public function del_award($id){
        unset($this->selAwards[$id]);
    }
    
    public function save()
    {
        $this->validate();  

        if($this->lawyer->lawyer_type_id == '1' || $this->lawyer->lawyer_type_id == '2' || $this->lawyer->lawyer_type_id == '3'){
            $this->lawyer->lawyer_subtype_id =null;
        }
        
        if($this->image){
            $dir_file = storage_path() . '/app/public/lawyers/';
            $this->lawyer->image = time() . '.' . $this->image->getClientOriginalExtension();
            $this->image->storeAs('lawyers/', $this->lawyer->image, 'public');
        }

        $this->lawyer->slug = Str::slug($this->lawyer->name, '-');
        $this->lawyer->update($this->lawyer->toArray());
        $this->lawyer->languages()->sync($this->sel_languages);
        $this->lawyer->cities()->sync($this->sel_cities);
        $this->lawyer->areas()->sync($this->sel_areas);
        $this->lawyer->graduation()->sync($this->sel_graduation);
        $this->lawyer->experience()->sync($this->sel_experience);
        $this->lawyer->awards()->sync($this->selAwards);
        $this->emitUp('lawyerUpdated');
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.lawyer.edit');
    }
}
