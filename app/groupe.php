<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class groupe extends Model
{
    protected $fillable = ['nom','id_specialite','id_promotion','nb_etudiants'];

    public function seances()
    { 
      return $this->belongsToMany('App\seance','seance_grps','id_groupe','id_seance');
    }


    public function specialite()
  {
      return $this->belongsTo('App\specialite', 'id_specialite');
  }
   public function promotion()
  {
      return $this->belongsTo('App\promotion', 'id_promotion');
  }
 
}

