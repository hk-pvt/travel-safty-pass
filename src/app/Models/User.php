<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name',
        'password',
        'passwordh',
        'email',
        'profile',
        'device_type',
        'device_token',
        'push_ng_flag',
        'push_ng_flag_admin',
        'last_event_get_datetime',
        'del_flg',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function shops()
    {
        return $this->belongsToMany(Shop::class, 'action_histories', 'user_id', 'shop_id');
    }

    public function coupons()
    {
        return $this->belongsToMany(Coupon::class, 'coupon_uses', 'user_id', 'coupon_id');
    }
}
