<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\module;
use App\mod_ens;
use App\enseignent;

class moduleController extends Controller
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
        $modules = module::get();
        return view('emploit.module',compact('modules'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['ens']=enseignent::pluck('nom', 'id');
        return view('emploit.creer.module',compact('data',$data));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //module::create($request->all());

        //mod_ens::create($request->all());
        $mod = new module;
           $mod->titre = $request->titre;
           $mod->nb_heurs = $request->nb_heurs;
           $mod->save();

       $ens = enseignent::find($request->id_enseignent);
       $mod->enseignents()->attach($ens);

        return redirect()->route('module.index')->with('message','module ajoutée avec succée');
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
        $data['mod'] = module::find($id);
        $data['ens']=enseignent::pluck('nom', 'id');
        


        return View('emploit.editer.module',compact('data', $data));
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
        $mod = module::find($id);
           $mod->titre = $request->titre;
           $mod->nb_heurs = $request->nb_heurs;
           $mod->save();

       $ens = enseignent::find($request->id_enseignent);
       $mod->enseignents()->sync($ens);

        return redirect()->route('module.index')->with('message','module modifiée avec succée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mod = module::find($id);
        
        $mod->delete();
      
        
        return redirect()->route('module.index')->with('sup_message','module supprimé avec succée');
    }
}
