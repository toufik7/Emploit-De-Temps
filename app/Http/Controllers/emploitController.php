<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\emploit;
use App\seance;

class emploitController extends Controller
{
     public function __construct() {
    $this->middleware('auth');
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


   

    public function index()
    {
        $emploits = emploit::all();
        return view('emploit.emploit',compact('emploits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('emploit.creer.emploit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        emploit::create($request->all());
        return redirect()->route('emploit.index')->with('message','emploit de temps ajoutée avec succée');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get emp
       
        

         $data['emp']=emploit::find($id);

         $data['scs_dim']=seance::with('emploit','salle','module','ens','type')->where('id_emploit', '=', $id)->orderby('jour')->orderby('debut')->where('jour','=','Dimanche')->get();
         $data['scs_lun']=seance::with('emploit','salle','module','ens','type')->where('id_emploit', '=', $id)->orderby('jour')->orderby('debut')->where('jour','=','Lundi')->get();
         $data['scs_mar']=seance::with('emploit','salle','module','ens','type')->where('id_emploit', '=', $id)->orderby('jour')->orderby('debut')->where('jour','=','Mardi')->get();
         $data['scs_mer']=seance::with('emploit','salle','module','ens','type')->where('id_emploit', '=', $id)->orderby('jour')->orderby('debut')->where('jour','=','Mercredi')->get();
         $data['scs_jeu']=seance::with('emploit','salle','module','ens','type')->where('id_emploit', '=', $id)->orderby('jour')->orderby('debut')->where('jour','=','Jeudi')->get();
         $data['scs_vend']=seance::with('emploit','salle','module','ens','type')->where('id_emploit', '=', $id)->orderby('jour')->orderby('debut')->where('jour','=','Vendredi')->get();
         $data['scs_sam']=seance::with('emploit','salle','module','ens','type')->where('id_emploit', '=', $id)->orderby('jour')->orderby('debut')->where('jour','=','Samedi')->get();
         
         

        // show the view and pass  emp to it
        return View('emploit.showEmploit',compact('data', $data));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $emp = emploit::find($id);

        return View('emploit.editer.emploit',compact('emp', $emp));
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
        $emp = emploit::find($id);
    
        $emp->update($request->all());
        return redirect()->route('emploit.index')->with('message','emploit modifiée avec succée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emp = emploit::find($id);

        $emp->delete();

        return redirect()->route('emploit.index')->with('sup_message','emploit de temps supprimée avec succée');
    }

}
