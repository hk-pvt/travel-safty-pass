<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConditionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conditions', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('temperature1');
            $table->date('measure1');
            $table->integer('condition1_1');
            $table->integer('condition1_2');
            $table->integer('condition1_3');
            $table->integer('condition1_4');
            $table->integer('condition1_5');
            $table->integer('condition1_6');
            $table->integer('temperature2');
            $table->date('measure2');
            $table->integer('condition2_1');
            $table->integer('condition2_2');
            $table->integer('condition2_3');
            $table->integer('condition2_4');
            $table->integer('condition2_5');
            $table->integer('condition2_6');
            $table->integer('temperature3');
            $table->date('measure3');
            $table->integer('condition3_1');
            $table->integer('condition3_2');
            $table->integer('condition3_3');
            $table->integer('condition3_4');
            $table->integer('condition3_5');
            $table->integer('condition3_6');
            $table->integer('temperature4');
            $table->date('measure4');
            $table->integer('condition4_1');
            $table->integer('condition4_2');
            $table->integer('condition4_3');
            $table->integer('condition4_4');
            $table->integer('condition4_5');
            $table->integer('condition4_6');
            $table->integer('temperature5');
            $table->date('measure5');
            $table->integer('condition5_1');
            $table->integer('condition5_2');
            $table->integer('condition5_3');
            $table->integer('condition5_4');
            $table->integer('condition5_5');
            $table->integer('condition5_6');
            $table->integer('temperature6');
            $table->date('measure6');
            $table->integer('condition6_1');
            $table->integer('condition6_2');
            $table->integer('condition6_3');
            $table->integer('condition6_4');
            $table->integer('condition6_5');
            $table->integer('condition6_6');
            $table->integer('temperature7');
            $table->date('measure7');
            $table->integer('condition7_1');
            $table->integer('condition7_2');
            $table->integer('condition7_3');
            $table->integer('condition7_4');
            $table->integer('condition7_5');
            $table->integer('condition7_6');
            $table->integer('temperature8');
            $table->date('measure8');
            $table->integer('condition8_1');
            $table->integer('condition8_2');
            $table->integer('condition8_3');
            $table->integer('condition8_4');
            $table->integer('condition8_5');
            $table->integer('condition8_6');
            $table->integer('temperature9');
            $table->date('measure9');
            $table->integer('condition9_1');
            $table->integer('condition9_2');
            $table->integer('condition9_3');
            $table->integer('condition9_4');
            $table->integer('condition9_5');
            $table->integer('condition9_6');
            $table->integer('temperature10');
            $table->date('measure10');
            $table->integer('condition10_1');
            $table->integer('condition10_2');
            $table->integer('condition10_3');
            $table->integer('condition10_4');
            $table->integer('condition10_5');
            $table->integer('condition10_6');
            $table->integer('temperature11');
            $table->date('measure11');
            $table->integer('condition11_1');
            $table->integer('condition11_2');
            $table->integer('condition11_3');
            $table->integer('condition11_4');
            $table->integer('condition11_5');
            $table->integer('condition11_6');
            $table->integer('temperature12');
            $table->date('measure12');
            $table->integer('condition12_1');
            $table->integer('condition12_2');
            $table->integer('condition12_3');
            $table->integer('condition12_4');
            $table->integer('condition12_5');
            $table->integer('condition12_6');
            $table->integer('temperature13');
            $table->date('measure13');
            $table->integer('condition13_1');
            $table->integer('condition13_2');
            $table->integer('condition13_3');
            $table->integer('condition13_4');
            $table->integer('condition13_5');
            $table->integer('condition13_6');
            $table->integer('temperature14');
            $table->date('measure14');
            $table->integer('condition14_1');
            $table->integer('condition14_2');
            $table->integer('condition14_3');
            $table->integer('condition14_4');
            $table->integer('condition14_5');
            $table->integer('condition14_6');
            $table->timestamps();

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
        Schema::dropIfExists('conditions');
    }
}
