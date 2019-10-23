<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;
use Illuminate\Support\Facades\Hash;

use App\Evaluator;

class EvaluatorController extends Controller
{

    public function getEvaluator(){

      try{

        $evaluators = Evaluator::All();
        return $evaluators;

      return response()->json(['type' => 'success', 'message' => 'Registro completo'], 200);

      }catch(\Exception $e){
          return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);
      }

    }

    public function storeEvaluator(Request $request){

      try{

        $evaluator = new Evaluator;
        $evaluator->name = $request->name;
        $evaluator->username = $request->username;
        $evaluator->password = Hash::make($request->password);
        $evaluator->category_id = $request->category_id;
        $evaluator->save();

      return response()->json(['type' => 'success', 'message' => 'Registro completo'], 200);

      }catch(\Exception $e){
          return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);
      }

    }
}
