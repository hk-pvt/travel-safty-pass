<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    protected $fillable = [
        'country_id',
        'title',
        'policy_body',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
