<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class enseignent extends Model
{
	protected $fillable = ['nom','prenom','id_emploit']; 
	
	public function modules()
	{ 
	    return $this->belongsToMany('App\module','mod_ens','id_enseignent','id_module');
    }
    public function emploit()
  {
      return $this->belongsTo('App\emploit', 'id_emploit');
  }
    
}
