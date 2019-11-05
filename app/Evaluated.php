<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluated extends Model
{
    protected $primaryKey = 'idEvaluated';
    protected $table = 'evaluated';
    protected $fillable = ['idEvaluated'];

    public function evaluators()
    {

        return $this->belongsToMany('App\Evaluator', 'evaluator_evaluated','evaluated_id', 'evaluator_id')
        ->withPivot('answer1','answer2','answer3','answer4','answer5');

    }
}
