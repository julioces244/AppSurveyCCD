<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->insert([
          'name' => 'CategoriaPrueba',
          'description' => 'Persona en el más alto nivel de la organización',
      ]);

      DB::table('categories')->insert([
          'name' => 'Acompañante Aprendizaje',
          'description' => 'AA',
      ]);

      DB::table('categories')->insert([
          'name' => 'Acompañante Digital',
          'description' => 'AD',
      ]);

      DB::table('categories')->insert([
          'name' => 'Acompañante Tecnología',
          'description' => 'AT',
      ]);

      DB::table('categories')->insert([
          'name' => 'Coordinador Aprendizaje',
          'description' => 'CA',
      ]);

      DB::table('categories')->insert([
          'name' => 'Coordinador Digital',
          'description' => 'CD',
      ]);

      DB::table('categories')->insert([
          'name' => 'Coordinador Tecnología',
          'description' => 'CT',
      ]);

      DB::table('categories')->insert([
          'name' => 'Especialista Aprendizaje',
          'description' => 'EA',
      ]);

      DB::table('categories')->insert([
          'name' => 'Especialista Digital',
          'description' => 'ED',
      ]);

      DB::table('categories')->insert([
          'name' => 'Especialista Tecnología',
          'description' => 'ET',
      ]);

      DB::table('categories')->insert([
          'name' => 'Seguridad CCD Pisco',
          'description' => 'SP',
      ]);

      DB::table('categories')->insert([
          'name' => 'Jefe Proyecto Aprendizaje',
          'description' => 'JA',
      ]);

      DB::table('categories')->insert([
          'name' => 'Jefe Proyecto D & T',
          'description' => 'JPD&T',
      ]);

      DB::table('categories')->insert([
          'name' => 'Soporte CCD Pisco',
          'description' => 'SP',
      ]);

      DB::table('categories')->insert([
          'name' => 'Soporte CCD Lima',
          'description' => 'SL',
      ]);

      DB::table('categories')->insert([
          'name' => 'Directorio CCD',
          'description' => 'DCCD',
      ]);


    }
}
