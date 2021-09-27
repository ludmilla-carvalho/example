<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'name_en', 'slug', 'icon', 'tit_seo', 'tit_seo_en', 'desc_seo', 'desc_seo_en', 'is_fixed', 'publish', 'order' 
    ];

    public function subpages()
    {
        return $this->hasMany('App\Models\SubPage')->orderBy('order', 'ASC');
    }


    public function highlights()
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

    public function text()
    {
        return $this->hasOne('App\Models\Text');
    }

    /*public function getIconAttribute($value)
    {
        if($value){
            return 'storage/pages/icons/' . $value;
        }
    }*/
}
