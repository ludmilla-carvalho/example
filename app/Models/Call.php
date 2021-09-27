<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'page_id', 'image', 'title', 'title_en', 'text', 'text_en', 'link', 'text_link', 'text_link_en', 'embed', 'publish'
    ];

    /*public function getImageAttribute($value)
    {
        if($value){
            return 'storage/calls/' . $this->page_id . '/' . $value;
        }
    }*/
}
