<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Importation des classes pour le mail
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\emailNotification;

class MessageController extends Controller
{
	// Le formulaire du message
	public function formemailNotification() {
		return view("forms.message-google");
	}

    // Envoi du mail aux utilisateurs
	public function sendemailNotification (Request $request) {

		#1. Validation de la requête
		$this->validate($request, [ 'message' => 'bail|required' ]);
        $id=$this->validate($request, [ 'idx' => 'bail|required' ]);

	#2. Récupération des utilisateurs
    $users = User::get()->where('id', $id);






		#3. Envoi du mail
		Mail::to($users)->bcc("mandson1er@gmail.com")
						->queue(new emailNotification($request->all()));

		return back()->withText("Notification  envoyé avec succes!");
	}

}
