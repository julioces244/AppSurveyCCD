<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvaluatorEvaluatedController extends Controller
{
    //

    public function storeAnswer($idevaluator, $idevaluated){
      try
        {

          $modelo1 = Evaluator::create($request->all());
          $modelo2 = Evaluated::create($request->all());
          $modelo1->evaluators()->attach($modelo2->id);


          $producto = new Producto();
          $producto->nombre = $request->get('');
        	$producto->precio = $request->get('precio');
        	$producto->detalles = $request->get('detalles');
        	$producto->save();

    	    return response()->json(['type' => 'success', 'message' => 'Registro completo'], 200);
        }catch(\Exception $e)
        {
            return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);
        }

    }
}
