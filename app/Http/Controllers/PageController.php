<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Call;
use App\Models\Banner;
use App\Models\Text;
use App\Http\Resources\Page as PageResource;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index(Request $request){
        $pages = Page::where('publish', 1)->orderBy('order', 'asc')->get();
        return new PageResource($pages);
    }

    public function show($slug){
        /*$page = Page::with(['highlights', 'calls', 'banner'])->where('slug', $slug)->get();
        return PageResource::collection($page);*/

        $res['page'] = $page->toArray();

        //home
        if($page->id == 1){
            $res['highlights'] = $page->highlights;
            $res['occupation'] = Call::find(1); //atuação
            $res['knowlege'] = Call::find(2); //conhecimento jurídico
            $res['events'] = Call::find(3); //eventos
            $res['social'] = Call::find(4); //responsabilidade social
            $res['intern'] = Call::find(5); //estágio
            $res['reference'] = Call::find(6); //reconhecimentos
            $res['newsletter'] = Call::find(7); //atualizações juridicas
            
            $res['menu']['occupation'] = [
                'title' => $res['occupation']->title,
                'title_en' => $res['occupation']->title_en,
                'anchor' => 'occupation'
            ];
            $res['menu']['knowlege'] = [
                'title' => $res['knowlege']->title,
                'title_en' => $res['knowlege']->title_en,
                'anchor' => 'knowlege'
            ];
            $res['menu']['events'] = [
                'title' => $res['events']->title,
                'title_en' => $res['events']->title_en,
                'anchor' => 'events'
            ];
            $res['menu']['social'] = [
                'title' => $res['social']->title,
                'title_en' => $res['social']->title_en,
                'anchor' => 'social'
            ];
            $res['menu']['intern'] = [
                'title' => $res['intern']->title,
                'title_en' => $res['intern']->title_en,
                'anchor' => 'intern'
            ];
            $res['menu']['reference'] = [
                'title' => $res['reference']->title,
                'title_en' => $res['reference']->title_en,
                'anchor' => 'reference'
            ];
            $res['menu']['newsletter'] = [
                'title' => $res['newsletter']->title,
                'title_en' => $res['newsletter']->title_en,
                'anchor' => 'newsletter'
            ];
        }

        //advogados
        if($page->id == 2){
            $res['banner'] = Banner::find(1);
            $res['texto'] = Text::find(2);
            $res['alumni'] = Call::find(8);
        }
        //atuação
        if($page->id == 3){
            $res['banner'] = Banner::find(2);
            $res['texto'] = Text::find(1);
        }

        //echo json_encode($page);
        return PageResource::collection($res);        
    }
}
