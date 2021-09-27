<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'lawyer_type_id', 'lawyer_subtype_id', 'text', 'text_en', 'email', 'phone', 'linkedin', 'image', 'gender'
    ];

    									
    public function lawyer_type()
    {
        return $this->belongsTo('App\Models\LawyerType');
    }

    public function lawyer_subtype()
    {
        return $this->belongsTo('App\Models\LawyerSubtype');
    }

    public function areas()
    {
        return $this->belongsToMany('App\Models\Area', 'area_lawyer', 'lawyer_id', 'area_id')->withTimestamps()->orderBy('title', 'ASC');
    }

    public function languages()
    {
        return $this->belongsToMany('App\Models\Language', 'language_lawyer', 'lawyer_id', 'language_id')->withTimestamps()->orderBy('title', 'ASC');
    }

    public function cities()
    {
        return $this->belongsToMany('App\Models\City', 'city_lawyer', 'lawyer_id', 'city_id')->withTimestamps()->orderBy('title', 'ASC');
    }

    public function graduation()
    {
        return $this->belongsToMany('App\Models\Graduation', 'graduation_lawyer', 'lawyer_id', 'graduation_id')->withTimestamps()/*->orderBy('title', 'ASC')*/;
    }

    public function experience()
    {
        return $this->belongsToMany('App\Models\Experience', 'experience_lawyer', 'lawyer_id', 'experience_id')->withTimestamps()/*->orderBy('title', 'ASC')*/;
    }

    public function awards()
    {
        //return $this->belongsToMany('App\Models\Award', 'award_lawyer', 'lawyer_id', 'award_id')->withTimestamps();
        return $this->belongsToMany('App\Models\Award')
        ->using('App\Models\AwardLawyer')
        ->with('award_type')
        ->withPivot('lawyer_id','award_id','year');
    }

}
