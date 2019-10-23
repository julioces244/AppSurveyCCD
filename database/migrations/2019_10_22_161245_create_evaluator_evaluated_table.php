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
            $table->double('answer1');
            $table->double('answer2');
            $table->double('answer3');
            $table->double('answer4');
            $table->double('answer5');
            $table->double('answer6');
            $table->double('answer7');
            $table->double('answer8');
            $table->double('answer9');
            $table->double('answer10');
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
