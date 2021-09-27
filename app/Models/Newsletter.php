<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    //use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'lang', 'ip', 'privacy_version', 'term_version'
    ];

    public function areas()
    {
        return $this->belongsToMany('App\Models\Area', 'area_newsletter', 'newsletter_id', 'area_id')->withTimestamps()->orderBy('title', 'ASC');
    }
}
