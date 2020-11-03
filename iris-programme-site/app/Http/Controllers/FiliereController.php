<?php

namespace App\Http\Controllers;
use App\departement;
use App\filiere;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $filieres=filiere::all();
        return view('admin.pages.config-liste',compact('filieres'));


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
        //id-dep
        filiere::create([
            'id_dep'=>$request->id_dep,
            'item_fil'=>$request->item_fil

        ]);
            return redirect()->route('config.form')->notify()->success('Laravel Notify is awesome!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function show(filiere $filiere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function edit(filiere $filiere ,departement $departements)
    {
        //

        $departements=departement::all();
        return view('\admin\pages\modifier\edit_filiere', compact('filiere','departements'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, filiere $filiere)
    {
        //
        $filiere->update($request->all());
        return redirect()->route('config.liste');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\filiere  $filiere
     * @return \Illuminate\Http\Response
     */
    public function destroy(filiere $filiere)
    {
        //
        $filiere->delete();
        return redirect()->route('config.liste');

    }
}
