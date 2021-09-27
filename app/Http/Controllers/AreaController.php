<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Http\Resources\Area as AreaResource;


class AreaController extends Controller
{
    public function index(){
        $areas = Area::orderBy('title', 'asc')->get();
        return AreaResource::collection($areas);
    }

    public function show($slug){
        $area = Area::with(['related'])->where('slug', $slug)->get();
        return AreaResource::collection($area);
    }
}
