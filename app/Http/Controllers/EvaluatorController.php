<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;
use Illuminate\Support\Facades\Hash;

use App\Evaluator;
use App\Evaluated;

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

    public function storeScore(Request $request, $idevaluador){

      try{

        $content = json_decode($request->getContent());

        $evaluador = Evaluator::find($idevaluador);

        foreach($content as $respuesta) {

          //echo $respuesta->evaluadoid . " - " . $respuesta->pregunta1 . " - " . $respuesta->pregunta2 . " - " . $respuesta->pregunta3 . " - " . $idevaluador . '<br/>';

          $evaluador->evaluated()->attach($respuesta->evaluadoid,
           ['answer1' => $respuesta->pregunta1,
            'answer2' => $respuesta->pregunta2,
            'answer3' => $respuesta->pregunta3,
            'answer4' => $respuesta->pregunta4,
            'answer5' => $respuesta->pregunta5,
            'answer6' => $respuesta->pregunta6,
            'answer7' => $respuesta->pregunta7,
            'answer8' => $respuesta->pregunta8,
            'answer9' => $respuesta->pregunta9,
            'answer10' => $respuesta->pregunta10,
            'answer11' => $respuesta->pregunta11,
            'answer12' => $respuesta->pregunta12,
            'answer13' => $respuesta->pregunta13,
            'answer14' => $respuesta->pregunta14,
            'answer15' => $respuesta->pregunta15,
            'answer16' => $respuesta->pregunta16,
            'answer17' => $respuesta->pregunta17,
            'answer18' => $respuesta->pregunta18,
            'answer19' => $respuesta->pregunta19,
            'answer20' => $respuesta->pregunta20,
            'answer21' => $respuesta->pregunta21,
            'answer22' => $respuesta->pregunta22,
            'answer23' => $respuesta->pregunta23,
            'answer24' => $respuesta->pregunta24,
            'answer25' => $respuesta->pregunta25,
            'answer26' => $respuesta->pregunta26,
            'answer27' => $respuesta->pregunta27,
            'answer28' => $respuesta->pregunta28,
            'answer29' => $respuesta->pregunta29,
            'answer30' => $respuesta->pregunta30,
            'answer31' => $respuesta->pregunta31,
            'answer32' => $respuesta->pregunta32,
            'answer33' => $respuesta->pregunta33,
            'answer34' => $respuesta->pregunta34,
            'answer35' => $respuesta->pregunta35,
            'answer36' => $respuesta->pregunta36,
            'answer37' => $respuesta->pregunta37,
            'answer38' => $respuesta->pregunta38,
            'answer39' => $respuesta->pregunta39,
            'answer40' => $respuesta->pregunta40,
            'answer41' => $respuesta->pregunta41,
            'answer42' => $respuesta->pregunta42,
            'answer43' => $respuesta->pregunta43,
            'answer44' => $respuesta->pregunta44,
            'answer45' => $respuesta->pregunta45,
            'answer46' => $respuesta->pregunta46,
            'answer47' => $respuesta->pregunta47,
            'answer48' => $respuesta->pregunta48,
            'answer49' => $respuesta->pregunta49,
            'answer50' => $respuesta->pregunta50,
            'answer51' => $respuesta->pregunta51,
            'answer52' => $respuesta->pregunta52,
            'answer53' => $respuesta->pregunta53,
            'answer54' => $respuesta->pregunta54,
            'answer55' => $respuesta->pregunta55,
            'answer56' => $respuesta->pregunta56,
            'answer57' => $respuesta->pregunta57,
            'answer58' => $respuesta->pregunta58]);

        }

        //$message = 'Cuestionario finalizado satisfactoriamente';

        //return response()->json(compact('message'));

        return response()->json(['type' => 'success', 'message' => 'Cuestionario finalizado satisfactoriamente'], 200);

      }catch(\Exception $e){
          return response()->json(['type' => 'error', 'message' => $e->getMessage()], 500);
      }







      /*

      $idevaluator = $request->idevaluator;

      $idevaluated = $request->idevaluated;

      $evaluator = Evaluator::find($idevaluator);

      $answer1 = $request->answer1;
      $answer2 = $request->answer2;
      $answer3 = $request->answer3;
      $answer4 = $request->answer4;
      $answer5 = $request->answer5;
      $answer6 = $request->answer6;
      $answer7 = $request->answer7;
      $answer8 = $request->answer8;
      $answer9 = $request->answer9;
      $answer10 = $request->answer10;
      $answer11 = $request->answer11;
      $answer12 = $request->answer12;
      $answer13 = $request->answer13;
      $answer14 = $request->answer14;
      $answer15 = $request->answer15;
      $answer16 = $request->answer16;
      $answer17 = $request->answer17;
      $answer18 = $request->answer18;
      $answer19 = $request->answer19;
      $answer20 = $request->answer20;
      $answer21 = $request->answer21;
      $answer22 = $request->answer22;
      $answer23 = $request->answer23;
      $answer24 = $request->answer24;

      $evaluator->evaluated()->attach($idevaluated,
      ['answer1' => $answer1, 'answer2' => $answer2, 'answer3' => $answer3, 'answer4' => $answer4, 'answer5' => $answer5]);
*/

    }


    public function getScore($id){

      $evaluator = Evaluator::find($id);
      return view ('listscore')->with('evaluator', $evaluator);

    }
}
