<?php

namespace App\Exports;

use App\Models\Newsletter;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class NewsletterExport implements FromQuery, WithHeadings, WithColumnFormatting, WithMapping, ShouldAutoSize
{
    use Exportable;

    public function __construct(string $search)
    {
        $this->search = $search;
    }

    public function query()
    {
        return Newsletter::query()->where("name", "like", "%$this->search%")->orWhere('email', 'like', "%$this->search%")->with('areas');
    }

    public function headings(): array
    {
        return [
            '#',
            'Nome',
            'E-mail',
            'Assuntos',
            'IP',
            'Versão Termo de Uso',
            'Versão Política de Privacidade',
            'Criado',
        ];
    }

    /**
    * @var Newsletter $newsletter
    */
    public function map($newsletter): array
    {
        $areas = [];
        foreach ($newsletter->areas as $area) {
            $areas[] = $area->title;
        }
        //var_dump($areas); exit;
        return [
            $newsletter->id,
            $newsletter->name,
            $newsletter->email,
            implode(', ', $areas),
            $newsletter->ip,
            $newsletter->term_version,
            $newsletter->privacy_version,
            \Carbon\Carbon::parse($newsletter->created_at)->format('d/m/Y H:i'),
        ];
    }

    public function columnFormats(): array
    {
        return [
            //'C' => NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }

    
}
