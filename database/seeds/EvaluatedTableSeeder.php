<?php

use Illuminate\Database\Seeder;

class EvaluatedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('evaluated')->insert([
          'name' => 'Ascencio Gonzales Joel Alberto',
          'image' => 'joelascencio.png',
          'category_id' => 13,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Fajardo De La Cruz Luis Jhon',
          'image' => 'luisfajardo.jpg',
          'category_id' => 9,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Saravia Flores Jorge Luis Abdías',
          'image' => 'luissaravia.png',
          'category_id' => 3,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Ñañez Vasquez Ruddy Katherine',
          'image' => 'ruddyñañez.jpg',
          'category_id' => 3,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Sanchez Huacahuasi, Marco Antonio',
          'image' => 'marcosanchez.jpg',
          'category_id' => 3,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Carmen Aliaga Pérez',
          'image' => 'carmenaliaga.png',
          'category_id' => 3,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Altamirano Perez Raul King',
          'image' => 'raulaltamirano.png',
          'category_id' => 4,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Joyo Uchuñaupa Leoncio Juan',
          'image' => 'leonciojoyo.png',
          'category_id' => 7,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Jesús Meza Palomino',
          'image' => 'jesusmeza.png',
          'category_id' => 4,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Jhonatan Aliaga Perez',
          'image' => 'jhonatanaliaga.png',
          'category_id' => 4,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Quintana Pizarro Yesenia Mercedes',
          'image' => 'yeseniaquintana.png',
          'category_id' => 12,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Olascoaga Alva Elina',
          'image' => 'elinaolascoaga.png',
          'category_id' => 5,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Tinajeros  Salazar Jessica',
          'image' => 'jessicatinajeros.png',
          'category_id' => 8,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Boyd Brenis César Augusto',
          'image' => 'cesarboyd.png',
          'category_id' => 8,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Arosena Aguirre Luis Arturo',
          'image' => 'luisarosena.png',
          'category_id' => 2,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Hernandez Chang Merly Zulema',
          'image' => 'merlyhernandez.png',
          'category_id' => 2,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Palomino Pebe Juan Pablo',
          'image' => 'juanpalomino.png',
          'category_id' => 2,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Huamaní Rojas Elva Ynes',
          'image' => 'elvahuamani.png',
          'category_id' => 2,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Falconi Muñante Bertha Elena',
          'image' => 'berthafalconi.png',
          'category_id' => 2,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Rios Soto Gladys Manuela',
          'image' => 'gladysrios.png',
          'category_id' => 2,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Napa Mesa Rosa Ana',
          'image' => 'rosanapa.png',
          'category_id' => 2,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Marina Ccoyca Portillo',
          'image' => 'marinaccoyca.png',
          'category_id' => 2,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Wilfredo Marroquin Villanueva',
          'image' => 'wilfredomarroquin.jpg',
          'category_id' => 14,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Giancarlo Pradinet',
          'image' => 'giancarlopradinet.png',
          'category_id' => 11,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Rudy Laguna',
          'image' => 'rudylaguna.jpg',
          'category_id' => 16,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Fátima Cabrera',
          'image' => 'fatimacabrera.jpg',
          'category_id' => 15,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Katherine Piedra',
          'image' => 'katherinepiedra.jpg',
          'category_id' => 16,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Gene Eduardo Olarte',
          'image' => 'eduardoolarte.jpg',
          'category_id' => 15,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'Alvaro Orozco',
          'image' => 'alvaroorozco.jpg',
          'category_id' => 15,
      ]);

      DB::table('evaluated')->insert([
          'name' => 'José Perez',
          'image' => 'joseperez.png',
          'category_id' => 10,
      ]);
    }
}
