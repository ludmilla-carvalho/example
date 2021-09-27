<?php

namespace App\Http\Controllers;

use App\Http\Resources\Term as TermResource;
use App\Models\Term;
use Illuminate\Http\Request;

class TermController extends Controller
{
    public function index()
    {
        $term = Term::orderBy('id', 'desc')->first();
        return new TermResource($term);
    }

    
}
