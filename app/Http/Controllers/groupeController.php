<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\groupe;
use App\specialite;
use App\promotion;

class groupeController extends Controller
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
        $groupes = groupe::with('specialite','promotion')->get();;
        return view('emploit.groupe',compact('groupes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data['sp']=specialite::pluck('titre', 'id');
        $data['pm']=promotion::pluck('promo', 'id');

        return view('emploit.creer.groupe',compact('data',$data));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        groupe::create($request->all());
        return redirect()->route('groupe.index')->with('message','groupe ajoutée avec succée');
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

        $data['grp']=groupe::with('specialite','promotion')->find($id);
        $data['sp']=specialite::pluck('titre', 'id');
        $data['pm']=promotion::pluck('promo', 'id');

        
        return View('emploit.editer.groupe',compact('data', $data));
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
        $grp = groupe::find($id);
        

        $grp->update($request->all());
        return redirect()->route('groupe.index')->with('message','groupe modifiée avec succée');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grp = groupe::find($id);

        $grp->delete();

        return redirect()->route('groupe.index')->with('sup_message','groupe supprimée avec succée');  
    }
}
