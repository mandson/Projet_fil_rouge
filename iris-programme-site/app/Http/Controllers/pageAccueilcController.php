<?php

namespace App\Http\Controllers;
use App\universite;
use App\actualite;
use App\top_info;
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

class pageAccueilcController extends Controller
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

        $actualites=actualite::all();
        $infos=top_info::all();

     $i=1 ;
            $universites=universite::where('id',$i)
            ->orderBy('id', 'desc')
            ->take(1)
            ->get();

             # code...# code...
        return view('./users_views/accueil',compact('programmes','departements','modules','filieres',
        'codes','categories','proffesseurs','niveaux','salles','universites','actualites','infos'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
