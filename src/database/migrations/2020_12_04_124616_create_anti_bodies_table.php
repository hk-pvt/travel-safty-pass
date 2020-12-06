<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntiBodiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anti_bodies', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('vaccine_count');
            $table->dateTime('vaccine_date_1');
            $table->dateTime('vaccine_date_2');
            $table->dateTime('vaccine_date_3');
            $table->dateTime('vaccine_date_4');
            $table->dateTime('vaccine_date_5');
            $table->integer('positive_count');
            $table->dateTime('positive_date_1');
            $table->dateTime('positive_date_2');
            $table->dateTime('positive_date_3');
            $table->dateTime('positive_date_4');
            $table->dateTime('positive_date_5');

            // 主キー追加
            $table->primary('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anti_bodies');
    }
}
