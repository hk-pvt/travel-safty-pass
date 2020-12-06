<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->unsignedInteger('shop_id');
            $table->unsignedInteger('country_id');
            $table->string('title');
            $table->dateTime('coupon_start');
            $table->dateTime('coupon_end');
            $table->text('coupon_body');
            $table->string('coupon_image');
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
        Schema::dropIfExists('coupons');
    }
}
