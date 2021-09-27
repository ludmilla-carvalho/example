<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'title_en', 'text', 'text_en', 'icon', 'image'
    ];

    public function related()
    {
        return $this->belongsToMany('App\Models\Area', 'area_area', 'parent_id', 'area_id')->withTimestamps()->orderBy('title', 'ASC');
    }

}
