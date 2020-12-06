<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSelfChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('self_checks', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->integer('self_goodtemp');
            $table->integer('self_ordinarytemp');
            $table->integer('self_wariningtemp');
            $table->string('self_goodcolor');
            $table->string('self_ordinarycolor');
            $table->string('self_wariningcolor');
            $table->integer('condition_num');
            $table->string('condition1');
            $table->string('condition2');
            $table->string('condition3');
            $table->string('condition4');
            $table->string('condition5');
            $table->string('condition6');
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
        Schema::dropIfExists('self_checks');
    }
}
