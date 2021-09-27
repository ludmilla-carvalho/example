<?php

namespace App\Http\Controllers;

use App\Http\Resources\Timeline as TimelineResource;
use App\Models\Timeline;

class TimelineController extends Controller
{
    public function index()
    {
        $timeline = Timeline::orderBy('year', 'asc')->get();
        return new TimelineResource($timeline);
    }

}
