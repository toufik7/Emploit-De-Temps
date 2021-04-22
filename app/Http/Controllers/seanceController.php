<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\seance;
use App\emploit;
use App\type_seance;
use App\enseignent;
use App\module;
use App\salle;
use App\groupe;
use App\seance_grp;


class seanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
    $this->middleware('auth');
}

    public function index()
    {
        //$seances = seance::all();
        $seances = seance::with('emploit','salle','module','ens','type')->get();
        return view('emploit.seance',compact('seances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data['emps']=emploit::pluck('titre', 'id');
        $data['type']=type_seance::pluck('type', 'id');
        $data['mod']=module::pluck('titre', 'id');
        $data['ens']=enseignent::pluck('nom', 'id');
        $data['sl']=salle::pluck('nom', 'id');
        $data['grp']=groupe::pluck('nom', 'id');

        

        // show the edit form and pass the type
        
        return view('emploit.creer.seance',compact('data', $data));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $sc = new seance();
        $sc->id_emploit = $request->id_emploit;
        $sc->id_type_seance = $request->id_type_seance;
        $sc->id_module = $request->id_module;
        $sc->id_enseignent = $request->id_enseignent;
        $sc->id_salle = $request->id_salle;
        $sc->jour = $request->jour;
        $sc->debut = $request->debut;
        $sc->fin = $request->fin;

        $sc->save();

       $grp = groupe::find($request->id_groupe);
       $sc->groupes()->attach($grp);
        
        return redirect()->route('seance.index')->with('message','seance ajoutée avec succée');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get the seance
        
         
        $data['sc']=seance::with('emploit')->find($id);
        $data['emps']=emploit::pluck('titre', 'id');
        $data['type']=type_seance::pluck('type', 'id');
        $data['mod']=module::pluck('titre', 'id');
        $data['ens']=enseignent::pluck('nom', 'id');
        $data['sl']=salle::pluck('nom', 'id');
        $data['grp']=groupe::pluck('nom', 'id');
       


        // show the edit form and pass the type
        return View('emploit.editer.seance',compact('data', $data));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

         $sc = seance::find($id);
            $sc->id_emploit = $request->id_emploit;
            $sc->id_type_seance = $request->id_type_seance;
            $sc->id_module = $request->id_module;
            $sc->id_enseignent = $request->id_enseignent;
            $sc->id_salle = $request->id_salle;
            $sc->jour = $request->jour;
            $sc->debut = $request->debut;
            $sc->fin = $request->fin;

        $sc->save();
        

        $grp = groupe::find($request->id_groupe);
        $sc->groupes()->sync($grp);

        return redirect()->route('seance.index')->with('message','seance modifiée avec succée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sc = seance::find($id);

        $sc->delete();

        return redirect()->route('seance.index')->with('sup_message','seance supprimée avec succée');    }
}
