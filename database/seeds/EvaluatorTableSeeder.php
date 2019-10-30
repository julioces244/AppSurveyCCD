<?php

use Illuminate\Database\Seeder;

class EvaluatorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('evaluators')->insert([
          'name' => 'Julio César',
          'username' => '201',
          'password' => 'ccd2019',
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Julio Cesar2',
          'description' => '202',
          'password' => 'ccd2019',
      ]);
    }
}
