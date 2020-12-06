<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SelfCheck extends Model
{
    protected $fillable = [
        'self_goodtemp',
        'self_ordinarytemp',
        'self_wariningtemp',
        'self_goodcolor',
        'self_ordinarycolor',
        'self_wariningcolor',
        'condition_num',
        'condition1',
        'condition2',
        'condition3',
        'condition4',
        'condition5',
        'condition6',
        'del_flg',
    ];
}
