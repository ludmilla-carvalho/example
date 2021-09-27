<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Http\Resources\City as CityResource;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(Request $request)
    {
        return new CityResource(City::orderBy('name', 'asc')->get());
    }

}
