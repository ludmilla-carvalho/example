<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'award_type_id', 'text', 'text_en'
    ];

    public function award_type()
    {
        return $this->belongsTo('App\Models\AwardType');
    }


}
