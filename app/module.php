<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class module extends Model
{

    protected $fillable = ['titre','nb_heurs']; 
	public function enseignents()
	{ 
	    return $this->belongsToMany('App\enseignent','mod_ens','id_module','id_enseignent');
    }
}
