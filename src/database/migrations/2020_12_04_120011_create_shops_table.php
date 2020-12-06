<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('user_name');
            $table->string('password');
            $table->string('passwordh');
            $table->string('email');
            $table->unsignedInteger('category_id');
            $table->string('shop_place');
            $table->text('shop_opening_hours');
            $table->string('shop_url');
            $table->text('shop_detail');
            $table->string('shop_list_logo');
            $table->string('shop_inside_logo1');
            $table->string('shop_inside_pr');
            $table->string('shop_inside_1');
            $table->string('shop_inside_2');
            $table->string('shop_movie_id');
            $table->tinyInteger('display_flag');
            $table->tinyInteger('approval_flag');
            $table->tinyInteger('device_type');
            $table->string('device_token');
            $table->tinyInteger('push_ng_flag');
            $table->tinyInteger('push_ng_flag_admin');
            $table->dateTime('last_event_get_datetime');
            $table->tinyInteger('del_flg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
