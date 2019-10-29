<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function getEvaluated(Request $idcategory){

      try{

        $array = [];

        switch($idcategory){
          case 16:
          $array = [16,15,14,13,12];

          case 15:
          $array = [12,13,14,15,16];

          case 14:
          $array = [11,12,13,14,15,16];

          case 13:
          $array = [9,10,12,13,14,15,16];

          case 12:
          $array = [8,12,13,14,15,16];

          case 10:
          $array = [10,13,7,14];

          case 9:
          $array = [9,13,14,6];

          case 8:
          $array = [8,12,5];

          case 7:
          $array = [7,4,10,13];

          case 6:
          $array = [6,3,9,13];

          case 5:
          $array = [5,2,8,12];

          case 4:
          $array = [4,7,13];

          case 3:
          $array = [3,6,13];

          case 2:
          $array = [2,5,12];
        }

        $evalauteds = Evaluated::All()->whereIn('category_id', $array);
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
}
