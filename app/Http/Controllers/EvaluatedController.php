<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Evaluated;

class EvaluatedController extends Controller
{




    public function getEvaluatedAll(){

      try{
        $evalauteds = Evaluated::All();;
        return $evalauteds;
        return response()->json(['type' => 'success', 'message' => 'Lista obtenida'], 200);

      }catch(\Exception $e){

        return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);

      }

    }

    public function getEvaluated($idcategory){

      try{

        //$idevalu = DB::table('evaluated')->where('idEvaluated', $idcategory)->value('category_id');
        //dd($idevalu);

        $array = [];

        switch($idcategory){
          case 16:
          $array = [16,15,14,13,12];
          break;

          case 15:
          $array = [12,13,14,15,16];
          break;

          case 14:
          $array = [11,12,13,14,15,16];
          break;

          case 13:
          $array = [9,10,12,13,14,15,16];
          break;

          case 12:
          $array = [8,12,13,14,15,16];
          break;

          case 11:
          $array = [14];
          break;

          case 10:
          $array = [10,13,7,14];
          break;

          case 9:
          $array = [9,13,14,6];
          break;

          case 8:
          $array = [8,12,5];
          break;

          case 7:
          $array = [7,4,10,13];
          break;

          case 6:
          $array = [6,3,9,13];
          break;

          case 5:
          $array = [5,2,8,12];
          break;

          case 4:
          $array = [4,7,13];
          break;

          case 3:
          $array = [3,6,13];
          break;

          case 2:
          $array = [2,5,12];
          break;
        }

        $evalauteds = DB::table('evaluated')->whereIn('category_id', $idself )->whereNotIn('idevaluated', [$idcategory])->get();
        return $evalauteds;
        return response()->json(['type' => 'success', 'message' => 'Lista obtenida'], 200);

      }catch(\Exception $e){

        return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);

      }

    }


    //Obteniendo evaluateds sin el propio usuario mal!!!

    public function getEvaluated2($idself){

      try{

        $idevalu = DB::table('evaluated')->where('idEvaluated', $idself)->value('category_id');
        //dd($idevalu);

        $array = [];

        switch($idevalu){
          case 16:
          $array = [16,15,14,13,12];
          break;

          case 15:
          $array = [12,13,14,15,16];
          break;

          case 14:
          $array = [11,12,13,14,15,16];
          break;

          case 13:
          $array = [9,10,12,13,14,15,16];
          break;

          case 12:
          $array = [8,12,13,14,15,16];
          break;

          case 11:
          $array = [14];
          break;

          case 10:
          $array = [10,13,7,14];
          break;

          case 9:
          $array = [9,13,14,6];
          break;

          case 8:
          $array = [8,12,5];
          break;

          case 7:
          $array = [7,4,10,13];
          break;

          case 6:
          $array = [6,3,9,13];
          break;

          case 5:
          $array = [5,2,8,12];
          break;

          case 4:
          $array = [4,7,13];
          break;

          case 3:
          $array = [3,6,13];
          break;

          case 2:
          $array = [2,5,12];
          break;
        }

        $evalauteds = DB::table('evaluated')->where('idEvaluated', $idself)->get();
        return $evalauteds;
        return response()->json(['type' => 'success', 'message' => 'Lista obtenida'], 200);

      }catch(\Exception $e){

        return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);

      }

    }


    public function getEvaluatedDirectivo(){

      try{

        $evalauteds = Evaluated::All()->whereIn('category_id', [16,15,14,13,12]);
        return $evalauteds;
        return response()->json(['type' => 'success', 'message' => 'Lista obtenida'], 200);

      }catch(\Exception $e){

        return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);

      }

    }

    public function getEvaluatedSoportelima(){

      try{

        $evalauteds = Evaluated::All()->whereIn('category_id', [12,13,14,15,16]);
        return $evalauteds;
        return response()->json(['type' => 'success', 'message' => 'Lista obtenida'], 200);

      }catch(\Exception $e){

        return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);

      }

    }


    public function getEvaluatedSoportepisco(){

      try{

        $evalauteds = Evaluated::All()->whereIn('category_id', [11,12,13,14,15,16]);
        return $evalauteds;
        return response()->json(['type' => 'success', 'message' => 'Lista obtenida'], 200);

      }catch(\Exception $e){

        return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);

      }

    }


    public function getEvaluatedJefeaprendizaje(){

      try{

        $evalauteds = Evaluated::All()->whereIn('category_id', [8,12,13,14,15,16]);
        return $evalauteds;
        return response()->json(['type' => 'success', 'message' => 'Lista obtenida'], 200);

      }catch(\Exception $e){

        return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);

      }

    }

    public function getEvaluatedJededigitaltecnologia(){

      try{

        $evalauteds = Evaluated::All()->whereIn('category_id', [9,10,12,13,14,15,16]);
        return $evalauteds;
        return response()->json(['type' => 'success', 'message' => 'Lista obtenida'], 200);

      }catch(\Exception $e){

        return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);

      }

    }


    public function getEvaluatedEspecialistaaprendizaje(){

      try{

        $evalauteds = Evaluated::All()->whereIn('category_id', [8,12,5]);
        return $evalauteds;
        return response()->json(['type' => 'success', 'message' => 'Lista obtenida'], 200);

      }catch(\Exception $e){

        return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);

      }

    }

    public function getEvaluatedEspecialistadigital(){

      try{

        $evalauteds = Evaluated::All()->whereIn('category_id', [9,13,14,6]);
        return $evalauteds;
        return response()->json(['type' => 'success', 'message' => 'Lista obtenida'], 200);

      }catch(\Exception $e){

        return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);

      }

    }

    public function getEvaluatedEspecialistatecnologia(){

      try{

        $evalauteds = Evaluated::All()->whereIn('category_id', [10,13,7,14]);
        return $evalauteds;
        return response()->json(['type' => 'success', 'message' => 'Lista obtenida'], 200);

      }catch(\Exception $e){

        return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);

      }

    }

    public function getEvaluatedCoordinadoraprendizaje(){

      try{

        $evalauteds = Evaluated::All()->whereIn('category_id', [5,2,8,12]);
        return $evalauteds;
        return response()->json(['type' => 'success', 'message' => 'Lista obtenida'], 200);

      }catch(\Exception $e){

        return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);

      }

    }

    public function getEvaluatedCoordinadordigital(){

      try{

        $evalauteds = Evaluated::All()->whereIn('category_id', [6,3,9,13]);
        return $evalauteds;
        return response()->json(['type' => 'success', 'message' => 'Lista obtenida'], 200);

      }catch(\Exception $e){

        return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);

      }

    }

    public function getEvaluatedCoordinadortecnologia(){

      try{

        $evalauteds = Evaluated::All()->whereIn('category_id', [7,4,10,13]);
        return $evalauteds;
        return response()->json(['type' => 'success', 'message' => 'Lista obtenida'], 200);

      }catch(\Exception $e){

        return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);

      }

    }


    public function getEvaluatedAcompañanteaprendizaje(){

      try{

        $evalauteds = Evaluated::All()->whereIn('category_id', [2,5,12]);
        return $evalauteds;
        return response()->json(['type' => 'success', 'message' => 'Lista obtenida'], 200);

      }catch(\Exception $e){

        return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);

      }

    }

    public function getEvaluatedAcompañantedigital(){

      try{

        $evalauteds = Evaluated::All()->whereIn('category_id', [3,6,13]);
        return $evalauteds;
        return response()->json(['type' => 'success', 'message' => 'Lista obtenida'], 200);

      }catch(\Exception $e){

        return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);

      }

    }

    public function getEvaluatedAcompañantetecnologia(){

      try{

        $evalauteds = Evaluated::All()->whereIn('category_id', [4,7,13]);
        return $evalauteds;
        return response()->json(['type' => 'success', 'message' => 'Lista obtenida'], 200);

      }catch(\Exception $e){

        return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);

      }

    }




    public function storeEvaluated(Request $request){

      try{

        $evaluated = new Evaluated;
        $evaluated->name = $request->name;
        $evaluated->image =  $request->image;
        $evaluated->category_id = $request->category_id;
        $evaluated->save();

      return response()->json(['type' => 'success', 'message' => 'Registro completo'], 200);

      }catch(\Exception $e){
          return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);
      }

    }

    public function indexEvaluated(){

      $evalauteds = DB::table('evaluated')->orderBy('name')->get();
      return view('listaevaluados')->with('evaluateds',$evalauteds);

    }

    public function getResults($idevaluated){
      //$numsiempre = DB::table()

      $person = DB::table('evaluated')->where('idEvaluated', $idevaluated)->get();

      //Obteniendo valores de siempre por cada pregunta, en total sería 4 (cantidad de alternativas) x cantidad de preguntas
      //$result = DB::table('evaluator_evaluated')->where('evaluated_id',$idevaluated)->where('answer1','Siempre')->where('answer4','Siempre')->select('answer1','answer4')->get()->sum();

      //Obteniendo el total de siempre por cada grupo de preguntas, en total sería 4 (ya que se obtiene por todas la preguntas que se quiere)
      $res = DB::table('evaluator_evaluated')->get();
      $res2 = DB::table('evaluator_evaluated')->where('evaluated_id',$idevaluated);

      $columns = ['answer1','answer2','answer3','answer4','answer5','answer6','answer7','answer8','answer9','answer10',
                  'answer11','answer12','answer13','answer14','answer15','answer16','answer17','answer18','answer19','answer20',
                  'answer21','answer22','answer23','answer24','answer25','answer26','answer27','answer28','answer29','answer30',
                  'answer31','answer32','answer33','answer34','answer35','answer36','answer37','answer38','answer39','answer40',
                  'answer41'];

      $columns2 = ['answer42'];
      $columns3 = ['answer43','answer44'];

     $resultcolums = ['answer1','answer2','answer3'];
     $workteamcolums = ['answer4','answer5','answer6'];
     $flexicolums = ['answer7','answer8','answer9'];
     $responcolums = ['answer10','answer11'];
     $visioncolums = ['answer12','answer13'];
     $planificolums = ['answer14','answer15','answer16','answer17','answer18','answer19'];
     $managementcolums = ['answer20','answer21','answer22','answer23','answer24','answer25','answer26','answer27','answer28'];
     $comunicacolums = ['answer29','answer30','answer31','answer32','answer33','answer34'];
     $peoplecolums = ['answer35','answer36'];
     $presioncolums = ['answer37','answer38','answer39','answer40','answer41'];



      //Obteniendo valores hb
      $data = [];
      $datas["all"]=0;

      $data2 = [];
      $datas2["all"]=0;

      $data3 = [];
      $datas3["all"]=0;

      $data4 = [];
      $datas4["all"]=0;

      //Valores de Experiencia
      $dataexp = []; $dataexp2 = []; $dataexp3 = []; $dataexp4 = [];
      $datasexp["all"] = 0; $datasexp2["all"] = 0; $datasexp3["all"] = 0; $datasexp4["all"] = 0;

      //Valores de Potencial
      $datapot = []; $datapot2 = []; $datapot3 = []; $datapot4 = [];
      $dataspot["all"] = 0; $dataspot2["all"] = 0; $dataspot3["all"] = 0; $dataspot4["all"] = 0;

      //Valores Resultados
      $dataresultados = []; $dataresultados2 = []; $dataresultados3 = []; $dataresultados4 = [];
      $datasresultados["all"] = 0; $datasresultados2["all"] = 0; $datasresultados3["all"] = 0; $datasresultados4["all"] = 0;

      //Valores Trabajo en equipo
      $dataworkteam = []; $dataworkteam2 = []; $dataworkteam3 = []; $dataworkteam4 = [];
      $datasworkteam["all"] = 0; $datasworkteam2["all"] = 0; $datasworkteam3["all"] = 0; $datasworkteam4["all"] = 0;

      //Valores flexibilidad
      $dataflexibilidad = []; $dataflexibilidad2 = []; $dataflexibilidad3 = []; $dataflexibilidad4 = [];
      $datasflexibilidad["all"] = 0; $datasflexibilidad2["all"] = 0; $datasflexibilidad3["all"] = 0; $datasflexibilidad4["all"] = 0;

      //Valores responsabilidad
      $dataresponsabilidad = []; $dataresponsabilidad2 = []; $dataresponsabilidad3 = []; $dataresponsabilidad4 = [];
      $datasresponsabilidad["all"] = 0; $datasresponsabilidad2["all"] = 0; $datasresponsabilidad3["all"] = 0; $datasresponsabilidad4["all"] = 0;

      //Valores vision
      $datavision = []; $datavision2 = []; $datavision3 = []; $datavision4 = [];
      $datasvision["all"] = 0; $datasvision2["all"] = 0; $datasvision3["all"] = 0; $datasvision4["all"] = 0;

      //Valores de planificacion
      $dataplani = []; $dataplani2 = []; $dataplani3 = []; $dataplani4 = [];
      $datasplani["all"] = 0; $datasplani2["all"] = 0; $datasplani3["all"] = 0; $datasplani4["all"] = 0;

      //Valores de gestion de uno mismo
      $datamanag = []; $datamanag2 = []; $datamanag3 = []; $datamanag4 = [];
      $datasmanag["all"] = 0; $datasmanag2["all"] = 0; $datasmanag3["all"] = 0; $datasmanag4["all"] = 0;

      //Valores de comunicación
      $datacomun = []; $datacomun2 = []; $datacomun3 = []; $datacomun4 = [];
      $datascomun["all"] = 0; $datascomun2["all"] = 0; $datascomun3["all"] = 0; $datascomun4["all"] = 0;

      //Valores de personas
      $datapeople = []; $datapeople2 = []; $datapeople3 = []; $datapeople4 = [];
      $dataspeople["all"] = 0; $dataspeople2["all"] = 0; $dataspeople3["all"] = 0; $dataspeople4["all"] = 0;

      //Valores de presion
      $datapresion = []; $datapresion2 = []; $datapresion3 = []; $datapresion4 = [];
      $dataspresion["all"] = 0; $dataspresion2["all"] = 0; $dataspresion3["all"] = 0; $dataspresion4["all"] = 0;



      //Habilidades blandas

      foreach ($columns as $column) {
        $data = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['Sí, siempre','Siempre','Trabaja con normalidad y respeto','Excelente'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datas["all"] += $data["count_true"];
        //dd($datas["all"]);
      }

      foreach ($columns as $column) {
        $data2 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['Frecuentemente','Trabaja con normalidad','Bien'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datas2["all"] += $data2["count_true"];
        //dd($datas["all"]);
      }

      foreach ($columns as $column) {
        $data3 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['A veces','No trabaja con normalidad, se ofusca','Regular'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datas3["all"] += $data3["count_true"];
        //dd($datas["all"]);
      }

      foreach ($columns as $column) {
        $data4 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['No, nunca','Nunca','No trabaja con normalidad, falta el respeto','Mal'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datas4["all"] += $data4["count_true"];
        //dd($datas["all"]);
      }

      //Experiencia

      foreach ($columns2 as $column) {
        $dataexp = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['Sí, siempre','Siempre','Mucha'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasexp["all"] += $dataexp["count_true"];
      }

      foreach ($columns2 as $column) {
        $dataexp2 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['Frecuentemente','Regular'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasexp2["all"] += $dataexp2["count_true"];
      }

      foreach ($columns2 as $column) {
        $dataexp3 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['A veces','Poca'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasexp3["all"] += $dataexp3["count_true"];
      }

      foreach ($columns2 as $column) {
        $dataexp4 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['No, nunca','Nunca','Ninguna'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasexp4["all"] += $dataexp4["count_true"];
      }

      //Potencial


      foreach ($columns3 as $column) {
        $datapot = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['Sí, siempre','Siempre'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $dataspot["all"] += $datapot["count_true"];
      }

      foreach ($columns3 as $column) {
        $datapot2 = [
          "column_name" => $column,
          "count_true" => $res->where($column,'Frecuentemente')->where('evaluated_id',$idevaluated)->count(),
        ];
        $dataspot2["all"] += $datapot2["count_true"];
      }

      foreach ($columns3 as $column) {
        $datapot3 = [
          "column_name" => $column,
          "count_true" => $res->where($column,'A veces')->where('evaluated_id',$idevaluated)->count(),
        ];
        $dataspot3["all"] += $datapot3["count_true"];
      }

      foreach ($columns3 as $column) {
        $datapot4 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['No, nunca','Nunca'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $dataspot4["all"] += $datapot4["count_true"];
      }


      //HB1
      foreach ($resultcolums as $column) {
        $dataresultados = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['Sí, siempre','Siempre'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasresultados["all"] += $dataresultados["count_true"];
      }

      foreach ($resultcolums as $column) {
        $dataresultados2 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['Frecuentemente','Trabaja con normalidad','Bien'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasresultados2["all"] += $dataresultados2["count_true"];
      }

      foreach ($resultcolums as $column) {
        $dataresultados3 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['A veces','No trabaja con normalidad, se ofusca','Regular'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasresultados3["all"] += $dataresultados3["count_true"];
      }

      foreach ($resultcolums as $column) {
        $dataresultados4 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['No, nunca','Nunca','No trabaja con normalidad, falta el respeto','Mal'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasresultados4["all"] += $dataresultados4["count_true"];
      }


      //HB2
      foreach ($workteamcolums as $column) {
        $dataworkteam = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['Sí, siempre','Siempre'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasworkteam["all"] += $dataworkteam["count_true"];
      }

      foreach ($workteamcolums as $column) {
        $dataworkteam2 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['Frecuentemente','Trabaja con normalidad','Bien'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasworkteam2["all"] += $dataworkteam2["count_true"];
      }

      foreach ($workteamcolums as $column) {
        $dataworkteam3 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['A veces','No trabaja con normalidad, se ofusca','Regular'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasworkteam3["all"] += $dataworkteam3["count_true"];
      }

      foreach ($workteamcolums as $column) {
        $dataworkteam4 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['No, nunca','Nunca','No trabaja con normalidad, falta el respeto','Mal'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasworkteam4["all"] += $dataworkteam4["count_true"];
      }


      //HB3
      foreach ($flexicolums as $column) {
        $dataflexibilidad = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['Sí, siempre','Siempre'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasflexibilidad["all"] += $dataflexibilidad["count_true"];
      }

      foreach ($flexicolums as $column) {
        $dataflexibilidad2 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['Frecuentemente','Trabaja con normalidad','Bien'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasflexibilidad2["all"] += $dataflexibilidad2["count_true"];
      }

      foreach ($flexicolums as $column) {
        $dataflexibilidad3 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['A veces','No trabaja con normalidad, se ofusca','Regular'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasflexibilidad3["all"] += $dataflexibilidad3["count_true"];
      }

      foreach ($flexicolums as $column) {
        $dataflexibilidad4 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['No, nunca','Nunca','No trabaja con normalidad, falta el respeto','Mal'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasflexibilidad4["all"] += $dataflexibilidad4["count_true"];
      }

      //HB4

      foreach ($responcolums as $column) {
        $dataresponsabilidad = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['Sí, siempre','Siempre'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasresponsabilidad["all"] += $dataresponsabilidad["count_true"];
      }

      foreach ($responcolums as $column) {
        $dataresponsabilidad2 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['Frecuentemente','Trabaja con normalidad','Bien'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasresponsabilidad2["all"] += $dataresponsabilidad2["count_true"];
      }

      foreach ($responcolums as $column) {
        $dataresponsabilidad3 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['A veces','No trabaja con normalidad, se ofusca','Regular'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasresponsabilidad3["all"] += $dataresponsabilidad3["count_true"];
      }

      foreach ($responcolums as $column) {
        $dataresponsabilidad4 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['No, nunca','Nunca','No trabaja con normalidad, falta el respeto','Mal'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasresponsabilidad4["all"] += $dataresponsabilidad4["count_true"];
      }

      //HB5

      foreach ($visioncolums as $column) {
        $datavision = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['Sí, siempre','Siempre'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasvision["all"] += $datavision["count_true"];
      }

      foreach ($visioncolums as $column) {
        $datavision2 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['Frecuentemente','Trabaja con normalidad','Bien'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasvision2["all"] += $datavision2["count_true"];
      }

      foreach ($visioncolums as $column) {
        $datavision3 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['A veces','No trabaja con normalidad, se ofusca','Regular'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasvision3["all"] += $datavision3["count_true"];
      }

      foreach ($visioncolums as $column) {
        $datavision4 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['No, nunca','Nunca','No trabaja con normalidad, falta el respeto','Mal'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasvision4["all"] += $datavision4["count_true"];
      }


      //HB6

      foreach ($planificolums as $column) {
        $dataplani = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['Sí, siempre','Siempre'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasplani["all"] += $dataplani["count_true"];
      }

      foreach ($planificolums as $column) {
        $dataplani2 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['Frecuentemente','Trabaja con normalidad','Bien'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasplani2["all"] += $dataplani2["count_true"];
      }

      foreach ($planificolums as $column) {
        $dataplani3 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['A veces','No trabaja con normalidad, se ofusca','Regular'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasplani3["all"] += $dataplani3["count_true"];
      }

      foreach ($planificolums as $column) {
        $dataplani4 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['No, nunca','Nunca','No trabaja con normalidad, falta el respeto','Mal'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasplani4["all"] += $dataplani4["count_true"];
      }

      //HB7

      foreach ($managementcolums as $column) {
        $datamanag = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['Sí, siempre','Siempre'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasmanag["all"] += $datamanag["count_true"];

      }

      foreach ($managementcolums as $column) {
        $datamanag2 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['Frecuentemente','Trabaja con normalidad','Bien'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasmanag2["all"] += $datamanag2["count_true"];

      }


      foreach ($managementcolums as $column) {
        $datamanag3 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['A veces','No trabaja con normalidad, se ofusca','Regular'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasmanag3["all"] += $datamanag3["count_true"];

      }

      foreach ($managementcolums as $column) {
        $datamanag4 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['No, nunca','Nunca','No trabaja con normalidad, falta el respeto','Mal'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datasmanag4["all"] += $datamanag4["count_true"];

      }

      //HB8

      foreach ($comunicacolums as $column) {
        $datacomun = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['Sí, siempre','Siempre'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datascomun["all"] += $datacomun["count_true"];
      }

      foreach ($comunicacolums as $column) {
        $datacomun2 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['Frecuentemente','Trabaja con normalidad','Bien'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datascomun2["all"] += $datacomun2["count_true"];
      }

      foreach ($comunicacolums as $column) {
        $datacomun3 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['A veces','No trabaja con normalidad, se ofusca','Regular'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datascomun3["all"] += $datacomun3["count_true"];
      }

      foreach ($comunicacolums as $column) {
        $datacomun4 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['No, nunca','Nunca','No trabaja con normalidad, falta el respeto','Mal'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datascomun4["all"] += $datacomun4["count_true"];
      }

      //HB9

      foreach ($peoplecolums as $column) {
        $datapeople = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['Sí, siempre','Siempre'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $dataspeople["all"] += $datapeople["count_true"];
      }

      foreach ($peoplecolums as $column) {
        $datapeople2 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['Frecuentemente','Trabaja con normalidad','Bien'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $dataspeople2["all"] += $datapeople2["count_true"];
      }

      foreach ($peoplecolums as $column) {
        $datapeople3 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['A veces','No trabaja con normalidad, se ofusca','Regular'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $dataspeople3["all"] += $datapeople3["count_true"];
      }

      foreach ($peoplecolums as $column) {
        $datapeople4 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['No, nunca','Nunca','No trabaja con normalidad, falta el respeto','Mal'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $dataspeople4["all"] += $datapeople4["count_true"];
      }

      //HB10

      foreach ($presioncolums as $column) {
        $datapresion = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['Sí, siempre','Siempre','Trabaja con normalidad y respeto','Excelente'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $dataspresion["all"] += $datapresion["count_true"];
      }

      foreach ($presioncolums as $column) {
        $datapresion2 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['Frecuentemente','Trabaja con normalidad','Bien'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $dataspresion2["all"] += $datapresion2["count_true"];
      }

      foreach ($presioncolums as $column) {
        $datapresion3 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['A veces','No trabaja con normalidad, se ofusca','Regular'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $dataspresion3["all"] += $datapresion3["count_true"];
      }

      foreach ($presioncolums as $column) {
        $datapresion4 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['No, nunca','Nunca','No trabaja con normalidad, falta el respeto','Mal'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $dataspresion4["all"] += $datapresion4["count_true"];
      }


      //Obteniendo la cantidad de respuestas que obtuvo el usuario en habilidades blandas, segmentado por siempre, aveces, frecue.., nunca.
      $siemprehb = $datas["all"];
      $frecuentementehb = $datas2["all"];
      $aveceshb = $datas3["all"];
      $nuncahb = $datas4["all"];

      $siempreexp = $datasexp["all"];
      $frecuentementeexp = $datasexp2["all"];
      $avecesexp = $datasexp3["all"];
      $nuncaexp = $datasexp4["all"];

      $siemprepot = $dataspot["all"];
      $frecuentementepot = $dataspot2["all"];
      $avecespot = $dataspot3["all"];
      $nuncapot = $dataspot4["all"];

      $siemprehb1 = $datasresultados["all"];
      $frecuentementehb1 = $datasresultados2["all"];
      $aveceshb1 = $datasresultados3["all"];
      $nuncahb1 = $datasresultados4["all"];

      $siemprehb2 = $datasworkteam["all"];
      $frecuentementehb2 = $datasworkteam2["all"];
      $aveceshb2 = $datasworkteam3["all"];
      $nuncahb2 = $datasworkteam4["all"];

      $siemprehb3 = $datasflexibilidad["all"];
      $frecuentementehb3 = $datasflexibilidad2["all"];
      $aveceshb3 = $datasflexibilidad3["all"];
      $nuncahb3 = $datasflexibilidad4["all"];

      $siemprehb4 = $datasresponsabilidad["all"];
      $frecuentementehb4 = $datasresponsabilidad2["all"];
      $aveceshb4 = $datasresponsabilidad3["all"];
      $nuncahb4 = $datasresponsabilidad4["all"];

      $siemprehb5 = $datasvision["all"];
      $frecuentementehb5 = $datasvision2["all"];
      $aveceshb5 = $datasvision3["all"];
      $nuncahb5 = $datasvision4["all"];

      $siemprehb6 = $datasplani["all"];
      $frecuentementehb6 = $datasplani2["all"];
      $aveceshb6 = $datasplani3["all"];
      $nuncahb6 = $datasplani4["all"];

      $siemprehb7 = $datasmanag["all"];
      $frecuentementehb7 = $datasmanag2["all"];
      $aveceshb7 = $datasmanag3["all"];
      $nuncahb7 = $datasmanag4["all"];

      $siemprehb8 = $datascomun["all"];
      $frecuentementehb8 = $datascomun2["all"];
      $aveceshb8 = $datascomun3["all"];
      $nuncahb8 = $datascomun4["all"];

      $siemprehb9 = $dataspeople["all"];
      $frecuentementehb9 = $dataspeople2["all"];
      $aveceshb9 = $dataspeople3["all"];
      $nuncahb9 = $dataspeople4["all"];

      $siemprehb10 = $dataspresion["all"];
      $frecuentementehb10 = $dataspresion2["all"];
      $aveceshb10 = $dataspresion3["all"];
      $nuncahb10 = $dataspresion4["all"];

      $totalcolumnashb1 = count($resultcolums);
      $totalalternativashb1 = $res2->count()*$totalcolumnashb1;
      if($totalalternativashb1 > 0){
        $percentageresultados1 = round(($siemprehb1/$totalalternativashb1)*100,2);
        $percentageresultados2 = round(($frecuentementehb1/$totalalternativashb1)*100,2);
        $percentageresultados3 = round(($aveceshb1/$totalalternativashb1)*100,2);
        $percentageresultados4 = round(($nuncahb1/$totalalternativashb1)*100,2);
      }else {
        $percentageresultados1 = 0;
        $percentageresultados2 = 0;
        $percentageresultados3 = 0;
        $percentageresultados4 = 0;
      }

      $totalcolumnashb2 = count($workteamcolums);
      $totalalternativashb2 = $res2->count()*$totalcolumnashb2;
      if($totalalternativashb2 > 0){
        $percentagework1 = round(($siemprehb2/$totalalternativashb2)*100,2);
        $percentagework2 = round(($frecuentementehb2/$totalalternativashb2)*100,2);
        $percentagework3 = round(($aveceshb2/$totalalternativashb2)*100,2);
        $percentagework4 = round(($nuncahb2/$totalalternativashb2)*100,2);
      }else {
        $percentagework1 = 0;
        $percentagework2 = 0;
        $percentagework3 = 0;
        $percentagework4 = 0;
      }

      $totalcolumnashb3 = count($flexicolums);
      $totalalternativashb3 = $res2->count()*$totalcolumnashb3;
      if($totalalternativashb3 > 0){
        $percentageflex1 = round(($siemprehb3/$totalalternativashb3)*100,2);
        $percentageflex2 = round(($frecuentementehb3/$totalalternativashb3)*100,2);
        $percentageflex3 = round(($aveceshb3/$totalalternativashb3)*100,2);
        $percentageflex4 = round(($nuncahb3/$totalalternativashb3)*100,2);
      }else {
        $percentageflex1 = 0;
        $percentageflex2 = 0;
        $percentageflex3 = 0;
        $percentageflex4 = 0;
      }


      $totalcolumnashb4 = count($responcolums);
      $totalalternativashb4 = $res2->count()*$totalcolumnashb4;
      if($totalalternativashb4 > 0){
        $percentagerespon1 = round(($siemprehb4/$totalalternativashb4)*100,2);
        $percentagerespon2 = round(($frecuentementehb4/$totalalternativashb4)*100,2);
        $percentagerespon3 = round(($aveceshb4/$totalalternativashb4)*100,2);
        $percentagerespon4 = round(($nuncahb4/$totalalternativashb4)*100,2);
      }else {
        $percentagerespon1 = 0;
        $percentagerespon2 = 0;
        $percentagerespon3 = 0;
        $percentagerespon4 = 0;
      }


      $totalcolumnashb5 = count($visioncolums);
      $totalalternativashb5 = $res2->count()*$totalcolumnashb5;
      if($totalalternativashb5 > 0){
        $percentagevis1 = round(($siemprehb5/$totalalternativashb5)*100,2);
        $percentagevis2 = round(($frecuentementehb5/$totalalternativashb5)*100,2);
        $percentagevis3 = round(($aveceshb5/$totalalternativashb5)*100,2);
        $percentagevis4 = round(($nuncahb5/$totalalternativashb5)*100,2);
      }else {
        $percentagevis1 = 0;
        $percentagevis2 = 0;
        $percentagevis3 = 0;
        $percentagevis4 = 0;
      }


      $totalcolumnashb6 = count($planificolums);
      $totalalternativashb6 = $res2->count()*$totalcolumnashb6;
      if($totalalternativashb6 > 0){
        $percentageplani1 = round(($siemprehb6/$totalalternativashb6)*100,2);
        $percentageplani2 = round(($frecuentementehb6/$totalalternativashb6)*100,2);
        $percentageplani3 = round(($aveceshb6/$totalalternativashb6)*100,2);
        $percentageplani4 = round(($nuncahb6/$totalalternativashb6)*100,2);
      }else {
        $percentageplani1 = 0;
        $percentageplani2 = 0;
        $percentageplani3 = 0;
        $percentageplani4 = 0;
      }

      $totalcolumnashb7 = count($managementcolums);
      $totalalternativashb7 = $res2->count()*$totalcolumnashb7;
      if($totalalternativashb7 > 0){
        $percentagemana1 = round(($siemprehb7/$totalalternativashb7)*100,2);
        $percentagemana2 = round(($frecuentementehb7/$totalalternativashb7)*100,2);
        $percentagemana3 = round(($aveceshb7/$totalalternativashb7)*100,2);
        $percentagemana4 = round(($nuncahb7/$totalalternativashb7)*100,2);
      }else {
        $percentagemana1 = 0;
        $percentagemana2 = 0;
        $percentagemana3 = 0;
        $percentagemana4 = 0;
      }


      $totalcolumnashb8 = count($comunicacolums);
      $totalalternativashb8 = $res2->count()*$totalcolumnashb8;
      if($totalalternativashb8 > 0){
        $percentagecomu1 = round(($siemprehb8/$totalalternativashb8)*100,2);
        $percentagecomu2 = round(($frecuentementehb8/$totalalternativashb8)*100,2);
        $percentagecomu3 = round(($aveceshb8/$totalalternativashb8)*100,2);
        $percentagecomu4 = round(($nuncahb8/$totalalternativashb8)*100,2);
      }else {
        $percentagecomu1 = 0;
        $percentagecomu2 = 0;
        $percentagecomu3 = 0;
        $percentagecomu4 = 0;
      }

      $totalcolumnashb9 = count($peoplecolums);
      $totalalternativashb9 = $res2->count()*$totalcolumnashb9;
      if($totalalternativashb9 > 0){
        $percentagepeople1 = round(($siemprehb9/$totalalternativashb9)*100,2);
        $percentagepeople2 = round(($frecuentementehb9/$totalalternativashb9)*100,2);
        $percentagepeople3 = round(($aveceshb9/$totalalternativashb9)*100,2);
        $percentagepeople4 = round(($nuncahb9/$totalalternativashb9)*100,2);
      }else {
        $percentagepeople1 = 0;
        $percentagepeople2 = 0;
        $percentagepeople3 = 0;
        $percentagepeople4 = 0;
      }

      $totalcolumnashb10 = count($presioncolums);
      $totalalternativashb10 = $res2->count()*$totalcolumnashb10;
      if($totalalternativashb10 > 0){
        $percentagepresion1 = round(($siemprehb10/$totalalternativashb10)*100,2);
        $percentagepresion2 = round(($frecuentementehb10/$totalalternativashb10)*100,2);
        $percentagepresion3 = round(($aveceshb10/$totalalternativashb10)*100,2);
        $percentagepresion4 = round(($nuncahb10/$totalalternativashb10)*100,2);
      }else {
        $percentagepresion1 = 0;
        $percentagepresion2 = 0;
        $percentagepresion3 = 0;
        $percentagepresion4 = 0;
      }





      //dd(((9/25)*100).'%');
      //Obtener número de filas de la tabla intermedia, servirá para multiplicarlo con el total de preguntas
      //y obtener el total de respuestas posibles para el usuario
      //dd($res->count());
      //dd($siemprehb);
      $totalcolumnashb = count($columns);
      $totalalternativashb = $res2->count()*$totalcolumnashb;
      //dd($totalalternativashb);
      if($totalalternativashb > 0){
        $percentagehb1 = round(($siemprehb/$totalalternativashb)*100,2);
        $percentagehb2 = round(($frecuentementehb/$totalalternativashb)*100,2);
        $percentagehb3 = round(($aveceshb/$totalalternativashb)*100,2);
        $percentagehb4 = round(($nuncahb/$totalalternativashb)*100,2);
      }else {
        $percentagehb1 = 0;
        $percentagehb2 = 0;
        $percentagehb3 = 0;
        $percentagehb4 = 0;
      }




      $totalcolumnasexp = count($columns2);
      $totalalternativasexp = $res2->count()*$totalcolumnasexp;
      if($totalalternativasexp > 0){
        $percentageexp1 = round(($siempreexp/$totalalternativasexp)*100,2);
        $percentageexp2 = round(($frecuentementeexp/$totalalternativasexp)*100,2);
        $percentageexp3 = round(($avecesexp/$totalalternativasexp)*100,2);
        $percentageexp4 = round(($nuncaexp/$totalalternativasexp)*100,2);
      }else{
        $percentageexp1 = 0;
        $percentageexp2 = 0;
        $percentageexp3 = 0;
        $percentageexp4 = 0;
      }

      //dd(round($percentagehb4,2));


      $col45s = DB::table('evaluator_evaluated')->where('answer45', 'Sí, siempre')->where('evaluated_id',$idevaluated)->count();
      $col45f = DB::table('evaluator_evaluated')->where('answer45', 'Frecuentemente')->where('evaluated_id',$idevaluated)->count();
      $col45a = DB::table('evaluator_evaluated')->where('answer45', 'A veces')->where('evaluated_id',$idevaluated)->count();
      $col45n = DB::table('evaluator_evaluated')->where('answer45', 'No, nunca')->where('evaluated_id',$idevaluated)->count();

      //dd($col45a);


      $totalcolumnaspot = count($columns3)+1;
      $totalalternativaspot = $res2->count()*$totalcolumnaspot;
      if($totalalternativaspot > 0){
        $percentagepot1 = round((($siemprepot+$col45n)/$totalalternativaspot)*100,2);
        $percentagepot2 = round((($frecuentementepot+$col45a)/$totalalternativaspot)*100,2);
        $percentagepot3 = round((($avecespot+$col45f)/$totalalternativaspot)*100,2);
        $percentagepot4 = round((($nuncapot+$col45s)/$totalalternativaspot)*100,2);
      }else{
        $percentagepot1 = 0;
        $percentagepot2 = 0;
        $percentagepot3 = 0;
        $percentagepot4 = 0;
      }

      //dd($frecuentementepot);


      $finalgraph1 = ($percentagehb1*0.4)+($percentageexp1*0.2)+($percentagepot1*0.4);
      $finalgraph2 = ($percentagehb2*0.4)+($percentageexp2*0.2)+($percentagepot2*0.4);
      $finalgraph3 = ($percentagehb3*0.4)+($percentageexp3*0.2)+($percentagepot3*0.4);
      $finalgraph4 = ($percentagehb4*0.4)+($percentageexp4*0.2)+($percentagepot4*0.4);

      $finalscore = ($finalgraph1+$finalgraph2);




      return view('scoreevaluado')->with('person',$person)->with('percentagehb1', $percentagehb1)
                                  ->with('percentagehb2',$percentagehb2)->with('percentagehb3',$percentagehb3)
                                  ->with('percentagehb4',$percentagehb4)->with('percentageexp1',$percentageexp1)
                                  ->with('percentageexp2',$percentageexp2)->with('percentageexp3',$percentageexp3)
                                  ->with('percentageexp4',$percentageexp4)->with('percentagepot1',$percentagepot1)
                                  ->with('percentagepot2',$percentagepot2)->with('percentagepot3',$percentagepot3)
                                  ->with('percentagepot4',$percentagepot4)->with('finalgraph1',$finalgraph1)
                                  ->with('finalgraph2',$finalgraph2)->with('finalgraph3',$finalgraph3)
                                  ->with('finalgraph4',$finalgraph4)->with('finalscore',$finalscore)
                                  ->with('percentagerespon1',$percentagerespon1)->with('percentagerespon2',$percentagerespon2)
                                  ->with('percentagerespon3',$percentagerespon3)->with('percentagerespon4',$percentagerespon4)
                                  ->with('percentageresultados1',$percentageresultados1)->with('percentageresultados2',$percentageresultados2)
                                  ->with('percentageresultados3',$percentageresultados3)->with('percentageresultados4',$percentageresultados4)
                                  ->with('percentagework1',$percentagework1)->with('percentagework2',$percentagework2)
                                  ->with('percentagework3',$percentagework3)->with('percentagework4',$percentagework4)
                                  ->with('percentageflex1',$percentageflex1)->with('percentageflex2',$percentageflex2)
                                  ->with('percentageflex3',$percentageflex3)->with('percentageflex4',$percentageflex4)
                                  ->with('percentagevis1',$percentagevis1)->with('percentagevis2',$percentagevis2)
                                  ->with('percentagevis3',$percentagevis3)->with('percentagevis4',$percentagevis4)
                                  ->with('percentageplani1',$percentageplani1)->with('percentageplani2',$percentageplani2)
                                  ->with('percentageplani3',$percentageplani3)->with('percentageplani4',$percentageplani4)
                                  ->with('percentagemana1',$percentagemana1)->with('percentagemana2',$percentagemana2)
                                  ->with('percentagemana3',$percentagemana3)->with('percentagemana4',$percentagemana4)
                                  ->with('percentagecomu1',$percentagecomu1)->with('percentagecomu2',$percentagecomu2)
                                  ->with('percentagecomu3',$percentagecomu3)->with('percentagecomu4',$percentagecomu4)
                                  ->with('percentagepeople1',$percentagepeople1)->with('percentagepeople2',$percentagepeople2)
                                  ->with('percentagepeople3',$percentagepeople3)->with('percentagepeople4',$percentagepeople4)
                                  ->with('percentagepresion1',$percentagepresion1)->with('percentagepresion2',$percentagepresion2)
                                  ->with('percentagepresion3',$percentagepresion3)->with('percentagepresion4',$percentagepresion4);
    }
}
