<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\type_seance;

class typeController extends Controller
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
        // get all the sharks
        $types = type_seance::all();

        // load the view and pass the sharks
        return view('emploit.type_seance',compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('emploit.creer.type_seance');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        type_seance::create($request->all());
        return redirect()->route('types.index')->with('message','type de seance ajoutée avec succée');
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
        // get the type
        $type = type_seance::find($id);

        // show the edit form and pass the type
        return View('emploit.editer.type_seance',compact('type', $type));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $type = type_seance::find($id);
        

        $type->update($request->all());
        return redirect()->route('types.index')->with('message','type de seance modifiée avec succée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type = type_seance::find($id);

        $type->delete();

        return redirect()->route('types.index')->with('sup_message','type de seance supprimée avec succée');
    }
}
