<?php

namespace App\Http\Controllers;

use App\Http\Resources\Office as OfficeResource;
use App\Models\Office;

class OfficeController extends Controller
{
    public function index()
    {
        $office = Office::orderBy('order', 'asc')->get();
        return new OfficeResource($office);
    }

}
