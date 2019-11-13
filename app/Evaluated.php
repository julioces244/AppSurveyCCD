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
        ->withPivot('answer1','answer2','answer3','answer4','answer5','answer6','answer7','answer8','answer9',
                    'answer10','answer11','answer12','answer13','answer14','answer15','answer16','answer17','answer18',
                    'answer19','answer20','answer21','answer22','answer23','answer24','answer25','answer26','answer27',
                    'answer28','answer29','answer30','answer31','answer32','answer33','answer34','answer35','answer36',
                    'answer37','answer38','answer39','answer40','answer41','answer42','answer43','answer44','answer45',
                    'answer46','answer47','answer48','answer49','answer50','answer51','answer52','answer53','answer54',
                    'answer55','answer56','answer57','answer58');

    }

    public function category(){
      return $this->belongsTo('App\Category','category_id');
    }
}
