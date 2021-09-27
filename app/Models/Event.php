<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'title_en', 'slug', 'free', 'date', 'hour', 'online', 'local', 'vacancies', 'amount', 'external', 'link', 'image', 'text', 'text_en', 'publish', 'highlight'
    ];
 
    public function speakers()
    {
        return $this->belongsToMany('App\Models\Speaker', 'event_speaker', 'event_id', 'speaker_id')->withTimestamps()->orderBy('title', 'ASC');
    }

    public function schedules()
    {
        return $this->hasMany('App\Models\Schedule')->orderBy('hour', 'ASC');
    }
            

    // public function related()
    // {
    //     return $this->belongsToMany('App\Models\Area', 'area_area', 'parent_id', 'area_id')->withTimestamps()->orderBy('title', 'ASC');
    // }

}
