<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ncompte;
use App\module;
use App\codeFil;
use App\filiere;
use App\categorie_prog;
use App\proffesseur;
use App\niveau;
use App\lieu;
use Illuminate\Support\Facades\Mail;
use App\Mail\emailNotification;

class NcompteController extends Controller
{
    //

    public function form(){

        $modules=module::all();
        $codes=codeFil::all();
        $proffesseurs=proffesseur::all();
        $categories=categorie_prog::all();
        $niveaux=niveau::all();
        $salles=lieu::all();
        $filieres=filiere::all();
        // $departements=departement::all();
        return view('./users_views/new_compte/form_newCompte',compact('filieres,'));
    }

    public  function store(Request $request){
        Ncompte::create([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'id_fil'=>$request->id_fil,
            'matricule'=>$request->matricule,
            'status'=>$request->status,
            'anniversaire'=>$request->anniversaire,
            'email'=>$request->email,

        ]);
  return view('./users_views/new_compte/ncompte_message');
    }

    public function liste(){

        $ncomptelistes=Ncompte::where('status', 1)
        ->orderBy('nom', 'asc')

            ->get();
        return view('./users_views/new_compte/ncompte_liste', compact('ncomptelistes'))->withText("Notification  envoyé avec succes!");;
    }


    public function verification( int $id,string $nom){

        $ncompteliste=Ncompte::find($id);
        return view('./users_views/new_compte/ncompte_verification', compact('ncompteliste'));
    }



    // Le formulaire du message
	public function formemailNotification() {
		return view("forms.message-google");
	}

    // Envoi du mail aux utilisateurs
	public function sendemailNotification (Request $request) {

		#1. Validation de la requête
    $this->validate($request, [
        'message' => 'bail|required',
       'id'=> 'bail|required'
    ]);


		#2. Récupération des utilisateurs

        // $users = User::all();
        $users=User::get()->where('id', 13);
        // ->orderBy('id', 'asc')


		#3. Envoi du mail
		Mail::to($users)->bcc("mandson1er@gmail.com")
						->queue(new emailNotification($request->all()));

		return back()->withText("Notification  envoyé avec succes!");
	}

    public function terminers( Request $request, Ncompte $ncompteliste){
        $ncompteliste->update($request->all());


}
}
