<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AntiBody extends Model
{
    protected $fillable = [
        'user_id',
        'vaccine_count',
        'vaccine_date_1',
        'vaccine_date_2',
        'vaccine_date_3',
        'vaccine_date_4',
        'vaccine_date_5',
        'positive_count',
        'positive_date_1',
        'positive_date_2',
        'positive_date_3',
        'positive_date_4',
        'positive_date_5',
    ];
}
