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
            $table->String('answer1')->default('Sin responder');
            $table->String('answer2')->default('Sin responder');
            $table->String('answer3')->default('Sin responder');
            $table->String('answer4')->default('Sin responder');
            $table->String('answer5')->default('Sin responder');
            $table->String('answer6')->default('Sin responder');
            $table->String('answer7')->default('Sin responder');
            $table->String('answer8')->default('Sin responder');
            $table->String('answer9')->default('Sin responder');
            $table->String('answer10')->default('Sin responder');
            $table->String('answer11')->default('Sin responder');
            $table->String('answer12')->default('Sin responder');
            $table->String('answer13')->default('Sin responder');
            $table->String('answer14')->default('Sin responder');
            $table->String('answer15')->default('Sin responder');
            $table->String('answer16')->default('Sin responder');
            $table->String('answer17')->default('Sin responder');
            $table->String('answer18')->default('Sin responder');
            $table->String('answer19')->default('Sin responder');
            $table->String('answer20')->default('Sin responder');
            $table->String('answer21')->default('Sin responder');
            $table->String('answer22')->default('Sin responder');
            $table->String('answer23')->default('Sin responder');
            $table->String('answer24')->default('Sin responder');
            $table->String('answer25')->default('Sin responder');
            $table->String('answer26')->default('Sin responder');
            $table->String('answer27')->default('Sin responder');
            $table->String('answer28')->default('Sin responder');
            $table->String('answer29')->default('Sin responder');
            $table->String('answer30')->default('Sin responder');
            $table->String('answer31')->default('Sin responder');
            $table->String('answer32')->default('Sin responder');
            $table->String('answer33')->default('Sin responder');
            $table->String('answer34')->default('Sin responder');
            $table->String('answer35')->default('Sin responder');
            $table->String('answer36')->default('Sin responder');
            $table->String('answer37')->default('Sin responder');
            $table->String('answer38')->default('Sin responder');
            $table->String('answer39')->default('Sin responder');
            $table->String('answer40')->default('Sin responder');
            $table->String('answer41')->default('Sin responder');
            $table->String('answer42')->default('Sin responder');
            $table->String('answer43')->default('Sin responder');
            $table->String('answer44')->default('Sin responder');
            $table->String('answer45')->default('Sin responder');
            $table->String('answer46')->default('Sin responder');
            $table->String('answer47')->default('Sin responder');
            $table->String('answer48')->default('Sin responder');
            $table->String('answer49')->default('Sin responder');
            $table->String('answer50')->default('Sin responder');
            $table->String('answer51')->default('Sin responder');
            $table->String('answer52')->default('Sin responder');
            $table->String('answer53')->default('Sin responder');
            $table->String('answer54')->default('Sin responder');
            $table->String('answer55')->default('Sin responder');
            $table->String('answer56')->default('Sin responder');
            $table->String('answer57')->default('Sin responder');
            $table->String('answer58')->default('Sin responder');
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
