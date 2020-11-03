<?php

namespace App\Http\Controllers;
use App\internationalArticle;
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
class frontArticleController extends Controller
{
    //
    public function index()
    {

        $universites=universite::where('id', 1)
        ->orderBy('id', 'asc')

        ->get();

        $internationnalArticle=new internationalArticle();
        $top=$internationnalArticle->getTopnews();
        $general=$internationnalArticle->getarticles();
        $sources=$internationnalArticle->getsources();

        return view('users_views/oeil',compact('universites'),[

            'top'=>$top,
            'popular'=>$general,
            'sources'=>$sources

            ]);
    }
}
