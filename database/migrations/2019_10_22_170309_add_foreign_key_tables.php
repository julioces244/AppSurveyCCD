<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('evaluator_evaluated', function (Blueprint $table) {

          $table->unsignedBigInteger('evaluator_id')->unsigned();
          $table->foreign('evaluator_id')->references('idEvaluator')->on('evaluators');

          $table->unsignedBigInteger('evaluated_id')->unsigned();
          $table->foreign('evaluated_id')->references('idEvaluated')->on('evaluated');

        });

        Schema::table('evaluators', function (Blueprint $table) {

          $table->unsignedBigInteger('category_id')->unsigned();
          $table->foreign('category_id')->references('idCategory')->on('categories');

        });

        Schema::table('evaluated', function (Blueprint $table) {

          $table->unsignedBigInteger('category_id')->unsigned();
          $table->foreign('category_id')->references('idCategory')->on('categories');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
