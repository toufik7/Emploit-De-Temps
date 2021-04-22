<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\emploit;

class seance extends Model
{
    protected $fillable = ['id_emploit','id_type_seance','id_module','id_enseignent','id_salle','jour','debut','fin']; 

   public function groupes()
    { 
      return $this->belongsToMany('App\groupe','seance_grps','id_seance','id_groupe');
    }


    public function emploit()
  {
      return $this->belongsTo('App\emploit', 'id_emploit');
  }
   public function salle()
  {
      return $this->belongsTo('App\salle', 'id_salle');
  }
  public function module()
  {
      return $this->belongsTo('App\module', 'id_module');
  }
   public function type()
  {
      return $this->belongsTo('App\type_seance', 'id_type_seance');
  }
  public function ens()
  {
      return $this->belongsTo('App\enseignent', 'id_enseignent');
  }


  protected $jours = [
        'Dimanche' => 'Dimanche',
        'Lundi' => 'Lundi',
        'Mardi' => 'Mardi',
        'Mercredi' => 'Mercredi',
        'Jeudi' => 'Jeudi',
        'Vendredi' => 'Vendredi',
        'Samedi' => 'Samedi'
    ];

    public function getJour()
    {
        return $this->jours;
    }
}
