<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class AwardLawyer extends Pivot
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lawyer_id', 'award_id', 'year',
    ];

    /*
    protected $appends = [
        'status_updated_by_nice',
    ];

    public function getStatusUpdatedByNiceAttribute()
    {
        $user = User::find($this->status_updated_by);

        if (!$user) return 'n/a';

        return $user->name;
    }
    
    
    */

}
