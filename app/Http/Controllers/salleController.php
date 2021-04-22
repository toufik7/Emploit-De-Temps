<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\type_seance;
use App\salle;

class salleController extends Controller
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
        
        $salles = salle::with('type')->get();
        return view('emploit.salle',compact('salles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['type']=type_seance::pluck('type', 'id');

        return view('emploit.creer.salle',compact('data',$data));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //salle::create($request->all());
        $sl = new salle;
           $sl->nom = $request->nom;
           $sl->id_type_seance = $request->id_type_seance;
           $sl->token = $request->token;
           $sl->save();

        return redirect()->route('salle.index')->with('message','salle ajoutée avec succée');
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

         $data['sl']=salle::find($id);
         $data['types']=type_seance::pluck('type', 'id');

        return View('emploit.editer.salle',compact('data',$data));
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
        $sl = salle::find($id);
           $sl->nom = $request->nom;
           $sl->id_type_seance = $request->id_type_seance;
           $sl->token = $request->token;
           
        $sl->save();
        return redirect()->route('salle.index')->with('message','salle modifiée avec succée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sl = salle::find($id);

        $sl->delete();

        return redirect()->route('salle.index')->with('sup_message','salle supprimée avec succée');    
    }


    
}
