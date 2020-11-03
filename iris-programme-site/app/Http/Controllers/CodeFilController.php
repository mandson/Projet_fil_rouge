<?php

namespace App\Http\Controllers;
use\App\departement;
use App\module;
use App\filiere;
use App\codeFil;
use Illuminate\Http\Request;

class CodeFilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $module=module::all();
        $code=codeFil::all();
        $filieres=filiere::all();
        $departements=departement::all();
        return view('\admin\pages\modifier\edit_codefil', compact('module','filieres','departements','code'));

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
        codeFil::create([
            'id_fil'=>$request->id_fil,
            'code_item'=>$request->code_item

        ]);
           return redirect()->route('config.form');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\codeFil  $codeFil
     * @return \Illuminate\Http\Response
     */
    public function show(codeFil $codeFil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\codeFil  $codeFil
     * @return \Illuminate\Http\Response
     */
    public function edit(codeFil $codeFil)
    {
        //

        $module=module::all();
        $code=codeFil::all();
        $filieres=filiere::all();
        $departements=departement::all();
        return view('\admin\pages\modifier\edit_codefil', compact('module','filieres','departements','code'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\codeFil  $codeFil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, codeFil $codeFil )
    {
        //
        $codeFil->update($request->all());
        return redirect()->route('config.liste');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\codeFil  $codeFil
     * @return \Illuminate\Http\Response
     */
    public function destroy(codeFil $codeFil)
    {
        //
        $codeFil->delete();
        return redirect()->route('config.liste');
    }
}
