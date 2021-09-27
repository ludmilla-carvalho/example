<?php

namespace App\Exports;

use App\Models\Lawyer;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithMapping;
//use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class LawyerExport implements FromQuery, WithHeadings, WithColumnFormatting, WithMapping/*,ShouldAutoSize*/
{
    use Exportable;

    public function __construct(string $search = null)
    {
        $this->search = $search;
    }

    public function query()
    {
        return Lawyer::query()->where("name", "like", "%$this->search%")->with('areas');
    }

    public function headings(): array
    {
        return [
            '#',
            'Nome',
            'Cargo',
            'Cidades',
            'E-mail',
            'Telefone',
            'Linkedin',
            'Áreas',
            'Idiomas',
            'Educação',
            'Experência Internacional',
            'Reconhecimentos',
            'Gênero'
            //'Experência Profissioal',
            //'Experência Profissioal (en)'
        ];
    }

    /**
    * @var Newsletter $lawyer
    */
    public function map($lawyer): array
    {
        $areas = [];
        foreach ($lawyer->areas as $area) {
            $areas[] = $area->title;
        }

        $cities = [];
        foreach ($lawyer->cities as $city) {
            $cities[] = $city->title;
        }

        $languages = [];
        foreach ($lawyer->languages as $lang) {
            $languages[] = $lang->title;
        }

        $graduation = [];
        foreach ($lawyer->graduation as $grad) {
            $graduation[] = $grad->title;
        }

        $experience = [];
        foreach ($lawyer->experience as $exp) {
            $experience[] = $exp->title;
        }

        $awards = [];
        foreach ($lawyer->awards as $aw) {
            $awards[] = $aw->award_type->title . ' | ' .  $aw->title . ' - ' . $aw->pivot->year;
        }

        if(isset($lawyer->lawyer_subtype->title)){
            $sub = ' (' . $lawyer->lawyer_subtype->title . ')';
        }else{
            $sub = '';
        }
        $cargo = $lawyer->lawyer_type->title . $sub;
        
        return [
            $lawyer->id,
            $lawyer->name,
            $cargo,
            implode('; ', $cities),
            $lawyer->email,
            $lawyer->phone,
            $lawyer->linkedin,
            implode('; ', $areas),
            implode('; ', $languages),
            implode('; ', $graduation),
            implode('; ', $experience),
            implode('; ', $awards),
            $lawyer->gender,
            //$lawyer->text_en
        ];
    }

    public function columnFormats(): array
    {
        return [
            //'C' => NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }

    
}
