<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\enseignent;
use App\emploit;

class enseignantController extends Controller
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
        $enseignents = enseignent::with('emploit')->get();
        return view('emploit.enseignant',compact('enseignents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['emp']=emploit::pluck('titre', 'id');

        return view('emploit.creer.enseignant',compact('data',$data)); 
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        enseignent::create($request->all());
        return redirect()->route('enseignent.index')->with('message','enseignent ajoutée avec succée');
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
        $data['ens'] = enseignent::find($id);
        $data['emp']= emploit::pluck('titre', 'id');

        return View('emploit.editer.enseignant',compact('data', $data));
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
        $ens = enseignent::find($id);
        $ens->update($request->all());
        return redirect()->route('enseignent.index')->with('message','enseignant modifiée avec succée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ens = enseignent::find($id);

        $ens->delete();

        return redirect()->route('enseignent.index')->with('sup_message','enseignent supprimée avec succée');
    }
}
