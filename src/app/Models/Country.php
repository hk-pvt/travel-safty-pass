<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'country_nm',
    ];

    public function coupons()
    {
        return $this->hasMany(Coupon::class);
    }

    public function policies()
    {
        return $this->hasMany(Policy::class);
    }

    public function guideLines()
    {
        return $this->hasMany(GuideLine::class);
    }
}
