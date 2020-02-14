<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Evaluator extends Authenticatable
{
    //

    protected $primaryKey = 'idEvaluator';
    protected $table = 'evaluators';


    protected $fillable = [
        'idEvaluator', 'name', 'username', 'password',
    ];


    public function evaluated()
    {

        return $this->belongsToMany('App\Evaluated', 'evaluator_evaluated','evaluator_id', 'evaluated_id')
        ->withPivot('id','answer1','answer2','answer3','answer4','answer5','answer6','answer7','answer8','answer9',
                    'answer10','answer11','answer12','answer13','answer14','answer15','answer16','answer17','answer18',
                    'answer19','answer20','answer21','answer22','answer23','answer24','answer25','answer26','answer27',
                    'answer28','answer29','answer30','answer31','answer32','answer33','answer34');

    }
}
