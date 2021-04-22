<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Promotion;

class promotionController extends Controller
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
        $promotions = Promotion::all();
        return view('emploit.promotion',compact('promotions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('emploit.creer.promotion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        promotion::create($request->all());
        return redirect()->route('promotions.index')->with('message','promotion ajoutée avec succée');
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
    public function edit(Promotion $id)
    {
        $promo = Promotion::find($id);
        return View('emploit.editer.promotion',compact('promo', $promo));
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
        $promo = Promotion::find($id);
        

        $promo->update($request->all());
        return redirect()->route('promotions.index')->with('message','promotion modifiée avec succée');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = Promotion::find($id);

        $p->delete();

        return redirect()->route('promotions.index')->with('sup_message','prmotion supprimée avec succée');
    }
}
