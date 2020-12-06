<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActionHistory extends Model
{
    protected $fillable = [
        'user_id',
        'shop_id',
        'action_date',
        'temperature',
    ];
}
