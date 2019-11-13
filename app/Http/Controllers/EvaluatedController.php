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

        $evalauteds = DB::table('evaluated')->whereIn('category_id', $array)->get();
        return $evalauteds;
        return response()->json(['type' => 'success', 'message' => 'Lista obtenida'], 200);

      }catch(\Exception $e){

        return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);

      }

    }


    //Obteniendo evaluateds sin el propio usuario

    public function getEvaluated2($idcategory){

      try{

        $idevalu = DB::table('evaluated')->where('idEvaluated', $idcategory)->value('category_id');
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

        $evalauteds = DB::table('evaluated')->whereIn('category_id', $array)->whereNotIn('idevaluated', [$idcategory])->get();
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

      //$arrat = ['asnwer1','answer4'];
      //Obteniendo valores de siempre por cada pregunta, en total sería 4 (cantidad de alternativas) x cantidad de preguntas
      $result = DB::table('evaluator_evaluated')->where('evaluated_id',$idevaluated)->where('answer1','Siempre')->where('answer4','Siempre')->select('answer1','answer4')->get()->sum();

      //Obteniendo el total de siempre por cada grupo de preguntas, en total sería 4 (ya que se obtiene por todas la preguntas que se quiere)
      $res = DB::table('evaluator_evaluated')->get();
      $columns = ['answer1','answer2','answer3','answer4','answer5','answer6','answer7','answer8','answer9','answer10'];

      $data = [];
      $datas["all"]=0;

      $data2 = [];
      $datas2["all"]=0;

      $data3 = [];
      $datas3["all"]=0;

      $data4 = [];
      $datas4["all"]=0;

      foreach ($columns as $column) {
        $data = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['Sí, siempre','Siempre'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datas["all"] += $data["count_true"];
        //dd($datas["all"]);
      }

      foreach ($columns as $column) {
        $data2 = [
          "column_name" => $column,
          "count_true" => $res->where($column,'Frecuentemente')->where('evaluated_id',$idevaluated)->count(),
        ];
        $datas2["all"] += $data2["count_true"];
        //dd($datas["all"]);
      }

      foreach ($columns as $column) {
        $data3 = [
          "column_name" => $column,
          "count_true" => $res->where($column,'A veces')->where('evaluated_id',$idevaluated)->count(),
        ];
        $datas3["all"] += $data3["count_true"];
        //dd($datas["all"]);
      }

      foreach ($columns as $column) {
        $data4 = [
          "column_name" => $column,
          "count_true" => $res->whereIn($column,['No, nunca','Nunca'])->where('evaluated_id',$idevaluated)->count(),
        ];
        $datas4["all"] += $data4["count_true"];
        //dd($datas["all"]);
      }

      $siemprehb = $datas["all"];
      $frecuentementehb = $datas2["all"];
      $aveceshb = $datas3["all"];
      $nuncahb = $datas4["all"];
      //dd(((9/25)*100).'%');
      //Obtener número de filas de la tabla intermedia, servirá para multiplicarlo con el total de preguntas
      //y obtener el total de respuestas posibles para el usuario
      //dd($res->count());

      //dd($siemprehb);

      return view('scoreevaluado')->with('person',$person)->with('siemprehb', $siemprehb)
                                  ->with('frecuentementehb',$frecuentementehb)->with('aveceshb',$aveceshb)
                                  ->with('nuncahb',$nuncahb);
    }
}
