<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aderant extends Model
{
    protected $fillable = ['login','password','nom' ,'prenom' ,'tele','cin','email','fonciers','salariaux','autre_sources','path'] ; 
    protected $table = 'aderants' ; 
}
