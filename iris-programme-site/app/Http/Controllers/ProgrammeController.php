<?php

namespace App\Http\Controllers;

use App\programme;
use App\departement;
use App\filiere;
use App\module;
use App\codeFil;
use App\grade;
use App\categorie_prog;
use App\proffesseur;
use App\niveau;
use App\lieu;
use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $programmes=programme::all();
        $filieres=filiere::all();
        $modules=module::all();
        $departements=departement::all();
        $codes=codeFil::all();
        $proffesseurs=proffesseur::all();
        $categories=categorie_prog::all();
        $niveaux=niveau::all();
        $salles=lieu::all();
        return view('admin.pages.programmeform',compact('programmes','departements','modules','filieres',
        'codes','categories','proffesseurs','niveaux','salles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $imagePath=request('pdf')->store('uploads','public');
        programme::create([
            'heur_dM'=>$request->heur_dM,
            'heur_fM'=>$request->heur_fM,
            'heur_dS'=>$request->heur_dS,
            'heur_fS'=>$request->heur_fS,
            'dat_deb'=>$request->dat_deb,
            'dat_fin'=>$request->dat_fin,
             'pdf'=>$imagePath,
            'detail'=>$request->detail,
            'id_fil'=>$request->id_fil,
            'id_lieu'=>$request->id_lieu,
            'id_cat'=>$request->id_cat,
            'id_prof'=>$request->id_prof,
            'id_niv'=>$request->id_niv,


                  ]);
           return redirect()->route('programme.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function show(programme $programme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function edit(programme $programme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, programme $programme)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\programme  $programme
     * @return \Illuminate\Http\Response
     */
    public function destroy(programme $programme)
    {
        //
    }
}
