<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Evaluated;

class EvaluatedController extends Controller
{

    public function getEvaluated(){

      try{

        $evalauteds = Evaluated::All();
        return $evalauteds;
        return response()->json(['type' => 'success', 'message' => 'Registro completo'], 200);

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
        $evaluator->save();

      return response()->json(['type' => 'success', 'message' => 'Registro completo'], 200);

      }catch(\Exception $e){
          return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);
      }

    }
}
