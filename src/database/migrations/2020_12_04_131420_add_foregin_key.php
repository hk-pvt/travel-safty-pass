<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeginKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // shops
        Schema::table('shops', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories');
        });

        // action_histories
        Schema::table('action_histories', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('shop_id')->references('id')->on('shops');
        });

        // coupons
        Schema::table('coupons', function (Blueprint $table) {
            $table->foreign('shop_id')->references('id')->on('shops');
            $table->foreign('country_id')->references('id')->on('countries');
        });

        // coupon_uses
        Schema::table('coupon_uses', function (Blueprint $table) {
            $table->foreign('coupon_id')->references('id')->on('coupons');
        });

        // policies
        Schema::table('policies', function (Blueprint $table) {
            $table->foreign('country_id')->references('id')->on('countries');
        });

        // guide_lines
        Schema::table('guide_lines', function (Blueprint $table) {
            $table->foreign('country_id')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // shops
        Schema::table('shops', function (Blueprint $table) {
            $table->dropForeign('shops_category_id_foreign');
        });

        // action_histories
        Schema::table('action_histories', function (Blueprint $table) {
            $table->dropForeign('action_histories_user_id_foreign');
            $table->dropForeign('action_histories_shop_id_foreign');
        });

        // coupons
        Schema::table('coupons', function (Blueprint $table) {
            $table->dropForeign('coupons_shop_id_foreign');
            $table->dropForeign('coupons_country_id_foreign');
        });

        // coupon_uses
        Schema::table('coupon_uses', function (Blueprint $table) {
            $table->dropForeign('coupon_uses_coupon_id_foreign');
        });

        // policies
        Schema::table('policies', function (Blueprint $table) {
            $table->dropForeign('policies_country_id_foreign');
        });

        // guide_lines
        Schema::table('guide_lines', function (Blueprint $table) {
            $table->dropForeign('guide_lines_country_id_foreign');
        });
    }
}
