<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;
use App\Models\Term;
use App\Models\Privacy;
use App\Http\Resources\Newsletter as NewsletterResource;
use Illuminate\Support\Facades\DB;


class NewsletterController extends Controller
{
    public function store(Request $request){
        $data = $request->all();
        
        $privacy = Privacy::orderBy('id', 'desc')->first();
        if($privacy){
            $data['privacy_version'] = $privacy->version;
        }

        $term = Term::orderBy('id', 'desc')->first();
        if($term){
            $data['term_version'] = $term->version;
        }
        
        $this->_validate($request, 'create');
        $newsletter = Newsletter::create($data);
        $newsletter->areas()->sync($request->areas);
        return new NewsletterResource( $newsletter);
    }

    /**
     * Form Validation
     *
     * @param Request $request
     * @return void
     */
    protected function _validate(Request $request, $type = 'create')
    {
        $validator = [
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:newsletters,email,' . $request->id,
        ];

        if($request->lang == 'en'){
            $messages = [
                'name.required' => 'O campo "nome completo" é obrigatório.',
                'email.required' => 'O campo "email" é obrigatório.',
                'email.email' => 'O campo “e-mail” não contém um endereço de email válido.',
                'email.unique' => 'Este email já está cadastrado para receber atualizações jurídicas.'
            ];
        }else{
            $messages = [
                'name.required' => 'O campo "nome completo" é obrigatório.',
                'email.required' => 'O campo "email" é obrigatório.',
                'email.email' => 'O campo “e-mail” não contém um endereço de email válido.',
                'email.unique' => 'Este email já está cadastrado para receber atualizações jurídicas.'
            ];
        }
        
        return $this->validate($request, $validator, $messages);
    }

    public function mostViewed()
    {
        $mostViewed = DB::table('area_newsletter')
            ->join('areas', 'areas.id', '=', 'area_newsletter.area_id')
             ->select(DB::raw('count(area_id) as count, area_id as id, title, title_en'))
             ->groupBy('area_id')
             ->orderBy('count', 'desc')
             ->limit(5)
             ->get();
        
        return response()->json(json_decode($mostViewed));
    
    }
}
