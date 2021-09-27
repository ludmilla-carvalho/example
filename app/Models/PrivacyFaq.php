<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivacyFaq extends Model
{
    use HasFactory;

    //privacy_faqs
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'title_en', 'text', 'text_en', 'privacy_id',
    ];
}
