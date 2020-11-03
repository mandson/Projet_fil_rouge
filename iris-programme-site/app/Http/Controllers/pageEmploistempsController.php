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

class pageEmploistempsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //


        $actualites=actualite::all();
        $infos=top_info::all();
        $universites=universite::where('id', 1)
            ->orderBy('id', 'asc')

            ->get();




            $programmes=programme::all();
            $filieres=filiere::all();
            $modules=module::all();
            $departements=departement::all();
            $codes=codeFil::all();
            $proffesseurs=proffesseur::all();
            $categories=categorie_prog::all();
            $niveaux=niveau::all();
            $lieus=lieu::all();
        return view('users_views/temps', compact('universites','actualites','infos','programmes','departements','modules','filieres',
        'codes','categories','proffesseurs','niveaux','lieus'));
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
