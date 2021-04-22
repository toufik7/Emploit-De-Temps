<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\specialite;

class specialiteController extends Controller
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
        $specialites = specialite::all();
        return view('emploit.specialite',compact('specialites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('emploit.creer.specialite');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        specialite::create($request->all());
        return redirect()->route('specialites.index')->with('message','specialite ajoutée avec succée');
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
        // get the specialite
        $spec = specialite::find($id);

        // show the edit form and pass the specialite
        return View('emploit.editer.specialite',compact('spec', $spec));
        
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
        // store
        $spec = specialite::find($id);
        $spec->update($request->all());
        return redirect()->route('specialites.index')->with('message','specialite modifiée avec succée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sp = specialite::find($id);

        $sp->delete();

        return redirect()->route('specialites.index')->with('sup_message','specialite supprimée avec succée');
    }
}
