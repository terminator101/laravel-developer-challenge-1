<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TvQuote extends Model
{
    protected $fillable = [
        'tv_series', 'season', 'episode', 'quote'
    ];
}