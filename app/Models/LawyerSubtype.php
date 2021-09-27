<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LawyerSubtype extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lawyer_type_id', 'title', 'title_en', 'plural', 'plural_en', 'feminine', 'feminine_en',
    ];

    public function lawyer_type()
    {
        return $this->belongsTo('App\Models\LawyerType');
    }

    public function lawyers()
    {
        return $this->hasMany('App\Models\Lawyer')->orderBy('name', 'ASC');
    }

}
