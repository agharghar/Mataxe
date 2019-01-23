<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nonaderant extends Model
{
    protected $fillable = ['identifiant_fiscal','code_dacces' ,'nom' ,'prenom' ,'tele','cin','email','fonciers','salariaux','autre_sources','path'] ; 
    protected $table = 'nonaderants' ; 
}
