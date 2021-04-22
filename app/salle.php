<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salle extends Model
{
    protected $fillable = ['nom','id_type_seance,token']; 

    public function type()
  {
      return $this->belongsTo('App\type_seance', 'id_type_seance');
  }
}
