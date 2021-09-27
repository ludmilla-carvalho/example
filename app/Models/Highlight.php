<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Highlight extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'page_id', 'image', 'image_mobile', 'title', 'title_en', 'sub_title', 'sub_title_en', 'link', 'text_link', 'text_link_en', 'publish', 'order'
    ];
}
