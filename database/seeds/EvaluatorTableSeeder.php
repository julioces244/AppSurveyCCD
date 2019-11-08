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
          'name' => 'Ascencio Gonzales Joel Alberto',
          'username' => '20031',
          'password' => Hash::make('ccd2019'),
          'category_id' => 13,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Fajardo De La Cruz Luis Jhon',
          'username' => '30025',
          'password' => Hash::make('ccd2019'),
          'category_id' => 9,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Saravia Flores Jorge Luis Abdías',
          'username' => '50016',
          'password' => Hash::make('ccd2019'),
          'category_id' => 3,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Ñañez Vasquez Ruddy Katherine',
          'username' => '50036',
          'password' => Hash::make('ccd2019'),
          'category_id' => 3,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Sanchez Huacahuasi, Marco Antonio',
          'username' => '50048',
          'password' => Hash::make('ccd2019'),
          'category_id' => 3,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Carmen Aliaga Pérez',
          'username' => '50071',
          'password' => Hash::make('ccd2019'),
          'category_id' => 3,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Altamirano Perez Raul King',
          'username' => '50011',
          'password' => Hash::make('ccd2019'),
          'category_id' => 4,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Joyo Uchuñaupa Leoncio Juan',
          'username' => '40044',
          'password' => Hash::make('ccd2019'),
          'category_id' => 7,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Jesús Meza Palomino',
          'username' => '50015',
          'password' => Hash::make('ccd2019'),
          'category_id' => 4,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Jhonatan Aliaga Perez',
          'username' => '50098',
          'password' => Hash::make('ccd2019'),
          'category_id' => 4,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Quintana Pizarro Yesenia Mercedes',
          'username' => '20021',
          'password' => Hash::make('ccd2019'),
          'category_id' => 12,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Olascoaga Alva Elina',
          'username' => '40032',
          'password' => Hash::make('ccd2019'),
          'category_id' => 5,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Tinajeros  Salazar Jessica',
          'username' => '30039',
          'password' => Hash::make('ccd2019'),
          'category_id' => 8,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Boyd Brenis César Augusto',
          'username' => '30057',
          'password' => Hash::make('ccd2019'),
          'category_id' => 8,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Arosena Aguirre Luis Arturo',
          'username' => '50062',
          'password' => Hash::make('ccd2019'),
          'category_id' => 2,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Hernandez Chang Merly Zulema',
          'username' => '50055',
          'password' => Hash::make('ccd2019'),
          'category_id' => 2,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Palomino Pebe Juan Pablo',
          'username' => '50087',
          'password' => Hash::make('ccd2019'),
          'category_id' => 2,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Huamaní Rojas Elva Ynes',
          'username' => '50023',
          'password' => Hash::make('ccd2019'),
          'category_id' => 2,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Falconi Muñante Bertha Elena',
          'username' => '50077',
          'password' => Hash::make('ccd2019'),
          'category_id' => 2,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Rios Soto Gladys Manuela',
          'username' => '50031',
          'password' => Hash::make('ccd2019'),
          'category_id' => 2,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Napa Mesa Rosa Ana',
          'username' => '50059',
          'password' => Hash::make('ccd2019'),
          'category_id' => 2,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Marina Ccoyca Portillo',
          'username' => '50029',
          'password' => Hash::make('ccd2019'),
          'category_id' => 2,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Wilfredo Marroquin Villanueva',
          'username' => '20035',
          'password' => Hash::make('ccd2019'),
          'category_id' => 14,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Giancarlo Pradinet',
          'username' => '20049',
          'password' => Hash::make('ccd2019'),
          'category_id' => 11,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Rudy Laguna',
          'username' => '10050',
          'password' => Hash::make('ccd2019'),
          'category_id' => 16,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Fátima Cabrera',
          'username' => '20091',
          'password' => Hash::make('ccd2019'),
          'category_id' => 15,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Katherine Piedra',
          'username' => '10052',
          'password' => Hash::make('ccd2019'),
          'category_id' => 16,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Gene Eduardo Olarte',
          'username' => '20077',
          'password' => Hash::make('ccd2019'),
          'category_id' => 15,
      ]);

      DB::table('evaluators')->insert([
          'name' => 'Alvaro Orozco',
          'username' => '20087',
          'password' => Hash::make('ccd2019'),
          'category_id' => 15,
      ]);
    }
}
