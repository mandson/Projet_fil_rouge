<?php

namespace App\Http\Controllers;
use App\categorie_prog;
use App\niveau;
use Illuminate\Http\Request;

class NiveauController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories=categorie_prog::all();
        $niveaux=niveau::all();
        return view('admin.pages.niveau_categorie',compact('niveaux','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        niveau::create([
            'item_niv'=>$request->item_niv,
        ]);
           return redirect()->route('niveau.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function show(niveau $niveau)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function edit(niveau $niveau)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, niveau $niveau)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\niveau  $niveau
     * @return \Illuminate\Http\Response
     */
    public function destroy(niveau $niveau)
    {
        //
    }
}
