<?php

namespace App\Http\Controllers;

use App\Models\LawyerType;
use App\Http\Resources\LawyerType as LawyerTypeResource;
use Illuminate\Http\Request;

class LawyerTypeController extends Controller
{
    public function index(Request $request)
    {
        return new LawyerTypeResource(LawyerType::get());
    }

}
