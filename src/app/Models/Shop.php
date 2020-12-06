<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
        'user_name',
        'password',
        'passwordh',
        'email',
        'category_id',
        'shop_place',
        'shop_opening_hours',
        'shop_url',
        'shop_detail',
        'shop_list_logo',
        'shop_inside_logo1',
        'shop_inside_pr',
        'shop_inside_1',
        'shop_inside_2',
        'shop_movie_id',
        'display_flag',
        'approval_flag',
        'device_type',
        'device_token',
        'push_ng_flag',
        'push_ng_flag_admin',
        'last_event_get_datetime',
        'del_flg',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function coupons()
    {
        return $this->hasMany(Coupon::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'action_histories', 'shop_id', 'user_id');
    }
}
