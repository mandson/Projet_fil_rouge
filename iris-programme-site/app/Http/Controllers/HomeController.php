<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
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

    public function handleAdmin()
    {
        return view('admin/pages/index1');
    }
}
