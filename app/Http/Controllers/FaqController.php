<?php

namespace App\Http\Controllers;

use App\Http\Resources\Faq as FaqResource;
use App\Models\PrivacyFaq;

class FaqController extends Controller
{
    public function index()
    {
        $faq = PrivacyFaq::orderBy('id', 'asc')->get();
        return new FaqResource($faq);
    }

}
