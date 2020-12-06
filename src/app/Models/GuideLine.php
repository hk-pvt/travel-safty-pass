<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuideLine extends Model
{
    protected $fillable = [
        'country_id',
        'title',
        'terms_body',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
