<?php

namespace App\Http\Controllers;

use App\Http\Resources\Privacy as PrivacyResource;
use App\Models\Privacy;

class PrivacyController extends Controller
{
    public function index()
    {
        $privacy = Privacy::orderBy('id', 'desc')->first();
        return new PrivacyResource($privacy);
    }

}
