<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = [
        'shop_id',
        'country_id',
        'title',
        'coupon_start',
        'coupon_end',
        'coupon_body',
        'coupon_image',
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'coupon_uses', 'coupon_id', 'user_id');
    }

}
