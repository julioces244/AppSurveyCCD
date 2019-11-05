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

        return $this->belongsToMany('App\Evaluated', 'evaluator_evaluated','evaluator_id', 'evaluated_id');

    }
}
