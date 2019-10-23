<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluated extends Model
{
    protected $primaryKey = 'idEvaluated';
    protected $table = 'evaluated';
    protected $fillable = ['idEvaluated'];
}
