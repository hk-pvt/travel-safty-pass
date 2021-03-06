<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('user_name');
            $table->string('password');
            $table->string('passwordh');
            $table->string('email');
            $table->string('profile');
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
        Schema::dropIfExists('users');
    }
}
