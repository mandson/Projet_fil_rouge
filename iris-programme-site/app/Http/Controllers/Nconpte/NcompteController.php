<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Ncompte;
class NcompteController extends Controller
{
    //

    public function form(){
        return view('./users_views/new_compte/form_newCompte');
    }

    public  function store(Request $request){
        Ncompte::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'filiere'=>$request->filiere,
            'matricule'=>$request->matricule,
            'email'=>$request->email,

        ]);
  return view('./users_views/new_compte/ncompte_message');
    }
}
