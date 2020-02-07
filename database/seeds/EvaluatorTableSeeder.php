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
          'name' => 'Usuario001',
          'username' => '20031',
          'password' => Hash::make('ccd2019'),
          'category_id' => 13,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario002',
          'username' => '30025',
          'password' => Hash::make('ccd2019'),
          'category_id' => 9,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario003',
          'username' => '50016',
          'password' => Hash::make('ccd2019'),
          'category_id' => 3,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario004',
          'username' => '50036',
          'password' => Hash::make('ccd2019'),
          'category_id' => 3,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario005',
          'username' => '50048',
          'password' => Hash::make('ccd2019'),
          'category_id' => 3,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario006',
          'username' => '50071',
          'password' => Hash::make('ccd2019'),
          'category_id' => 3,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario007',
          'username' => '50011',
          'password' => Hash::make('ccd2019'),
          'category_id' => 4,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario008',
          'username' => '40044',
          'password' => Hash::make('ccd2019'),
          'category_id' => 7,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario009',
          'username' => '50015',
          'password' => Hash::make('ccd2019'),
          'category_id' => 4,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario010',
          'username' => '50098',
          'password' => Hash::make('ccd2019'),
          'category_id' => 4,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario011',
          'username' => '20021',
          'password' => Hash::make('ccd2019'),
          'category_id' => 12,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario012',
          'username' => '40032',
          'password' => Hash::make('ccd2019'),
          'category_id' => 5,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario013',
          'username' => '30039',
          'password' => Hash::make('ccd2019'),
          'category_id' => 8,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario014',
          'username' => '30057',
          'password' => Hash::make('ccd2019'),
          'category_id' => 8,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario015',
          'username' => '50062',
          'password' => Hash::make('ccd2019'),
          'category_id' => 2,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario016',
          'username' => '50055',
          'password' => Hash::make('ccd2019'),
          'category_id' => 2,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario017',
          'username' => '50087',
          'password' => Hash::make('ccd2019'),
          'category_id' => 2,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario018',
          'username' => '50023',
          'password' => Hash::make('ccd2019'),
          'category_id' => 2,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario019',
          'username' => '50077',
          'password' => Hash::make('ccd2019'),
          'category_id' => 2,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario020',
          'username' => '50031',
          'password' => Hash::make('ccd2019'),
          'category_id' => 2,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario021',
          'username' => '50059',
          'password' => Hash::make('ccd2019'),
          'category_id' => 2,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario022',
          'username' => '50029',
          'password' => Hash::make('ccd2019'),
          'category_id' => 2,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario023',
          'username' => '20035',
          'password' => Hash::make('ccd2019'),
          'category_id' => 14,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario024',
          'username' => '20049',
          'password' => Hash::make('ccd2019'),
          'category_id' => 11,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario025',
          'username' => '10050',
          'password' => Hash::make('ccd2019'),
          'category_id' => 16,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario026',
          'username' => '20091',
          'password' => Hash::make('ccd2019'),
          'category_id' => 15,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario027',
          'username' => '10052',
          'password' => Hash::make('ccd2019'),
          'category_id' => 16,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario028',
          'username' => '20077',
          'password' => Hash::make('ccd2019'),
          'category_id' => 15,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario029',
          'username' => '20087',
          'password' => Hash::make('ccd2019'),
          'category_id' => 15,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Usuario030',
          'username' => '30074',
          'password' => Hash::make('ccd2019'),
          'category_id' => 10,
      ]);
    }
}
