<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvaluatorEvaluatedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluator_evaluated', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->String('answer1');
            $table->String('answer2');
            $table->String('answer3');
            $table->String('answer4');
            $table->String('answer5');
            $table->String('answer6');
            $table->String('answer7');
            $table->String('answer8');
            $table->String('answer9');
            $table->String('answer10');
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
        Schema::dropIfExists('evaluator_evaluated');
    }
}
