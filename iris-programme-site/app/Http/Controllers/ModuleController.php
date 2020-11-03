<?php

namespace App\Http\Controllers;
use\App\departement;
use App\filiere;
use App\module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        module::create([
            'id_fil'=>$request->id_fil,
            'item_mod'=>$request->item_mod,
            'coefficient'=>$request->coefficient
        ]);
           return redirect()->route('config.form');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\module  $module
     * @return \Illuminate\Http\Response
     */
    public function show(module $module)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit(module $module)
    {
        //
        $filieres=filiere::all();
        $departements=departement::all();
        return view('\admin\pages\modifier\edit_module', compact('module','filieres','departements'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, module $module)
    {
        //
        $module->update($request->all());
        return redirect()->route('config.liste');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(module $module)
    {
        //
        $module->delete();
        return redirect()->route('config.liste');
    }
}
