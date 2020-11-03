<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
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

class configController extends Controller
{
    //
    public function index1(){
        $filieres=filiere::all();
        $modules=module::all();
        $departements=departement::all();
        $codes=codeFil::all();
        return view('admin.pages.configuration',compact('departements','modules','filieres','codes'));

    }

    public function index2(){
        $filieres=filiere::all();
        $modules=module::all();
        $departements=departement::all();
        $codes=codeFil::all();
        return view('admin.pages.config-liste',compact('departements','modules','filieres','codes'));
    }

    public function index3(){

        $grades=grade::all();
        return view('admin.pages.proffesseur',compact('grades'));
    }

    public function index4(){
        $programmes=programme::all();
        $filieres=filiere::all();
        $modules=module::all();
        $departements=departement::all();
        $codes=codeFil::all();
        $proffesseurs=proffesseur::all();
        $categories=categorie_prog::all();
        $niveaux=niveau::all();
        $salles=lieu::all();
        return view('admin.pages.listeProgramme',compact('programmes','departements','modules','filieres',
        'codes','categories','proffesseurs','niveaux','salles'));

    }
        //

        public function index5(){
            return view('admin.pages.index1');
        }
}
