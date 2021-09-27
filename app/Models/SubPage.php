<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubPage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'page_id', 'name', 'name_en', 'slug', 'tit_seo', 'tit_seo_en', 'desc_seo', 'desc_seo_en', 'publish', 'order',
    ];

    public function page()
    {
        return $this->belongsTo('App\Models\Page');
    }

    public function banner()
    {
        return $this->hasOne('App\Models\Banner');
    }

    public function text()
    {
        return $this->hasOne('App\Models\Text');
    }

    public function calls()
    {
        return $this->hasMany('App\Models\Call');
    }

    /*public function highlights()
    {
        return $this->hasMany('App\Models\Highlight')->orderBy('order', 'ASC');
    }

    public function calls()
    {
        return $this->hasMany('App\Models\Call');
    }

    public function banner()
    {
        return $this->hasOne('App\Models\Banner');
    }

    */

}
