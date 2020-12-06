<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category_name',
        'display_order',
        'del_flg',
    ];

    public function shops()
    {
        return $this->hasMany(Shop::class);
    }
}
